<?php 
session_start();
require 'db.php';


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$insert = "INSERT INTO contacts(Name, Email, Subject, Massage) VALUES ('$name','$email','$subject','$message')";
mysqli_query($db_connection, $insert);
$_SESSION['msg'] = "Your massage sent successfully!!";
header('location: index.php#contact');

?>