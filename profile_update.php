<?php 
session_start();
require 'db.php';

$email = $_POST['email'];

$country = $_POST['country'];
$gender = $_POST['radio'];
$id = $_POST['user_id'];
$flag = false;

$update = "UPDATE users SET Email='$email',Country='$country',Gender='$gender' WHERE id= $id";
mysqli_query($db_connection, $update);


$_SESSION['updated']= "Info Updated Successfully!!";
header('location: profile.php');
?>