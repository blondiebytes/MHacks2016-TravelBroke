#for flights 
import json
from amadeus import Flights
from Creds import FKEY, BTOK
import requests
import ast
f_api = Flights(FKEY)
'''
#for twilio
from airtng_flask.models import app_db, auth_token, account_sid, phone_number
from flask import render_template
from twilio.rest import TwilioRestClient
from Creds import TKEY

#initialization
db = app_db()
f_api = Flights(KEY)
guest = db.relationship("User", back_populates="reservations")

response_json = f_api.inspiration_search(
    origin = guest.origin, #use self.guest if class
    departure_date = guest.departure_date, #format should be "2015-11-25--2015-11-30"
    max_price = guest.budget,
    duration = guest.duration) #format should be "1--10"
'''
results_json = f_api.inspiration_search(
    origin = 'CHI', #use self.guest if class
    departure_date = '2016-02-29--2016-03-04', #format should be "2015-11-25--2015-11-30"
    max_price = '100',
    duration = '5--10') #format should be "1--10"

x = 0
flights = dict()
for resp in results_json.get('results'):
	if x < 5:
		#add to dictionary 5 travel results
		flights[resp.get('price')] = [resp.get('destination'), resp.get('departure_date'), 
		resp.get('return_date'), resp.get('airline'), 'airline_name']
		print json.dumps(flights[resp.get('price')])
		x += 1
	else:
		break

x = 0
for trip in flights:
	if x < 3:
		request_url = 'https://api.sandbox.amadeus.com/v1.2/travel-intelligence/airline-autocomplete?apikey=' + FKEY + '&term=' + flights[trip][3]
		airline_json = requests.get(request_url)
		response_data_json = json.dumps(ast.literal_eval(airline_json.text))
		results_json = json.loads(response_data_json)
		if results_json[0].get('value') == flights[trip][3]:
			flights[trip][4] = results_json[0].get('label')
		x += 1
	else:
		break

x = 0
for trip in flights:
	if x < 3:
		link = 'https%3A%2F%2Fwww.google.com%2Fflights%2F%23search%3Bf%3D'
		dept = flights[trip][1]
		ret = flights[trip][2]
		line = flights[trip][3]
		dest = flights[trip][0]
		org = 'CHI'
		link += org + '%3Bt%3D' + dest + '%3Bd%3D' + dept + '%3Br%3D' + ret + '%3Ba%3D' + line
		req_link = 'https://api-ssl.bitly.com/v3/shorten?access_token=' + BTOK + '&format=txt&longUrl=' + link
		x += 1
		print requests.get(req_link).text
