<?php

session_start();

echo $_SESSION["username"];
echo $_SESSION["class"];

session_unset();
?>