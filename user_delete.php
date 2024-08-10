<?php
session_start(); 
require 'db.php';

$sel_user = $_GET['Id'];

$del_user = "DELETE FROM users WHERE id = $sel_user";
mysqli_query($db_connection, $del_user);

header('location: dashboard.php')

?>