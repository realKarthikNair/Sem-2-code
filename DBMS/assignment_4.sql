/* create database employee; */
use employee;


create table Emp(
EMPNO	NUMERIC(4),
ENAME	VARCHAR(20) NOT NULL,	
JOB	CHAR(10),	
MGR	NUMERIC(4),
HIREDATE DATETIME,
SAL	NUMERIC(9,2),
COMM	NUMERIC(7,2),
DEPTNO NUMERIC (2),
primary key(EMPNO));

create table DEPT(
DEPTNO NUMERIC(2),
DNAME VARCHAR(20)  NOT NULL,	
LOC  VARCHAR(10),
primary key (DEPTNO));

desc Emp;
desc DEPT;

INSERT INTO Emp( EMPNO,ENAME,JOB,MGR,HIREDATE,SAL,COMM,DEPTNO )
VALUES (7349, 'Smith','Clerk',7902, '1980-12-17',800,null,20),
	   (7699,'Allen','Salesman',7698,'1981-02-20',1600,300,30),
       (7551,'ward','Salesman',7698,'1981-02-22',1250,500,30),
       (7566,'Jones','Manager',7839,'1981-04-02',2975,null,20),
       (7654,'Martin','Salesman',7698,'1981-09-28',1250,1400,30),
       (7698,'Blake','Manager',7839,'1981-05-01',null,2850,30),
       (7782, 'Clark','Manager',7839,'1981-06-09',null,2450,10),
       (7788,'Scott','analyst',7566,'1987-04-19',null,3000,20),
       (7839,'King','President',null,'1981-11-17',null,5000,10),
       (7844,'Turner','Salesman',7698,'1981-09-08',1500,0,30),
       (7876,'Adams','Clerk',7788,'1987-05-23',null,1100,20),
       (7900,'James','Clerk',7698,'1981-12-03',null,950,30),
       (7902,'Ford','Analyst',7566,'1981-12-03',null,3000,20), 
       (7934,'Miller','Clerk',7782,'1982-01-23',null,1300,10);
	
INSERT INTO DEPT(DEPTNO,DNAME,LOC)
VALUES (10,'ACCOUNTING','NEW YORK'),
       (20,'RESEARCH','DALLAS'),
	(30,'SALES','CHICAGO'),
       (40,'OPERATIONS','BOSTON');  

select * from Emp;
select * from DEPT;

/*  1. Select all the records from emp table.
    2. Select all the records from dept table.
    3. Find the employee name, salary who is working in dept no 20.
    4. Find the name, job, salary of the employee who is manager.
    5. Find the name, job, salary of the employee who is not a manager. */

    