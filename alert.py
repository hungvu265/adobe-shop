import time
import requests
from plyer import notification
from urllib3.exceptions import InsecureRequestWarning

while(True):
    proxies = {'https': 'http://hungvm:Roger%4026@172.16.2.204:3128/'}
    requests.packages.urllib3.disable_warnings(category=InsecureRequestWarning)
    r = requests.get('https://api.binance.com/api/v3/ticker/price?symbol=BTCUSDT', proxies=proxies, verify=False)
    res = r.json()
    price = float(res['price'])
    print(price)
    if (price < 92279.01):
        notification.notify(title = "BTC NOTIFICATION", message= 'price: '+str(price), timeout=2)

    time.sleep(30)
