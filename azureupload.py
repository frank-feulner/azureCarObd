import time
import sys
import json
sys.path.insert(0, '/home/frank/.local/lib/python3.5/site-packages/')
import azure
from azure.servicebus import ServiceBusService

#Parameter aus dem uebergebenen Query lesen. Vorher pruefen, ob einer uebergeben wurde

if (len(sys.argv) > 1):
    print (sys.argv[1])
    tmpstring1 = sys.argv[1]
    tmpstring1 = tmpstring1.replace("OK", "")
    tmpstring = {}
    tmplist = tmpstring1.split("&")
	

    for part in tmplist:
        parts = part.split("=")
        tmpstring[parts[0]] = parts[1]
    tmpjson = json.dumps(tmpstring)
    print(tmpjson)
else:
    print('no arguments')
    sys.exit(0)

key_name = "Sender"
key_value = "kzfwcTmKws8qtAF1O8+XCzWb8E983mjyOw4v77W2QQc="

sbs = ServiceBusService("carObdHub",shared_access_key_name=key_name, shared_access_key_value=key_value)


while(True):
	print('sending...')
	sbs.send_event('myObdHub', tmpjson)
	print('sent!')
	sys.exit(0)


