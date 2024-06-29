<?php
include 'connect.php';

//getting the query parameters from GET
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE from crud WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:display.php');
        exit();
    } else {
        die(mysqli_error($conn));
    }
}