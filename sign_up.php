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
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Header Section -->
    <header>
        <a href="https://www.cdgi.edu.in" target="_blank"><img src="images/cdgi.jpg" alt="CDGI Logo" width="100"
                height="100" id="logo1" /></a>
        <h2>CS-310 CRT (Class Room Training) </h2>
        <a href="https://github.com/dayanandyadav205" target="_blank"><img src="images/github.png" alt="GitHub"
                style="float: right;" width="100" height="100" id="logo2" /></a>
    </header>

   <!-- Navigation Section -->
    <nav>
        <div class="navbar">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropdown-btn">HTML Elements ▼</button>
                <div class="dropdown-content">
                    <a href="#headings">Headings</a>
                    <a href="#para_formatting">Paragraph</a>
                    <a href="#list">Lists</a>
                    <a href="#tbl">Table</a>
                    <a href="#media">Media</a>
                </div>
            </div>
            <a href="contact.html">Contact</a>
            <a href="sign_up.php" style="float: right;">Sign Up</a>
            <a href="sign_in.php" style="float: right;">Sign In</a>
        </div>
    </nav>

    <!-- Aside Section -->
    <aside>
        <h3>References</h3>
        <ul>
             <li><a href="https://github.com/">GitHub</a></li>
             <li><a href="https://www.google.com">Google</a></li>
            <li><a href="https://www.w3schools.com/">W3C</a></li>
            <li><a href="https://whatwg.org/">WHATWG</a></li>
            
        </ul>
    </aside>

 <!-- Main Section -->
  <main>
        <?php
        // print_r($_POST)

        if(isset($_POST["submit"])){
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["confirm_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            if(empty($username) OR empty($email) OR empty($password) OR empty($passwordConfirm))
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
            if($password!==$passwordConfirm)
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

        <form action="sign_up.php" method="post">
            <fieldset>
                <legend>Sign Up</legend>
            <table>
                <tr>
                    <td><input type="text" class="form-control" name="username"  pattern="[a-zA-Z]{3,30}" placeholder="Username"></td>
                </tr>

                <tr>
                    <td>  <input type="text" class="form-control" name="email" placeholder="email"></td>
                </tr>

                <tr>
                    <td><input type="password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password"></td>
                </tr>

                <tr>
                    <td><input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password"></td>
                </tr>

                <tr>
                    <td> <input type="submit" class="btn btn-primary" name="submit" value="Register"></td>
                </tr>
            </table>
            </fieldset>
        </form>
        <br>
        <p>Already registered?</p><a href="sign_in.php">Sign In Here</a>
</main>
        <!-- Footer Section -->
    <footer>
        <a href="https://in.linkedin.com/company/chameli-devi-group-of-institutions">
            <img src="images/linkedin.jpg" width="3%"></a>

        <a href="https://mail.google.com/a/cdgi.edu.in">
            <img src="images/gmail.jpg" width="5%"></a>

        <a href="https://www.youtube.com/@socialcdgi">
            <img src="images/youtube.jpg" width="3%"></a>

        <p>&copy; Designed & Developed by Dayanand Yadav, Assistant Professor, CSE Department, CDGI, Indore</p>
    </footer>
  
</body>
</html>