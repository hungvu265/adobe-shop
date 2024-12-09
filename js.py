import requests
from bs4 import BeautifulSoup
from urllib3.exceptions import InsecureRequestWarning

def get_js_files(url):
    proxies = {'https': 'http://hungvm:Roger%4026@172.16.2.204:3128/'}
    requests.packages.urllib3.disable_warnings(category=InsecureRequestWarning)
    response = requests.get(url, proxies=proxies, verify=False)
    soup = BeautifulSoup(response.text, 'html.parser')

    js_files = []

    for script in soup.find_all("script"):
        if script.get('src'):
            js_file = url + script['src']
            js_files.append(js_file)

    for css in soup.find_all("link"):
        if css.get('rel')[0] == 'stylesheet':
            js_file = url + css['href']
            js_files.append(js_file)

    return js_files

url = "https://divineshop.vn"
js_files = get_js_files(url)
for js_file in js_files:
    print(js_file)



# import requests
# from urllib3.exceptions import InsecureRequestWarning

# def download_file(url, destination):
#     proxies = {'https': 'http://hungvm:Roger%4026@172.16.2.204:3128/'}
#     requests.packages.urllib3.disable_warnings(category=InsecureRequestWarning)
#     response = requests.get(url, stream=True, proxies=proxies, verify=False)

#     with open(destination, 'wb') as out_file:
#         out_file.write(response.content)

# url = "https://divineshop.vn/app-ba910cf99ee59cc1b667.js"
# destination = "test.js"
# download_file(url, destination)

