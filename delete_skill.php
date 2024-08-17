<?php 
require 'db.php';

$sel_user = $_GET['id'];

$del_user = "DELETE FROM skills WHERE id= $sel_user";
mysqli_query($db_connection, $del_user);

header('location: skill.php');

?>