<?php
require 'db.php';

$name = $_POST['name'];
$designation = $_POST['designation'];
$image = $_FILES['image'];
$feedback = $_POST['feedback'];

$after_explode = explode('.', $image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg','png');
if (in_array($extension, $allowed_extension)) {
    if ($image['size'] <= 1000000) {

        $file_name = uniqid(). '.' .$extension;
        $new_location = 'uploads/' .$file_name;
        move_uploaded_file($image['tmp_name'], $new_location);
        $insert = "INSERT INTO feedbacks(Name, Designation, Image, Feedback) VALUES ('$name','$designation','$file_name','$feedback')";
        mysqli_query($db_connection, $insert);
        header('location: index.php#feedback');
    } else {
        $_SESSION['err'] = "File size Max 1 MB";
        header('location: index.php#feedback');
    }
} else {
    $_SESSION['err'] = 'Only JPG and PNG format are allowed';
    header('location : index.php#feedback');
}


?>