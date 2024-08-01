<?php
require 'db.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$after_hash = password_hash($password, PASSWORD_DEFAULT);
$confirm_password = $_POST['con_password'];
$country = $_POST['country'];
$gender = $_POST['radio'];
$flag = false;

// $upper = preg_match('@[A-Z]@', $password);
// $lower = preg_match('@[a-z]@', $password);
// $special = preg_match('@[@,#,*,^,!,~,%,&]@', $password);
// $number = preg_match('@[0-9]@', $password);


if (empty($email)) {
    $flag = true;
    $_SESSION['email_err'] = "Enter your email";
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $flag = true;
        $_SESSION['email_err'] = "Invalid email";
    } else {
        $_SESSION['email'] = $email;
    }
}

if (empty($password)) {
    $flag = true;
    $_SESSION['pass_err'] = "Enter your Password";
}
// else{
//     if(!$upper){
//         $flag = true;
//         $_SESSION['pass_err'] = "Password contains uppercase, lowercase, number, special character and at least 8 characters";    
//     }
//     if(!$lower){
//         $flag = true;
//         $_SESSION['pass_err'] = "Password contains uppercase, lowercase, number, special character and at least 8 characters";    
//     }
//     if(!$special){
//         $flag = true;
//         $_SESSION['pass_err'] = "Password contains uppercase, lowercase, number, special character and at least 8 characters";    
//     }
//     if(!$number){
//         $flag = true;
//         $_SESSION['pass_err'] = "Password contains uppercase, lowercase, number, special character and at least 8 characters";    
//     }

// }

if (empty($confirm_password)) {
    $flag = true;
    $_SESSION['con_pass_err'] = "Enter Confirm password";
}
if ($password != $confirm_password) {
    $flag = true;
    $_SESSION['pass_errr'] = "Password and Confirm password does not match";
}

if(empty($country)){
    $flag= true;
    $_SESSION['country_err'] = "Please select country";
}
else{
    $_SESSION['country'] = $country; 
}

if(empty($gender)){
    $flag= true;
    $_SESSION['gender_err'] = "Please select Gender";
}
else{
    $_SESSION['gender'] = $gender; 
}

if ($flag == true) {
    header('location:register.php');
}

else{
  $insert = "INSERT INTO `users`(`Id`, `Email`, `Password`, `Country`, `Gender`) VALUES ('','$email','$after_hash','$country','$gender')" ;  
  mysqli_query($db_connection, $insert);
  unset($_SESSION['email']);
  unset($_SESSION['country']);
  unset($_SESSION['gender']);
  $_SESSION['success'] = "User registered successfully!!";
  header('location:register.php');
}