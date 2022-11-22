CREATE DATABASE IF NOT EXISTS `spjdatabase`;

USE `spjdatabase`;

CREATE TABLE IF NOT EXISTS `j` (
`jno` varchar(20) NOT NULL,
`jname` varchar(20) NOT NULL,
`city` varchar(20) NOT NULL
);


CREATE TABLE IF NOT EXISTS `p` (
`pno` varchar(20) NOT NULL,
`pname` varchar(20) NOT NULL,
`color` varchar(20) NOT NULL,
`pweight` int(11) NOT NULL,
`city` varchar(20) NOT NULL
);


CREATE TABLE IF NOT EXISTS `s` (
`sno` varchar(20) NOT NULL,
`sname` varchar(20) NOT NULL,
`sstatus` int(11) NOT NULL,
`city` varchar(20) NOT NULL
);


CREATE TABLE IF NOT EXISTS `spj` (
`sno` varchar(20) NOT NULL,
`pno` varchar(20) NOT NULL,
`jno` varchar(20) NOT NULL,
`qty` int(11) NOT NULL
);

/* II */


INSERT INTO `spjdatabase`.`s` (
`sno` ,
`sname` ,
`sstatus` ,
`city`
)
VALUES ('S1', 'Smith', '20', 'London'),
('S2', 'Jones', '10', 'Paris'),
('S3', 'Blake', '30', 'Paris'),
('S4', 'Clark', '20', 'London'),
('S5', 'Adams', '30', 'Athens');



INSERT INTO `spjdatabase`.`p` (
`pno` ,
`pname` ,
`color` ,
`pweight` ,
`city`
)
VALUES ('P1', 'Nut', 'Red', '12', 'London'),
('P2', 'Bold', 'Green', '17', 'Paris'),
('P3', 'Screw', 'Blue', '17', 'Rome');


INSERT INTO `spjdatabase`.`j` (
`jno` ,
`jname` ,
`city`
)
VALUES ('J1', 'Sorter', 'Paris'),
('J2', 'Display', 'Rome'),
('J3', 'OCR', 'Athens'),
('J4', 'Console', 'Athens'),
('J5', 'Raid', 'London');


INSERT INTO `spjdatabase`.`spj` (
`sno` ,
`pno` ,
`jno` ,
`qty`
)
VALUES
('S1', 'P1', 'J1', '200'),
('S1', 'P1', 'J4', '700'),
('S2', 'P3', 'J1', '400'),
('S2', 'P3', 'J2', '200'),
('S2', 'P3', 'J3', '200'),
('S2', 'P3', 'J4', '500'),
('S4', 'P3', 'J5', '600'),
('S5', 'P2', 'J4', '100'),
('S5', 'P1', 'J4', '100'),
('S5', 'P3', 'J4', '200');


/*1*/

select pno,min(qty), max(qty) from spj group by pno;

/*2*/

 select s.sname from spj inner join s ON spj.sno = s.sno where pno='p3';

 /*3*/

select s.sno,sname from spj inner join s ON spj.sno = s.sno where jno='j1';

/*4*/

 select pno  from p where pno
 in(select pno from spj where sno in 
 (select sno from s where city='LONDON'));

/*5*/

 select pno from spj where jno in
 (select jno from j where city = 'london' ) and sno in 
 (select sno from s where city= 'london'); 

 /*6*/

 select pno, city from p where city like '_o%';

 /*7*/

 SELECT jname FROM   j WHERE  EXISTS (SELECT * FROM   spj 
 WHERE  spj.jno = j.jno AND    sno = 'S1');

 /*8*/

 SELECT p.COLOR FROM p WHERE p.PNO IN 
 (SELECT DISTINCT PNO FROM spj WHERE SNO='S1');

 /*9*/

  select distinct pno,jno from spj where jno in 
 (select jno from j where city='london');

 /*10*/

 select min(SSTATUS) from s where SSTATUS > (select min(SSTATUS) from s) ;
 