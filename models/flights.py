#for flights 
from amadeus import Flights
from Creds import FKEY

#for twilio
from airtng_flask.models import app_db, auth_token, account_sid, phone_number
from flask import render_template
from twilio.rest import TwilioRestClient
from Creds import TKEY

#initialization
db = app_db()
flights = Flights(KEY)
guest = db.relationship("User", back_populates="reservations")

resp = flights.inspiration_search(
    origin = guest.origin, #use self.guest if class
    departure_date = guest.departure_date, #format should be "2015-11-25--2015-11-30"
    max_price = guest.budget,
    duration = guest.duration #format should be "1--10"
    )
