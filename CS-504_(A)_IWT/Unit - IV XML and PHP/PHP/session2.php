<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1>Page 2</h1>
<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>