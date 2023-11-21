<?php
session_start();
if(!isset($_SESSION["user"]))
{
header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body>
     <!-- Header iframe -->
  <iframe src="header.html" scrolling="no"></iframe>

    <div class="container">
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php">Logout</a>
    </div>

                <!-- footer iframe -->
  <iframe src="footer.html" scrolling="no"></iframe>
</body>
</html>