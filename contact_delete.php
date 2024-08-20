<?php 
require 'db.php';


$id = $_GET['id'];

$select = "SELECT * FROM contacts WHERE id= $id";
$select_res = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_res);


$delete = "DELETE FROM contacts WHERE id= $id";
mysqli_query($db_connection, $delete);
header('location: contact_list.php');

?>