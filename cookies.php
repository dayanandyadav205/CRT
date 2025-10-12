<?php
echo "Welcome in the world of cookies <br>";

//Cookies

//syntax to set a cookie
// echo time();

setcookie("category", "Books", time() + 86400,"/");

echo "The cookie is set";

?>