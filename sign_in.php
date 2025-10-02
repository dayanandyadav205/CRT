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
    <title>Login form</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">

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
    <div class="container">
        <?php
        if(isset($_POST["sign_in"]))
        {
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($user)
            {
                if(password_verify($password, $user["password"]))
                {
                session_start();
                $_SESSION["user"] = "yes";
                header("Location: dashboard.php");
                die();
                }
                else{
                    echo "<div class='alert alert-success'>Password does not match.</div>";
                }
            }
            else{
                    echo "<div class='alert alert-success'>Email does not match.</div>";
                }
        }
        ?>

    <form action="sign_in.php" method="post">
        <fieldset>
                <legend>Sign In</legend>
            <table>
                <tr>
                    <td><input type="email" class="form-control" name="email" placeholder="Enter Email"></td>
                </tr>

                <tr>
                    <td> <input type="password" class="form-control" name="password" placeholder="Enter Password"></td>
                </tr>

                <tr>
                    <td> <input type="submit" class="btn btn-primary" name="login" value="Login"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <br>
    <p>Not registered yet?</p><a href="sign_up.php">Sign Up Here</a> 
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