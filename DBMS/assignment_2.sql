use BCA2;

insert into student values(10, 'Nidhi', 18, 'Delhi', 9999911111);
insert into student values(11, 'Ankit', 19, 'Gurugram', 9888881111);
insert into student values(12, 'Chetan', 18, 'Noida', 9777772222);

insert into dept values(1, 'VSIT', 'Block A');
insert into dept values(2, 'VJMC', 'Block B');
insert into dept values(3, 'VSBS', 'Block B');
insert into dept values(4, 'DSB', 'Block A');
insert into dept values(5, 'SCIENCE', 'Block A');

insert into faculty values(1, 'Vidhi Kapoor', '1990-01-15', 'Delhi', 'F');
insert into faculty values(2, 'Ansh Juneja', '1994-10-13', 'Gurugram', 'M');
insert into faculty values(3, 'Sourabh Singh', '1987-03-09', 'Noida', 'M');

select * from student;
select * from dept;
select * from faculty;

select * from student where age>18;

delete from dept where deptno=5;

select * from faculty where gender="M";


create view view_ka_naam as select * from faculty where gender="M";

select * from view_ka_naam;
