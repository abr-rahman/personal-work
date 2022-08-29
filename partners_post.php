<?php
session_start();
require_once "database.php";

$upload_photo = $_FILES['partners_icon'];
$after_expload = explode(".", $upload_photo['name']);
$new_photo_name = rand() . time().".". end($after_expload);
$up_location = $upload_photo['tmp_name'];
$new_lacation = 'img/partners/'. $new_photo_name;
move_uploaded_file($up_location, $new_lacation);

 $ab = insert_que("partners","partners_icon", "'$new_photo_name'");

if($ab){
  header('location: partners.php');
}else{
  echo 'something is wrong';
}

?> 