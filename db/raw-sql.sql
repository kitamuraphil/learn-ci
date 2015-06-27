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

CREATE TABLE property(
    pid int primary key auto_increment,
    name varchar(50),
    description text,
    website varchar(50),
    postal_address int,
    floor int,
    number_of_houses int,
    email varchar(50),
    gid int,
    foreign key (gid) references agent(gid)
    );
CREATE TABLE caretaker(
    cid int primary key auto_increment,
    name varchar(50),
    website varchar(50),
    postal address int,
    phone number int,
    phone number alt,
    email varchar(50),
    pid int,
    foreign key (pid) references property(pid)
    );

CREATE TABLE securityguard(
    sid int primary key auto_increment,
    name varchar(50),
    website varchar(50),
    postal address int,
    phone number int,
    phone number alt,
    email varchar(50),
    pid int,
    foreign key (pid) references property(aid)
    );

CREATE TABLE houses(
    hid  int  primary key auto_increment,
    house number int,
    floor int,
    type varchar(50),
    condition text,
    pid int,
    foreign key (pid) references property(pid)
    );

CREATE TABLE contactperson(
    tid int primary key auto_increment,
    name varchar(50),
    website varchar(50),
    postal address int,
    phone number int,
    phone number alt,
    email varchar(50),
    gid int,
    foreign key (gid) references agent(gid)
    );

CREATE TABLE rent(
    rid int primary key auto_increment,
    rent int,
    gabbage int,
    gateman int,
    water int,
    caretaker int,
    total int,
    tnid int,
    hid int,
    foreign key (tnid) references tenant(tnid), foreign key (hid) references tenant(hid)
    );

CREATE TABLE samplephoto(
    eid int primary key auto_increment,
    description text,
    pid int,
    foreign key (pid) references property(pid)
    );

CREATE TABLE issue(
    iid int primary key auto_increment,
    description text,
    hid int,
    foreign key (hid) references houses(hid)
    );

CREATE TABLE tenant(
    tnid int primary key auto_increment,
    name varchar(50),
    website varchar(50),
    company varchar(50),
    postal address int,
    phone number int,
    phone number alt,
    email varchar(50),
    from-date varchar(50),
    to-date varchar(50),
    hid int,
    foreign key (hid) references agent(hid)
    );

CREATE TABLE agent(
    gid int primary key auto_increment,
    name varchar(50),
    website varchar(50),
    postal address int,
    phone number int,
    phone number alt int,
    email varchar(50),
    description text,
    );



