import argparse
import getpass
import os
import subprocess
import sys

import paramiko

if hasattr(sys.stdout, "reconfigure"):
    sys.stdout.reconfigure(errors="replace")

# ── エックスサーバー接続情報（SSH 公開鍵認証）──────────────────────────────
# エックスサーバーはパスワード認証不可。事前に公開鍵をサーバーパネルへ登録し、
# 対応する秘密鍵を下記パスに置くこと。
#   環境変数での上書き:
#     XSERVER_SSH_KEY            … 秘密鍵ファイルのパス
#     XSERVER_SSH_KEY_PASSPHRASE … 秘密鍵のパスフレーズ（未設定かつ必要時はプロンプト）
HOST = "sv17208.xserver.jp"
PORT = 10022
USERNAME = "xs271057"
KEY_PATH = os.environ.get(
    "XSERVER_SSH_KEY",
    os.path.join(os.path.expanduser("~"), ".ssh", "xserver_acus"),
)
REMOTE_BASE = "/home/xs271057/acus-fukuyama.com/public_html"
LOCAL_BASE = os.path.dirname(os.path.abspath(__file__))

# アップロード対象は column/ 配下のみ（デフォルト。--all で全ファイル）
TARGET_DIR = "column"

# --all 指定時（全ファイルデプロイ）の除外設定
ALL_IGNORE_DIRS = {".git", ".github", ".vscode", "node_modules", ".venv",
                   "__pycache__", ".ssh", "scripts"}
ALL_IGNORE_NAMES = {"upload_sftp.py", ".DS_Store", "desktop.ini", "Thumbs.db",
                    ".env", ".env.example", ".gitignore",
                    "package.json", "package-lock.json", "README.md", "article.html"}
ALL_IGNORE_EXT = (".py", ".pyc", ".log", ".zip", ".key", ".ps1", ".md")


def collect_all_files(base):
    """リポジトリ全体（除外設定を適用）を収集する。"""
    files = []
    for root, dirs, filenames in os.walk(base):
        dirs[:] = [d for d in dirs if d not in ALL_IGNORE_DIRS]
        for f in filenames:
            if f in ALL_IGNORE_NAMES or f.endswith(ALL_IGNORE_EXT):
                continue
            local_path = os.path.join(root, f)
            rel_path = os.path.relpath(local_path, base).replace("\\", "/")
            files.append((local_path, rel_path))
    files.sort(key=lambda x: x[1])
    return files


def collect_changed_files(base, target_dir):
    """git 管理下で変更のある column/ 配下ファイルを収集する。

    対象: 追加(A) / 変更(M) / リネーム(R) / 未追跡(??)
    除外: 削除(D) されたファイル、ローカルに存在しないファイル
    """
    result = subprocess.run(
        ["git", "status", "--porcelain", "--untracked-files=all", "--", target_dir],
        cwd=base,
        capture_output=True,
        text=True,
        encoding="utf-8",
    )
    if result.returncode != 0:
        raise SystemExit(f"git status に失敗しました:\n{result.stderr}")

    files = []
    for line in result.stdout.splitlines():
        if not line.strip():
            continue
        status = line[:2]
        path_part = line[3:]

        # リネーム/コピーは "old -> new" 形式。新しいパスを使う。
        if " -> " in path_part:
            path_part = path_part.split(" -> ", 1)[1]

        rel_path = path_part.strip().strip('"').replace("\\", "/")

        # 削除は対象外
        if "D" in status:
            continue

        local_path = os.path.join(base, rel_path.replace("/", os.sep))
        if not os.path.isfile(local_path):
            continue

        files.append((local_path, rel_path))

    files.sort(key=lambda x: x[1])
    return files


def load_key(path):
    if not os.path.isfile(path):
        raise SystemExit(
            f"秘密鍵が見つかりません: {path}\n"
            "  ssh-keygen で鍵を生成し、公開鍵をエックスサーバーのサーバーパネルに登録してください。\n"
            "  別の場所にある場合は環境変数 XSERVER_SSH_KEY でパスを指定できます。"
        )

    passphrase = os.environ.get("XSERVER_SSH_KEY_PASSPHRASE")
    key_classes = (
        paramiko.Ed25519Key,
        paramiko.RSAKey,
        paramiko.ECDSAKey,
    )

    for key_cls in key_classes:
        try:
            return key_cls.from_private_key_file(path, password=passphrase)
        except paramiko.PasswordRequiredException:
            passphrase = getpass.getpass(f"秘密鍵のパスフレーズ ({os.path.basename(path)}): ")
            try:
                return key_cls.from_private_key_file(path, password=passphrase)
            except paramiko.SSHException:
                continue
        except paramiko.SSHException:
            continue

    raise SystemExit(f"秘密鍵を読み込めませんでした（形式不明 / パスフレーズ不一致）: {path}")


def ensure_remote_dirs(sftp, remote_path):
    parts = remote_path.strip("/").split("/")
    current = ""
    for part in parts:
        current += "/" + part
        try:
            sftp.stat(current)
        except FileNotFoundError:
            sftp.mkdir(current)


def main():
    parser = argparse.ArgumentParser(
        description="column/ 配下の変更ファイルをエックスサーバーへ SFTP アップロード（SSH 公開鍵認証）"
    )
    parser.add_argument("--dry-run", action="store_true",
                        help="接続・アップロードを行わず、対象ファイル一覧のみ表示")
    parser.add_argument("--all", action="store_true",
                        help="git 差分ではなくリポジトリ全ファイルを対象にする")
    args = parser.parse_args()

    files = collect_all_files(LOCAL_BASE) if args.all else collect_changed_files(LOCAL_BASE, TARGET_DIR)

    if not files:
        print("アップロード対象のファイルはありません。")
        return

    print(f"{len(files)} 件のファイルをアップロードします...")

    if args.dry_run:
        for _, rel_path in files:
            print(f"  [dry-run] {rel_path} -> {REMOTE_BASE}/{rel_path}")
        print("dry-run 完了（実際のアップロードは行っていません）")
        return

    key = load_key(KEY_PATH)
    transport = paramiko.Transport((HOST, PORT))
    transport.connect(username=USERNAME, pkey=key)
    sftp = paramiko.SFTPClient.from_transport(transport)

    try:
        for local_path, rel_path in files:
            remote_path = f"{REMOTE_BASE}/{rel_path}"
            remote_dir = remote_path.rsplit("/", 1)[0]
            ensure_remote_dirs(sftp, remote_dir)
            sftp.put(local_path, remote_path)
            print(f"  ✓ {rel_path}")
    finally:
        sftp.close()
        transport.close()

    print("完了")


if __name__ == "__main__":
    main()
