<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "student_info";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$table="student";

$sql = "create table $table(
    rollno numeric(3) primary key,
    sname varchar(20) not null,
    age int,
    city varchar(20));";

if ($conn->query($sql) === TRUE) {
  echo "Table $table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql1 = "insert into student(rollno, sname, age, city)".//" values(19, 'joe', 19, 'gzb');";
"values"."(".$_POST['rollno1'].",'".$_POST['name1']."',".$_POST['age1'].",'".$_POST['city1']."'),".
"(".$_POST['rollno2'].",'".$_POST['name2']."',".$_POST['age2'].",'".$_POST['city2']."'),".
"(".$_POST['rollno3'].",'".$_POST['name3']."',".$_POST['age3'].",'".$_POST['city3']."');";


if ($conn->query($sql1) == TRUE) {
  echo "<br>Records inserted successfully";
} else {
  echo "Error: " . $sql1. "<br>" . $conn->error;
}

$conn->close();
?>
