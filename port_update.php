<?php
require 'db.php';

$user_id = $_POST['id'];
$title = $_POST['title'];
$catagory = $_POST['catagory'];
$image = $_FILES['image'];


$select = "SELECT Image FROM portfolios WHERE id= $user_id";
$select_res = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

if($image['name'] != ''){

$after_explode = explode('.', $image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg','png');
if (in_array($extension, $allowed_extension)) {
    if ($image['size'] <= 1000000) {

        $delete_from = 'uploads/'.$after_assoc['Image'];
        unlink($delete_from);

        $file_name = uniqid(). '.' .$extension;
        $new_location = 'uploads/' .$file_name;
        move_uploaded_file($image['tmp_name'], $new_location);
        $update_photo = "UPDATE portfolios SET Image='$file_name' WHERE id = $user_id ";
        mysqli_query($db_connection, $update_photo);
        header('location: portfolio.php');
    } else {
        $_SESSION['err'] = "File size Max 1 MB";
        header('location: port_edit.php?id='.$user_id);
    }
} else {
    $_SESSION['err'] = 'Only JPG and PNG format are allowed';
    header('location : port_edit.php?id='.$user_id);
}

}

else{

$update = "UPDATE portfolios SET Title='$title', Catagory='$catagory' WHERE id = $user_id";
mysqli_query($db_connection, $update);
header('location: portfolio.php');

}

?>