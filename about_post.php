<?php
session_start();
require_once "database.php";

print_r($_POST);
$head_line = $_POST['head_line'];
$details = htmlspecialchars($_POST['details'], ENT_QUOTES);
$icon = $_POST['icon'];

$ab = insert_que("about","icon, head_line, details ", " '$icon','$head_line','$details'");
$_SESSION['add_status'] = "Added Successfully";
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
  
  header('location: about.php');
}else{
  echo 'wrong';
}
?> 