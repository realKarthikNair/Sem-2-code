<?php

function print_table($table_name, $sql){
global $conn;
$conn  = new mysqli("localhost", "root", "123456", "student_info");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query($sql);

echo "<table border=\"1\">";
echo "<tr>";
$row=$result->fetch_assoc();

for ($i=0; $i<count($row); $i++) {
  echo "<th>".array_keys($row)[$i]."</th>";
}
echo "</tr>";
$result->close();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    for ($i=0; $i < count($row); $i++) {
    echo "<td>".$row[array_keys($row)[$i]]."</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
}
echo "Table student before modifications<br>";
print_table("student", "select * from student;");
echo "Deleting Student 3 row and inserting student 4 row...<br><br>";
$sql="delete from student where rollno=3";                          
$result = $conn->query($sql);
$sql="insert into student values (004, 'Manish', 19, 'Delhi')";                          
$result = $conn->query($sql);
print_table("student", "select * from student;");
echo "Table schema before delete, modify and add operations<br><br>";
print_table("student", "desc student");
$sql="alter table student drop column city;";
$result = $conn->query($sql);
$sql="alter table student modify column sname char(20)";
$result = $conn->query($sql);
$sql="alter table student add column mobile bigint";
$result = $conn->query($sql);
echo "Table schema after delete, modify and add operations<br><br>";
print_table("student", "desc student");
echo "Deletin table student...<br><br>";
if ($conn->query("drop table if exists student;")==1)
echo "Table student deleted successfully!!";
$conn->close();
?>