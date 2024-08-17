<?php 
require 'db.php';

$select = "SELECT Image FROM abouts";
$select_res =  mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_array($select_res);

$image= $_FILES['image'];

$explode = explode('.', $image['name']);
$extension = end($explode);
$allowed = array('png', 'jpg');

if(in_array($extension, $allowed)){
    if($image['size'] <= 1000000){
        $delete_from= "uploads/" .$after_assoc['Image'];
        unlink($delete_from);

        $file_name = uniqid().'.'.$extension;
        $new_location = "uploads/".$file_name;
        move_uploaded_file($image['tmp_name'], $new_location);

        $update = "UPDATE abouts SET Image='$file_name'" ;
        mysqli_query($db_connection, $update);
        header('location: about.php');
    }
    else{
        echo 'max size 1MB';
        header('location: about.php');  
    }

}
else{
    echo 'image format should be png and jpg';
    header('location: about.php');
}

?>