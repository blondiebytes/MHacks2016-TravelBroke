@app.route('/')
def index():
    booking = {
                'starting_location': 'JFK',
                'destination': 'Bahamas',
                'cost': '$49',
                'departure_date': '05/28/2016'
            }
    return render_template('index.html', booking=booking)

