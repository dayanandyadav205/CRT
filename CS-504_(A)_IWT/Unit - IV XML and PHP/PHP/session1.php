<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1>Page 1</h1>
<?php
// Set session variables
$_SESSION["favcolor"] = "Blue";
$_SESSION["favanimal"] = "Dog";
echo "Session variables are set.";
?>

</body>
</html>
