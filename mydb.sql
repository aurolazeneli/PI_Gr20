CREATE TABLE hotel 
(
  hotelno int(11)  NOT NULL,
  Name nvarchar(85) NOT NULL,
  State nvarchar(30) NOT NULL,
  PRIMARY Key (id)
) 
create table guest
(
guestno numeric(5),
guestname varchar(20),
guestaddress varchar(50),
primary key (guestno)

)

create table booking(
hotelno int(10),
guestno numeric(5),
datefrom date,
dateto date,
roomno numeric(5),
primary key (hotelno, guestno, datefrom),
foreign key (roomno, hotelno) REFERENCES room(roomno, hotelno),
foreign key (guestno) REFERENCES guest(guestno)
)


create table room(
roomno numeric(5),
hotelno varchar(10),
type varchar(10),
price decimal(5,2),
primary key (roomno, hotelno),
foreign key (hotelno) REFERENCES hotel(hotelno)

)

INSERT INTO hotel values 
(1, 'Maisan Hotel', 'Dubai');
INSERT INTO hotel values(2, 'Holiday In', 'Dubai');
INSERT INTO hotel values(3, 'Rove Dubai Marina', 'Dubai');
INSERT INTO hotel values(4, 'Al Bandar Rotana', 'Dubai');
INSERT INTO hotel values(5, 'Hampton By Hilton', 'Dubai');
INSERT INTO hotel values(6, 'Renaissance', 'Dubai');
INSERT INTO hotel values(7, 'Forenom Oulu', 'Finland');
INSERT INTO hotel values(8, 'Helsinki-Boulevard', 'Finland');
INSERT INTO hotel values(9, 'Lilla Roberts', 'Finland');
INSERT INTO hotel values(10, 'Airport Pilotti', 'Finland');
INSERT INTO hotel values(11, 'Radisson Marina', 'Finland');
INSERT INTO hotel values(12, 'Both Helsinki', 'Finland');
INSERT INTO hotel values(13, 'Volcano Santorini', 'Greece');
INSERT INTO hotel values(14, 'Sunset Paros', 'Greece');
INSERT INTO hotel values(15, 'Mykonos Princess', 'Greece');
INSERT INTO hotel values(16, 'Royal Hotel', 'Greece');
INSERT INTO hotel values(17, 'Avaton Luxory', 'Greece');
INSERT INTO hotel values(18, 'Diana Palace', 'Greece');
INSERT INTO hotel values(19, 'B&B Treviso', 'Italy');
INSERT INTO hotel values(20, 'Ocelle Thermae', 'Italy');
INSERT INTO hotel values(21, 'Hotel The Cube', 'Italy');
INSERT INTO hotel values(22, 'Hotel Mozart', 'Italy');
INSERT INTO hotel values(23, 'Best Wester', 'Italy');
INSERT INTO hotel values(24, 'Hotel Abazzia', 'Italy');
INSERT INTO hotel values(25, 'Water Breeze', 'Maldives');
INSERT INTO hotel values(26, 'Wave Sound', 'Maldives');
INSERT INTO hotel values(27, 'Arena Beach', 'Maldives');
INSERT INTO hotel values(28, 'Fihalhohi Island', 'Maldives');
INSERT INTO hotel values(29, 'Velana Blue', 'Maldives');
INSERT INTO hotel values(30, 'Kaani Beach Hotel', 'Maldives');
INSERT INTO hotel values(31, 'Holiday Inn', 'Switzerland');
INSERT INTO hotel values(32, 'Walhalla Guest', 'Switzerland');
INSERT INTO hotel values(33, 'Touchbed Gallen', 'Switzerland');
INSERT INTO hotel values(34, 'Millennium', 'Switzerland');
INSERT INTO hotel values(35, 'Grand Des Bains', 'Switzerland');
INSERT INTO hotel values(36, 'Raddison Blue', 'Switzerland');



insert into guest values(10001, 'John Kay', '56 High St, London');
insert into guest values(10002, 'Mike Ritchie', '18 Tain St, London');
insert into guest values(10003, 'Mary Tregear', '5 Tarbot Rd, Aberdeen');
insert into guest values(10004, 'Joe Keogh', '2 Fergus Dr, Aberdeen');
insert into guest values(10005, 'Carol Farrel', '6 Achray St, Glasgow');
insert into guest values(10006, 'Tina Murphy', '63 Well St, Glasgow');
insert into guest values(10007, 'Tony Shaw', '12 Park Pl, Glasgow');

insert into booking values('1', 10001, '04-04-01', '04-04-08', 501);
insert into booking values('1', 10004, '04-04-15', '04-05-15', 601);
insert into booking values('1', 10005, '04-05-02', '04-05-07', 501);
insert into booking values('1', 10002, '16-05-04', '04-05-29', 601);
insert into booking values('2', 10001, '04-05-01', null, 701);
insert into booking values('2', 10003, '04-04-05', '10-04-04', 1001);
insert into booking values('2', 10005, '04-05-12', '30-05-04', 1101);
insert into booking values('2', 10006, '04-04-21', null, 1101);
insert into booking values('2', 10002, '04-04-25', '04-05-06', 801);
insert into booking values('2', 10007, '04-05-13', '04-05-15', 1001);
insert into booking values('2', 10003, '04-05-20', null, 1001);

insert into room values(501, '19', 'single', 19);
insert into room values(601, '25', 'double', 29);
insert into room values(701, '1', 'family', 39);
insert into room values(1001, '2', 'single', 58);
insert into room values(1101, '2', 'double', 86);
insert into room values(1001, '23', 'single', 29.99);
insert into room values(1101, '30', 'family', 59.99);
insert into room values(701, '12', 'single', 10);
insert into room values(801, '15', 'double', 15);
insert into room values(901, '14', 'single', 18);
insert into room values(1001, '11', 'double', 30);
insert into room values(1101, '29', 'family', 35);

ALTER TABLE hotel
  ADD PRIMARY KEY (Id);
COMMIT;

