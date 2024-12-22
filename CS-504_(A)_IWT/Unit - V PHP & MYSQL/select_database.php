<?php
$mysqli = new mysqli("localhost","root","","mysql");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Return name of current default database
if ($result = $mysqli -> query("SELECT DATABASE()")) {
  $row = $result -> fetch_row();
  echo "Default database is " . $row[0];
  $result -> close();
}

// Change db to "student_info" db
$mysqli -> select_db("student_info");

// Return name of current default database
if ($result = $mysqli -> query("SELECT DATABASE()")) {
  $row = $result -> fetch_row();
  echo "Database Changed, New Default database is " . $row[0];
  $result -> close();
}

$mysqli -> close();
?>