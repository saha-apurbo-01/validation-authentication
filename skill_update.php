<?php 
require 'db.php';

$id = $_POST['id']; 
$name = $_POST['name'];
$parcentage = $_POST['parcentage'];

$update = "UPDATE skills SET Name='$name',Parcentage='$parcentage' WHERE id= $id";
mysqli_query($db_connection, $update);

header('location: skill.php');
?>