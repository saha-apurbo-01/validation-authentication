<?php 
session_start();
require 'db.php';
$id= $_GET['id'];

$select = "SELECT * FROM skills WHERE id= $id";
$select_res = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

if($after_assoc['Status'] == 1){
    $update= "UPDATE skills SET Status=0  WHERE id = $id";
    mysqli_query($db_connection, $update);

    $_SESSION['set']= "Status now deactivated!!";
    header('location: skill.php');
}

else{
    $update= "UPDATE skills SET Status=1  WHERE id = $id";
    mysqli_query($db_connection, $update);
    $_SESSION['set']= "Status now activated!!";
    header('location: skill.php');
}
?>