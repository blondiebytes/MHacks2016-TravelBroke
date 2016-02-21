
db = app_db()


class Reservation(db.Model):
    __tablename__ = "reservations"

    id = db.Column(db.Integer, primary_key=True)
    message = db.Column(db.String, nullable=False)
    status = db.Column(db.Enum('pending', 'confirmed', 'rejected', name='reservation_status_enum'), default='pending')

    guest_id = db.Column(db.Integer, db.ForeignKey('users.id'))
    listing_property_id = db.Column(db.Integer, db.ForeignKey('listing_properties.id'))
    guest = db.relationship("User", back_populates="reservations")
    listing_property = db.relationship("VacationListing", back_populates="reservations")

    def __init__(self, message, listing_property, guest):
        self.message = message
        self.guest = guest
        self.listing_property = listing_property
        self.status = 'pending'

    def confirm(self):
        self.status = 'confirmed'

    def reject(self):
        self.status = 'rejected'

    def __repr__(self):
        return '<VacationListing %r %r>' % self.id, self.name