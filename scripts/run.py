import requests
import ast
import json
import collections

#for flights 
from amadeus import Flights

#for texting
from twilio.rest import TwilioRestClient 

#from flights import USER_DICT

from flask import Flask, request, redirect, session
import twilio.twiml

from Creds import FKEY, BTOK, TTOK, TSID

app = Flask(__name__)

#inits
f_api = Flights(FKEY)
t_api = TwilioRestClient(TSID, TTOK)

USER_DICT = dict()

#do everything below when a request is received of when cron job excecutes:

#gets flight results 
results_json = f_api.inspiration_search(
    origin = self.starting_location, #use self.guest if class
    departure_date = self.departure_date, #format should be "2015-11-25--2015-11-30"
    max_price = self.cost,
    duration = '3--10') #format should be "1--10"

#add to dictionary 5 travel results
	#5 in case prices are not unique and they get overridden as keys
x = 0
flights = dict()
for resp in results_json.get('results'):
	if x < 5:
		flights[resp.get('price')] = [resp.get('destination'), resp.get('departure_date'), 
		resp.get('return_date'), resp.get('airline'), 'airline_name']
		x += 1
	else:
		break

#sort flights so cheapest are listed first
flights = collections.OrderedDict(sorted(flights.items()))

#add this flight list to user dict
USER_DICT['+17733075720'] = flights #TODO dont hardcode number

#get airline name and google flights link
x = 0
for trip in flights:
	if x < 3:
		#get airline name that matches code
		request_url = 'https://api.sandbox.amadeus.com/v1.2/travel-intelligence/airline-autocomplete?apikey=' + FKEY + '&term=' + flights[trip][3]
		airline_json = requests.get(request_url)
		response_data_json = json.dumps(ast.literal_eval(airline_json.text))
		results_json = json.loads(response_data_json)
		if results_json[0].get('value') == flights[trip][3]:
			flights[trip][4] = results_json[0].get('label')
		#get google flights link
		link = 'https%3A%2F%2Fwww.google.com%2Fflights%2F%23search%3Bf%3D'
		dest = flights[trip][0]
		dept = flights[trip][1]
		ret = flights[trip][2]
		line = flights[trip][3]
		org = self.starting_location #TODO don't hardcode
		#percent encoding of google link
		link += org + '%3Bt%3D' + dest + '%3Bd%3D' + dept + '%3Br%3D' + ret + '%3Ba%3D' + line
		#shorten google link using bit.ly
		req_link = 'https://api-ssl.bitly.com/v3/shorten?access_token=' + BTOK + '&format=txt&longUrl=' + link
		#create message string with travel info
		message = str(x+1) + ". You can travel to " + dest + " (" + dept + " to " + ret + ") for " + "$" + trip + " through " + flights[trip][4] + ". Book now at: " + requests.get(req_link).text
		#send message to user from twilio number 
		#TODO: dont hardcode number
		t_api.messages.create(to="+17733075720", from_="+15627418823", body=message)
		#print message for testing purposes
		print message
		x += 1
	else:
		break

@app.route("/", methods=['GET', 'POST']) 
def hotel_reply():
	user_num = request.values.get('From', None)
	if user_num in USER_DICT:
		trip = str(request.values.get('Body', None))
		flight = USER_DICT[user_num][trip]
		dest = flight[0]
		dept = flight[1]
		ret = flight[2]
		req_url = 'https://api.sandbox.amadeus.com/v1.2/hotels/search-airport?apikey=' + FKEY + '&location=' + dest + '&check_in=' + dept + '&check_out=' + ret + '&radius=25&number_of_results=3'
		hotel_json = requests.get(req_url)
		response_data_json = json.dumps(ast.literal_eval(hotel_json.text))
		results_json = json.loads(response_data_json).get('results')
		message = "Hotels near " + dest + " for your trip: "
		for x in range(0, 3):
			name = results_json[x].get('property_name')
			#addr = results_json[x].get('address').get('line1')
			price = results_json[x].get('total_price').get('amount')
			phone = results_json[x].get('contacts')[0].get('detail') #this assumes phone number is always first element of contacts
			message += name + ", " + ", $" + price + ", " + phone + ". "
		print message
		resp = twilio.twiml.Response()
		resp.message(message)

if __name__ == "__main__":
	app.run(debug=True)

#TODO: error checking --> if there aren't enough flights, if user doesnt reply with a valid response