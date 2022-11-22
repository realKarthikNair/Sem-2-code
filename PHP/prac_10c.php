<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "student_info";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from student;";
$result = $conn->query($sql);


echo "<table border=\"2\">";
echo "<tr>";
echo "<th>Rollno</th>";
echo "<th>Sname</th>";
echo "<th>Age</th>";
echo "<th>City</th>";
echo "</tr>";

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";  
    echo "<td>".$row['rollno']."</td>";
    echo "<td>".$row['sname']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['city']."</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}


$conn->close();
?>    