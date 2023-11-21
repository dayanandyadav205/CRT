<?php
session_start();
session_destroy();
header("Location: login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
     <!-- Header iframe -->
  <iframe src="header.html" scrolling="no"></iframe>

<!-- footer iframe -->
<iframe src="footer.html" scrolling="no"></iframe>
</body>
</html>