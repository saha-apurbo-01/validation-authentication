<?php 
require 'db.php';

$id = $_GET['id'];

$delete = "DELETE FROM services WHERE id= $id";
mysqli_query($db_connection, $delete);

header('location: service.php');
?>