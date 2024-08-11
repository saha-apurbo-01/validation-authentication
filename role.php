<?php 
require 'db.php';
session_start();
$id= $_POST['user_id'];
$role= $_POST['role_id'];


$update= "UPDATE users SET Role='$role' WHERE id = '$id'";
mysqli_query($db_connection, $update);


$_SESSION['role_update']= "Updated Successfully!!";
header('location: users_list.php');

?>