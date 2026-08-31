import argparse
import os

import paramiko

HOST = "xs271057.xsrv.jp"
PORT = 10022
USERNAME = "xs271057"
KEY_PATH = r"C:\Users\鈴木真理子\.ssh\xs271057.key"
REMOTE_BASE = "/home/xs271057/acus-fukuyama.com/public_html"
LOCAL_BASE = os.path.dirname(os.path.abspath(__file__))

# アップロード対象ファイル（.vscode/.git 等を除く）
IGNORE = {".vscode", ".git", ".DS_Store", "node_modules", ".venv", "upload_sftp.py", "__pycache__", ".ssh", ".env"}

def collect_files(base):
    files = []
    for root, dirs, filenames in os.walk(base):
        dirs[:] = [d for d in dirs if d not in IGNORE]
        for f in filenames:
            if f in IGNORE or f.endswith((".log", ".zip", ".py", ".key")):
                continue
            local_path = os.path.join(root, f)
            rel_path = os.path.relpath(local_path, base).replace("\\", "/")
            files.append((local_path, rel_path))
    return files

def ensure_remote_dirs(sftp, remote_path):
    parts = remote_path.strip("/").split("/")
    current = ""
    for part in parts:
        current += "/" + part
        try:
            sftp.stat(current)
        except FileNotFoundError:
            sftp.mkdir(current)

def load_key(path):
    for key_cls in (paramiko.Ed25519Key, paramiko.RSAKey, paramiko.ECDSAKey):
        try:
            return key_cls.from_private_key_file(path)
        except (paramiko.SSHException, FileNotFoundError):
            continue
    raise SystemExit(f"秘密鍵を読み込めませんでした: {path}")

def main():
    parser = argparse.ArgumentParser(description="Acus サイトをエックスサーバーへ SFTP アップロード")
    parser.add_argument("--dry-run", action="store_true",
                        help="接続・アップロードを行わず、対象ファイル一覧のみ表示")
    args = parser.parse_args()

    files = collect_files(LOCAL_BASE)
    print(f"{len(files)} ファイルをアップロードします...")

    if args.dry_run:
        for _, rel_path in files:
            print(f"  [dry-run] {rel_path} -> {REMOTE_BASE}/{rel_path}")
        print("dry-run 完了（実際のアップロードは行っていません）")
        return

    key = load_key(KEY_PATH)
    transport = paramiko.Transport((HOST, PORT))
    transport.connect(username=USERNAME, pkey=key)
    sftp = paramiko.SFTPClient.from_transport(transport)

    for local_path, rel_path in files:
        remote_path = f"{REMOTE_BASE}/{rel_path}"
        remote_dir = remote_path.rsplit("/", 1)[0]
        ensure_remote_dirs(sftp, remote_dir)
        sftp.put(local_path, remote_path)
        print(f"  ✓ {rel_path}")

    sftp.close()
    transport.close()
    print("完了")

if __name__ == "__main__":
    main()
