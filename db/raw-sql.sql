CREATE TABLE admin(
	aid int primary key auto_increment,
	username varchar(20),
	email varchar(50),
	password varchar(40)
);

CREATE TABLE owner(
	oid int primary key auto_increment,
	name varchar(50),
	idnum varchar(20),
	phone varchar(50),
	email varchar(100),
	aid int,
	foreign key(aid) references admin(aid)
);