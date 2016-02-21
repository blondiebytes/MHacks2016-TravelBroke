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
