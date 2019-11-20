#use .....database

--
-- Table structure for table user
--
CREATE TABLE  user  (
  id int NOT NULL AUTO_INCREMENT,
  name char(40) NOT NULL,
  password varchar(40) NOT NULL,
  email varchar(40) NOT NULL,
  phone_no int(10),
  PRIMARY KEY(id)
);

CREATE TABLE review(
  id int NOT NULL AUTO_INCREMENT,
  name char(20) NOT NULL,
  subject VARCHAR(40) NOT NULL,
  matter VARCHAR (224) NOT NULL,
  PRIMARY KEY(id)
);


CREATE TABLE bookings(
  id int NOT NULL AUTO_INCREMENT,
  hostel char(10) NOT NULL,
  #roomtype int(1) NOT NULL,
  roommate int(1) NOT NULL,
  u_id int(8) NOT NULL,
  FOREIGN KEY(u_id) REFERENCES user(id),
  PRIMARY KEY(id)
);

CREATE TABLE roommates(
  id int NOT NULL AUTO_INCREMENT,
  rm_email varchar(15) NOT NULL,
  rm_phone_no int (10) NOT NULL,
  u_id int(8) NOT NULL,
  FOREIGN KEY(u_id) REFERENCES user(id),
  PRIMARY KEY (id)
);

