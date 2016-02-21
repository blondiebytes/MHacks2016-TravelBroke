import requests
import ast
import json

from flights import USER_DICT

from flask import Flask, request, redirect, session
import twilio.twiml

from Creds import FKEY

app = Flask(__name__)

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
			addr = results_json[x].get('address').get('line1')
			price = results_json[x].get('total_price').get('amount')
			phone = results_json[x].get('contacts')[0].get('detail') #this assumes phone number is always first element of contacts
			message += name + ", " + addr + ", $" + price + ", " + phone + " "
		print message
		#resp = twilio.twiml.Response()
		#resp.message(message)

if __name__ == "__main__":
	app.run(debug=True)

#TODO: error checking --> if there aren't enough flights, if user doesnt reply with a valid response