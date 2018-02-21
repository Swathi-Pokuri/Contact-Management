create database contactmgmt;
use contactmgmt;

create table employee(
fname varchar(50) NOT NULL,
lname varchar(50) NOT NULL,
email varchar(50) NOT NULL unique,
aadhar varchar(12) NOT NULL unique,
password varchar(50)NOT NULL
);
);