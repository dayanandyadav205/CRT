<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "registration";

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