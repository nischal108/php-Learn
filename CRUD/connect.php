<?php
$conn = new mysqli("localhost","root","","CRUD");

if(!$conn){
    die(mysqli_error($conn));
}

?>