class User(db.Model):
    __tablename__ = "users"

    id = db.Column(db.Integer, primary_key=True, nullable=False)
   # first_name = db.Column(db.String, nullable=False)
   # last_name = db.Column(db.String, nullable=False)
    name = db.Column(db.String, nullable=False)
   # date_of_birth = db.Column(db.Integer, nullable=False)
    email = db.Column(db.String, nullable=False)
   # password = db.Column(db.String, nullable=False)
    phone_number = db.Column(db.String, nullable=False)
   # credit_card_number = db.Column(db.Integer, nullable=False)
   # exp_date = db.Column(db.Integer, nullable=False)
#   CVV = db.Column(db.Integer, nullable=False)
  # billing_zip = db.Column(db.Integer, nullable=False)
  # billing_address = db.Column(db.String, nullable=False)
  # passport_number = db.Column(db.Integer, nullable=False)

  #  reservations = db.relationship("Reservation", back_populates="guest")
  #  listings = db.relationship("Listing", back_populates="listing")

    def __init__(self, name, email, phone_number):
        self.name = name;
        self.email = email;
        self.phone_number = phone_number;
  #  def __init__(self, first_name, last_name, date_of_birth, email, password, phone_number, 
  #               credit_card_number, exp_date, CVV, billing_zip, billing_address, passport_number):
  #      self.first_name = first_name
  #      self.last_name = last_name
  #      self.date_of_birth = date_of_birth
  #      self.email = email
  #      self.password = bcrypt.generate_password_hash(password)
  #       self.phone_number = phone_number
  #      self.credit_card_number = credit_card_number
  #      self.exp_date = exp_date
  #      self.CVV = CVV
  #      self.billing_zip = billing_zip
  #      self.billing_address = billing_address
  #      self.passport_number = passport_number

    def is_authenticated(self):
        return True

    def is_active(self):
        return True

    def is_anonymous(self):
        return False

    def get_id(self):
        try:
            return unicode(self.id)
        except NameError:
            return str(self.id)
