<?php
session_start();
require_once "database.php";

$upload_photo = $_FILES['work_photo'];
$after_expload = explode(".", $upload_photo['name']);
$new_photo_name = rand() . time().".". end($after_expload);
$up_location = $upload_photo['tmp_name'];
$new_lacation = 'img/portfolio/'. $new_photo_name;
move_uploaded_file($up_location, $new_lacation);

//$_FILES['photo'];
print_r($_POST);
$photo_name = $_POST['photo_name'];
$submitet = $_POST['submitet'];

$ab = insert_que("work","photo_name, submitet, work_photo", " '$photo_name','$submitet','$new_photo_name'");

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
  header('location: work.php');
}else{
  echo 'somethin wrong';
}
?> 