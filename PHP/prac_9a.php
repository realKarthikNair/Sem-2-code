<?php
class student
{
    public $student_id;
    public $name;
    public $roll_no;
    public $marks;
}
$a = new student();
$a -> student_id= '0021';
$a -> name='Amit Mishra';
$a -> roll_no=02;
$a -> marks=90;
echo "Info of student ".$a->student_id;
echo "<br>";
echo "<pre>";
print_r($a);
?>