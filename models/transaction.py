
class Transaction(db.Model):
    __tablename__ = "transactions"

    id = db.Column(db.Integer, primary_key=True)
    starting_location = db.Column(db.String, nullable=False)
    destination = db.Column(db.Integer, nullable=True)
    cost = db.Column(db.Integer, nullable=False)
    departure_date = db.Column(db.String, nullable=False)

    #listing_id = db.Column(db.Integer, db.ForeignKey('users.id'))
    #listing = db.relationship("User", back_populates="transactions")
    #reservations = db.relationship("Reservation", back_populates="transaction")
    
    def __init__(self, starting_location, cost, departure_date):
        self.starting_location = starting_location
        self.cost = cost
        self.departure_date = departure_date


 #   def __init__(self, starting_location, destination, cost, departure_date, listing):
 #       self.starting_location = starting_location
 #       self.destination = destination
 #       self.cost = cost
#        self.departure_date = departure_date
 #       self.listing = listing

    def __repr__(self):
        return '<Transaction %r %r %r %r>' % self.id, self.destination, self.cost, self.departure_date

