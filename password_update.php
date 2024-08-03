<?php
session_start();
require 'db.php';
$cpassword = $_POST['current_password'];
$npassword = $_POST['new_password'];
$after_hash = password_hash($npassword, PASSWORD_DEFAULT);
$conpassword = $_POST['confirm_password'];
$id = $_POST['user_id'];
$flag = false;
if (empty($cpassword)) {
    $flag = true;
    $_SESSION['cpass_err'] = "Enter your current password";
} else {
    $select = "SELECT * FROM users WHERE id= '$id'";
    $select_res = mysqli_query($db_connection, $select);
    $after_assoc = mysqli_fetch_assoc($select_res);
    if (!password_verify($cpassword, $after_assoc['Password'])) {
        $flag = true;
        $_SESSION['cpass_err'] = "wrong pass";
    }
}

if (empty($npassword)) {
    $flag = true;
    $_SESSION['npass_err'] = "Enter new password";
}

if (empty($conpassword)) {
    $flag = true;
    $_SESSION['conpass_err'] = "Enter confirm password";
}

if ($npassword != $conpassword) {
    $flag = true;
    $_SESSION['dont_match'] = "password and confirm password does not match";
}

if ($flag) {
    header('location: profile.php');
} else {
   $update = "UPDATE users SET Password='$after_hash' WHERE id = $id";
    mysqli_query($db_connection, $update);


    $_SESSION['pass_updated'] = "Password Updated successfully!!";
    header('location: profile.php');
}

?>