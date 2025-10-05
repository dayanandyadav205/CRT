<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_style.css">
    <link rel="stylesheet" href="css/index_style.css">
    
    <script>
        function message()
        {
            alert("To password yadd kar lo bhai")
        }
    </script>
    <title>Admin Login</title>
</head>
<body>
 <!-- Header Section -->
    <header>
        <a href="https://www.cdgi.edu.in" target="_blank"><img src="images/cdgi.jpg" alt="CDGI Logo" width="100"
                height="100" id="logo1" /></a>

        <h1>Chameli Devi Group of Institutions, Indore</h1>
        <h2>Web Development</h2>

        <a href="https://github.com/dayanandyadav205" target="_blank"><img src="images/Dayanand.jpg" alt="GitHub"
                style="float: right;" width="100" height="100" id="logo2" /></a>
    </header>

     <!-- Navigation Section -->
    <!-- Navigation Section -->
    <nav>
        <a href="index.html">Home</a>
        <a href="contact.html">Contact</a>
        <a href="login_admin.php" style="float: right;">Admin Login</a>
        <a href="login_user.php" style="float: right;">User Login</a>
        <a href="form.php" style="float: right;">Sign Up</a>
        </div>
    </nav>

    <!-- Aside Section -->
    <div class="aside">
        <aside>
            <h3>References</h3>
            <ul>
                <li><a href="https://github.com/">GitHub</a></li>
                <li><a href="https://www.google.com">Google</a></li>
                <li><a href="https://www.w3schools.com/">W3C</a></li>
                <li><a href="https://whatwg.org/">WHATWG</a></li>
            </ul>
        </aside>
    </div>

    <!-- Main Section -->
    <main>

    <div class="center">
        <h1>Admin Login</h1>
        <form action="#" method="POST" autocomplete="off">
        <div class="form">
            <input type="text" name="username" class="textfield" placeholder="Email">
             <input type="password" name="password" class="textfield" placeholder="Password">

             <div class="forgotpass"><a href="#" class="link" onclick="message()">Forgot Password?</a></div>
             
             <input type="submit" name="login" value="Login" class="btn">

             <div class="signup">New Member?<a href="#" class="link">Sign Up Here</a></div>
        </div>
    </div>
</form>
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

<?php
    include("connection.php");
    // error_reporting(0);

    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $pwd = $_POST['password'];

        $query = "SELECT * FROM admin WHERE email ='$username' && password = '$pwd'";
        $data = mysqli_query($conn,$query);

        $total = mysqli_num_rows($data);
        // echo $total;

        {
            if($total == 1)
            {
               $_SESSION['user_name'] = $username;
                header('location:display_admin.php');
                // echo "Login Success";
            }
            else
            {
                echo "Login failed";
            }
        }
       
    }
?>

               