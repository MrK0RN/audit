import get_info
import infoo
import requests


url = "http://193.108.113.135/mainAPI.php"
z = get_info.get_summary()
print(len(z))
z["more_info"] = infoo.get_txt()

print(z)

resp = requests.post(url, data=z)
print(resp.url)