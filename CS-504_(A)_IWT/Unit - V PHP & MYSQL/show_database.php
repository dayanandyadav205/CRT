<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass);

if($mysqli->connect_errno ) {
   printf("Connect failed: %s", $mysqli->connect_error);
   exit();
}
//printf('Connected successfully.');
if ($result = $mysqli->query("SHOW DATABASES")) {
   printf("Show Database executed successfully..!");
   echo "Database list are: ";
   while($row = mysqli_fetch_array($result)){
       print_r($row);
   }
}
if ($mysqli->errno) {
    printf("Could not find database: %s", $mysqli->error);
}
$mysqli->close();     
?>