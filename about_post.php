<?php 

require 'db.php';
$designation = $_POST['designation'];
$name = $_POST['name'];
$description = mysqli_real_escape_string($db_connection, $_POST['description']);

$update= "UPDATE abouts SET Designation='$designation', Name='$name', Description='$description'";
mysqli_query($db_connection, $update);

header('location: about.php')

?>