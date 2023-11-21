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
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
     <!-- Header iframe -->
  <iframe src="header.html" scrolling="no"></iframe>

<!-- footer iframe -->
<iframe src="footer.html" scrolling="no"></iframe>
</body>
</html>