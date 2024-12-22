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

// sql to create table
$sql = "ALTER TABLE student ADD branch VARCHAR(30) AFTER lastname";

if ($conn->query($sql) === TRUE) {
  echo "Table Altered successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>