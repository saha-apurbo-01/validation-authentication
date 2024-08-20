<?php 
require 'db.php';


$id = $_GET['id'];

$select = "SELECT Image FROM feedbacks WHERE id= $id";
$select_res = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

$delete_from = 'uploads/'. $after_assoc['Image'];
unlink($delete_from);

$delete = "DELETE FROM feedbacks WHERE id= $id";
mysqli_query($db_connection, $delete);
header('location: feedback_list.php');

?>