<?php
session_start();
session_destroy();
header("Location: sign_in.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
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
        <a href="index.html">Home</a>
        <a href="#headings">Headings</a>
        <a href="#para_formatting">Paragraph</a>
        <a href="#list">Lists</a>
        <a href="#tbl">Table</a>
        <a href="#media">Media</a>
        <a href="sign_up.php" style="float: right;">Sign Up</a>
        <a href="sign_in.php" style="float: right;">Sign In</a>
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

    <p>You are now signed out </p>

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