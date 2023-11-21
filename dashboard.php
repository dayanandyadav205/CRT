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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
</head>
<body>
     <!-- Header iframe -->
  <iframe src="header.html" scrolling="no"></iframe>

    <div class="container">
        <h1>Welcome to Dashboard</h1>
        <h1>You are logged in</h1>
        <a class="btn btn-primary" href="logout.php">Logout</a>
    </div>

                <!-- footer iframe -->
  <iframe src="footer.html" scrolling="no"></iframe>
</body>
</html>