<?php 
session_start();
require 'db.php';

$email= $_POST['email'];
$password= $_POST['password'];
$flag = false;

if(empty($email)){
    $flag = true;
    $_SESSION['email_err']= "Enter your email";
}

else{
   $select = "SELECT COUNT(*) as total  FROM users WHERE email = '$email'";
   $select_res = mysqli_query($db_connection, $select);
   $after_assoc = mysqli_fetch_assoc($select_res);
   if($after_assoc['total'] != 1){
    $flag= true;
    $_SESSION['email_err']= "Email does not exist";
   }
}

if(empty($password)){
    $flag = true;
    $_SESSION['pass_err']= "Enter your password";
}
else{
    $select = "SELECT * FROM users WHERE email = '$email'";
    $select_res = mysqli_query($db_connection, $select);
    $after_assoc = mysqli_fetch_assoc($select_res);
    if(!password_verify($password, $after_assoc['Password'])){
        $flag = true;
        $_SESSION['pass_err']= "wrong password";
    }
 }



if($flag){
    header('location: login.php');
}

else{
    $_SESSION['logged_in']= "ami login korechi";
    header('location: dashboard.php');
}
?>