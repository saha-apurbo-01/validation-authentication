<?php 
require 'db.php';
$logo = "SELECT * FROM logos";
$logo_query = mysqli_query($db_connection, $logo);
$after_assoc_logo = mysqli_fetch_assoc($logo_query);

$header = $_FILES['header_logo'];
$flag = false;
$footer = $_FILES['footer_logo'];

if($header['name']!= ''){
    $after_explode = explode('.', $header['name']);
    $extension = end($after_explode);
    $allowed_extension = array('png', 'webp', 'gif');
    if(in_array($extension, $allowed_extension)){
        if($header['size'] <= 1000000){
            $delete_from = "logos/".$after_assoc_logo['Header'];
            unlink($delete_from);
            $file_name = uniqid().'.'.$extension;
            $new_location = 'logos/'.$file_name;
            move_uploaded_file($header['tmp_name'], $new_location);
            $update = "UPDATE logos SET Header= '$file_name'";
            mysqli_query($db_connection, $update);
            $flag= true;
            header('location: logo.php');

        }
        else{
            echo 'not allowed';
        header('location: logo.php');
        }
    }
    else {
        echo 'not allowed';
        header('location: logo.php');
    }
}

if($footer['name']!= ''){
    $after_explode = explode('.', $footer['name']);
    $extension = end($after_explode);
    $allowed_extension = array('png', 'webp', 'gif');
    if(in_array($extension, $allowed_extension)){
        if($footer['size'] <= 1000000){
            $delete_from = "logos/".$after_assoc_logo['Footer'];
            unlink($delete_from);
            $file_name = uniqid().'.'.$extension;
            $new_location = 'logos/'.$file_name;
            move_uploaded_file($footer['tmp_name'], $new_location);
            $update = "UPDATE logos SET Footer= '$file_name'";
            mysqli_query($db_connection, $update);
            $flag= true;
            header('location: logo.php');

        }
        else{
            echo 'not allowed';
        header('location: logo.php');
        }
    }
    else {
        echo 'not allowed';
        header('location: logo.php');
    }
}


if($flag){
    header('location: logo.php');
}

?>