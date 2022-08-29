<?php
session_start();
require_once "database.php";

$upload_photo = $_FILES['photo'];
$after_expload = explode(".", $upload_photo['name']);
$new_photo_name = rand() . time().".". end($after_expload);
$up_location = $upload_photo['tmp_name'];
$new_lacation = 'img/team/'. $new_photo_name;
move_uploaded_file($up_location, $new_lacation);

$name = $_POST['name'];

$ab = insert_que("our_team","name, photo", " '$name','$new_photo_name'");
//print_r($ab);
// $ab = true;

// if(!$_POST['news_headline']){
//   $_SESSION['news_headline_err'] = "Headline is required";
//   $ab = false;
// }
// if(!$_POST['news_details']){
//   $_SESSION['news_details_err'] = "Details is empthy";
//   $ab = false;
// }
// if(!$_POST['news_photo']){
//   $_SESSION['news_photo_err'] = "Picture is empthy";
//   $ab = false;
// }

if($ab){
  header('location: our_team.php');
}else{
  echo 'something is wrong';
}

?> 