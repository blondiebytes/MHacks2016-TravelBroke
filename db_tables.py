#!/usr/bin/python

import sqlite3 as lite
import sys

from flask import Flask;
app = Flask(_Travel-Broke_)


con = lite.connect('travel_broke.db')

with con:
    
    c = con.cursor()    
    c.execute("CREATE TABLE users(id INT, first_name STRING, last_name STRING, phone_number STRING, email STRING)")
    c.execute("CREATE TABLE transactions(id INT, starting_location STRING, destination STRING, cost INT, departure_date INT)")

    c.close()

@app.route('/endSession', methods=['GET'])
def outOfSession():
    if request.method == 'GET':
        getThelink();

def getTheLink():

@app.route('/startSession', methods=['POST'])
def startSession();
    if request.method == 'POST':
        giveInfoToServer();
    flask.redirect("http://localhost:8888/mhacks2016/pickTravel.php", code=302);

def giveInfoToServer():

