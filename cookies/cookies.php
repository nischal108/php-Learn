<?php
echo "Welcome to cookies <br>";
$cookie_name = "category";
$cookie_value = "Clothing";
setcookie($cookie_name, $cookie_value, time() + 3600, "/");
echo("Cookie is set");
?>
