import paramiko
import os

HOST = "zeninc.sakura.ne.jp"
PORT = 22
USERNAME = "zeninc"
PASSWORD = "2epgLh5hfGt_"
REMOTE_BASE = "/home/zeninc/www/Acus"
LOCAL_BASE = os.path.dirname(os.path.abspath(__file__))

# アップロード対象ファイル（.vscode/.git 等を除く）
IGNORE = {".vscode", ".git", ".DS_Store", "node_modules", ".venv", "upload_sftp.py", "__pycache__"}

def collect_files(base):
    files = []
    for root, dirs, filenames in os.walk(base):
        dirs[:] = [d for d in dirs if d not in IGNORE]
        for f in filenames:
            if f in IGNORE or f.endswith((".log", ".zip", ".py")):
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

transport = paramiko.Transport((HOST, PORT))
transport.connect(username=USERNAME, password=PASSWORD)
sftp = paramiko.SFTPClient.from_transport(transport)

files = collect_files(LOCAL_BASE)
print(f"{len(files)} ファイルをアップロードします...")

for local_path, rel_path in files:
    remote_path = f"{REMOTE_BASE}/{rel_path}"
    remote_dir = remote_path.rsplit("/", 1)[0]
    ensure_remote_dirs(sftp, remote_dir)
    sftp.put(local_path, remote_path)
    print(f"  ✓ {rel_path}")

sftp.close()
transport.close()
print("完了")
