<?php

function desc($table_name){
global $conn;
$conn  = new mysqli("localhost", "root", "123456", "student_info");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "desc student  ;";
$result = $conn->query($sql);

// $a=$result->fetch_assoc();
// echo $a[array_keys($a)[0]];



echo "<table border=\"1\">";
echo "<tr>";
echo "<th>Field</th>";
echo "<th>Type</th>";
echo "<th>Null</th>";
echo "<th>Key</th>";
echo "<th>Default</th>";
echo "<th>Extra</th>";
echo "</tr>";


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

echo "Table schema before delete, modify and add operations<br><br>";
desc("student");
$sql="alter table student drop column city;";
$result = $conn->query($sql);
$sql="alter table student modify column sname char(20)";
$result = $conn->query($sql);
$sql="alter table student add column mobile bigint";
$result = $conn->query($sql);
echo "Table schema after delete, modify and add operations<br><br>";
desc("student");

$conn->close();
?>