<?php
//open database connection
$mysqli = new mysqli('localhost','root','','student_info');

//Display error message
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$sql="SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'student_info'";
$result=$mysqli->query($sql);
while ( $tables = $result->fetch_assoc())
{
echo "<br>".$tables['TABLE_NAME'];
}
// Free memory by clearing result
$result->free();

// close connection 
$mysqli->close();