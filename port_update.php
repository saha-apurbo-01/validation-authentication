<?php
require 'db.php';

$user_id = $_POST['id'];
$title = $_POST['title'];
$catagory = $_POST['catagory'];
$image = $_FILES['image'];

$update = "UPDATE portfolios SET Title='$title', Catagory='$catagory',Image='' WHERE id = $user_id";
mysqli_query($db_connection, $update);
header('location: portfolio.php');

?>