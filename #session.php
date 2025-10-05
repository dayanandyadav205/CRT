<?php

session_start();

$_SESSION["username"]="Dayanand Yadav";
$_SESSION["class"]="BE";

echo $_SESSION["username"];
echo $_SESSION["class"];

session_unset();

?>