<?php 
require 'db.php';
$name = $_POST['name'];
$parcentage = $_POST['parcentage'];

$insert = "INSERT INTO skills(Name, Parcentage) VALUES ('$name','$parcentage')";
mysqli_query($db_connection, $insert);
header('location: skill.php');
?>