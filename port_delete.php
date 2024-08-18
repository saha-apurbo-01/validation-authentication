<?php
require 'db.php';

$user = $_GET['id'];


$select = "SELECT * FROM portfolios WHERE id= $user ";
$select_res = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

$delete_from = "uploads/" . $after_assoc['Image'];
unlink($delete_from);

$delete_user = "DELETE FROM portfolios WHERE id= $user";
mysqli_query($db_connection, $delete_user);

header('location: portfolio.php');
