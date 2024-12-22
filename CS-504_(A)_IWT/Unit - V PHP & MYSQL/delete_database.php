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

$sql = "DROP DATABASE college_db";

if ($conn->query($sql) === TRUE) {
  echo "Databse Deleted successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>