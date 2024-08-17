<?php
require 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];



$update = "UPDATE services SET Name='$name', Description='$description' WHERE id='$id'";
mysqli_query($db_connection, $update);
header('location: service.php');
?>