<?php
$username = $_post['username'];
$password = $_post['password'];
$email = $_post['email'];
$mobile = $_post['mobile'];

if(!empty($username) || !empty($password) || !empty($email) || !empty($mobile)) 
{
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "crt"

//create database connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if(mysqli_connect_error())
{
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    else
    {
        $SELECT = "SELECT email From register Where email = ? Limit 1";
        $INSERT = "INSERT Into register (username, password, email, mobile) values (?, ?, ?, ?)";

        //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt = bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0)
        {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt = bind_param("sssi", $username, $password, $email, $mobile);
            $stmt->execute();
            echo "New Record Inserted Successfully";
            else
            {
                echo "This email is already registered"
            }
            $stmt->close();
            $conn->close();
        }
    }
    else
    {
        echo "All Filled are required"
        die();
    }
}
}