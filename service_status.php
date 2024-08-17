<?php 
require 'db.php';

$id = $_GET['id'];


$select = "SELECT * FROM services WHERE id= $id";
$select_res = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

if($after_assoc['Status']== 1){
    $update = "UPDATE services SET Status=0 WHERE id= $id";
    mysqli_query($db_connection, $update);
    header('location: service.php');
}

else{
    $update = "UPDATE services SET Status=1 WHERE id= $id";
    mysqli_query($db_connection, $update);
    header('location: service.php');
    
}
?>