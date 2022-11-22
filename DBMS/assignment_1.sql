create database BCA2;
use BCA2;

create table student(
rollno numeric(3) primary key,
sname varchar(20) not null,
age int,
city varchar(20));

create table dept(
deptno numeric(2) primary key,
dname varchar(20) not null);

create table faculty(
id int auto_increment primary key,
name varchar (20),
date_of_birth datetime,
address varchar(50),
gender enum("m","f"));

desc student;
desc dept;
desc faculty;

alter table student add mobileno bigint;
alter table dept add location varchar(20);
alter table faculty modify name varchar(50);

desc student;
desc dept;
desc faculty;