<?php
$servername = "localhost";
$username = "root";
$password = "123456";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error);
}
echo "MySQL Connected Successfully<br>";

$new_db='student_info';
$sql = "CREATE DATABASE $new_db";
if ($conn->query($sql) === TRUE) {
  echo "<br>Database $new_db created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();

?>