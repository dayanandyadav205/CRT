<?php
// error_reporting(0);

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "responsiveform3";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if($conn)
{
    // echo "Connection Ok";
}
else
{
    echo "Connection failed".mysqli_connect_error();
}
?>