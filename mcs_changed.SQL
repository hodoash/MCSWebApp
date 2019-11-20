Create DATABASE mcs; 
use mcs;

/* The first two tables' informations will be provided by the team members. They will not come from the users.That is why there is not section asking for their informations in the form on the website */

CREATE TABLE Hostel(
    Hostel_id int(8) PRIMARY KEY,
    Hostel_Name varchar(50) NOT NULL,
    Location varchar(50) NOT NULL);
    
CREATE TABLE Room(
    Room_number varchar(5)  PRIMARY KEY,
   	location varchar(50) NOT NULL,
    Facilities varchar(100) NOT NULL,
    Occupants SET( 'Single room', '2 Occupants', '3 Occupants', '4 Occupants'),
    host_id int(8),
    FOREIGN KEY (host_id) REFERENCES Hostel(Hostel_id)
);
    
CREATE TABLE Student_User(
    user_id int(8) AUTO_INCREMENT,
    Username varchar(15) NOT NULL,
    Email varchar(15)  NOT NULL,
    Password varchar(50) NOT NULL,
    hostel_id int(8),
    room_num varchar(5),
    PRIMARY KEY (user_id));
    
CREATE TABLE Booking(
    Room_choice SET('Single room', '2 Occupants', '3 Occupants', '4 Occupants'),
    Roommate_Names varchar(15) Null,
    user_stud_bookid int(8),
    room_stud_booknum varchar (5),
    FOREIGN KEY (user_stud_bookid) REFERENCES Student_User(user_id),
	FOREIGN KEY (room_stud_booknum) REFERENCES Room(Room_number));
    
CREATE TABLE Review(
    USER_Comment varchar(1500) NUll,
    user_stud_id int(8),
    room_stud_num varchar(5),
    hostel_stud_id int(8),
    FOREIGN KEY (user_stud_id) REFERENCES Student_User(user_id),
	FOREIGN KEY (room_stud_num) REFERENCES Room(Room_number),
    FOREIGN KEY (hostel_stud_id) REFERENCES Hostel(Hostel_id));
    
 /* Anyone can contact us even if their informations are not in the Database. that is why the Contact us table is not linked to any other table. */
CREATE TABLE Contact_Us(
    Name varchar(50) NULL,
    Email varchar(50) NOT NULL,
    Message varchar(500) NUll);
