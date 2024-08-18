<?php 
require 'db.php';

$title = $_POST['title'];
$catagory = $_POST['catagory'];
$image = $_FILES['image'];


$explode = explode('.', $image['name']);
$extension = end($explode);
$allowed = array('png', 'jpg');

if(in_array($extension, $allowed)){
    if($image['size'] <= 1000000){
        // $delete_from= "uploads/" .$after_assoc['Image'];
        // unlink($delete_from);

        $file_name = uniqid().'.'.$extension;
        $new_location = "uploads/".$file_name;
        move_uploaded_file($image['tmp_name'], $new_location);

        $insert = "INSERT INTO portfolios(Title, Catagory, Image) VALUES ('$title','$catagory','$file_name')";
        mysqli_query($db_connection, $insert);
        header('location: portfolio.php');
    }
    else{
        echo 'max size 1MB';
        header('location: portfolio.php');  
    }

}
else{
    echo 'image format should be png and jpg';
    header('location: portfolio.php');
}

?>