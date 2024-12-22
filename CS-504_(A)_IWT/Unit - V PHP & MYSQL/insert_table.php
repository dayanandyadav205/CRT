<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "ALTER TABLE student ADD column Address VARCHAR(50) AFTER reg_date)";

if ($conn->query($sql) === TRUE) {
  echo "Table Altered successfully ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>