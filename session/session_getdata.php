<?php
session_start();
print_r($_SESSION);
echo "welcome" ." ". $_SESSION['username'];
echo "Your password is " ." " .$_SESSION['password'];
?>