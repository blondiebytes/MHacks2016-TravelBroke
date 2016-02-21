drop table if exists entries;
create table users (
  id integer primary key autoincrement,
    first_name text not null,
    last_name text not null,
    phone_number integer not null,
    email text not null
      );
create table transactions (
  id integer primary key autoincrement,
  starting_location text not null,
  destination text not null,
  cost integer not null,
  departure_date integer not null
     );
     
