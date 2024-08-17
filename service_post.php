<?php 
require 'db.php';


$name = $_POST['name'];
$description = $_POST['description'];

$insert= "INSERT INTO services(Name, Description) VALUES ('$name','$description')";
mysqli_query($db_connection, $insert);
header('location: service.php')
?>