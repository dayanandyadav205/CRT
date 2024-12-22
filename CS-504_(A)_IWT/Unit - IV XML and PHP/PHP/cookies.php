<?php
$cookie_name = "my_cookie";
$cookie_value = "Dayanand_New";
setcookie($cookie_name, $cookie_value, time() + (86400), "D:\cookies"); // 86400 seconds = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>