<?php
session_start();
if(isset($_SESSION["user"]))
{
header("Location: dashboard.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body>
     <!-- Header iframe -->
  <iframe src="header.html" scrolling="no"></iframe>

    <div class="container">
        <?php
        // print_r($_POST)

        if(isset($_POST["submit"])){
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            if(empty($username) OR empty($email) OR empty($password) OR empty($passwordRepeat))
            {
                array_push($errors, "All fields required");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                array_push($errors, "Email is not valid");
            }
            if(strlen($password)<8)
            {
                array_push($errors, "Password must be atleast 8 character long");
            }
            if($password!==$passwordRepeat)
            {
                array_push($errors, "Password does not match");
            }

            require_once "database.php"; 
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount>0)
            {
                array_push($errors, "Email already exists");
            }
            if(count($errors)>0)
            {
                foreach($errors as $error)
                {
                    echo"<div class='alert alert-danger'>$error</div>";
                }
            }
            else
            {
               require_once "database.php"; 
               $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
               $stmt = mysqli_stmt_init($conn);
               $preparestmt = mysqli_stmt_prepare($stmt, $sql);
               if($preparestmt)
               {
                mysqli_stmt_bind_param($stmt,"sss", $username, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered succesfully.</div>";
               }
               else
               {
                die("Something went wrong");
               }
            }
        }
        ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="username"  pattern="[a-zA-Z]{3,30}" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="repeat password">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" name="submit" value="Register">
            </div>
        </form>
        <br>
        <div><p>Already registered?</p><a href="login.php">Login Here</a></div>
    </div>
<br>
                <!-- footer iframe -->
  <iframe src="footer.html" scrolling="no"></iframe>
</body>
</html>