<?php
session_start();
require 'db.php';

$photo = $_FILES['photo'];
$id = $_POST['user_id'];

$select = "SELECT * FROM users WHERE id = $id";
$select_res = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

print_r($photo) ;
$after_explode = explode('.', $photo['name']);

$extension = end($after_explode);

$allowed_extension = array('jpg', 'JPG', 'PNG', 'png');
if (in_array($extension, $allowed_extension)) {
    if ($photo['size'] <= 1000000) {
        if ($after_assoc['Photo'] != null){
            $delete_from = "uploads/" . $after_assoc['Photo'];
            unlink($delete_from);
        }
        
        $file_name = uniqid(). '.' . $extension;
        echo $file_name;
        $new_location = 'uploads/' .$file_name;
        move_uploaded_file($photo['tmp_name'], $new_location);
        $update_photo = "UPDATE users SET Photo='$file_name' WHERE id = $id ";
        mysqli_query($db_connection, $update_photo);
        $_SESSION['photo_update']= "Photo updated Successfully!!";
        header('location: profile.php');
    } else {
        $_SESSION['err'] = "File size Max 1 MB";
        header('location: profile.php');
    }
} else {
    $_SESSION['err'] = 'Only JPG and PNG format are allowed';
    header('location : profile.php');
}

?>
