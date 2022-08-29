<?php
session_start();
require_once "database.php";

print_r($_POST);
$basic_title = $_POST['basic_title'];
$basic_price = $_POST['basic_price'];
$basic_use = $_POST['basic_use'];
$basic_project = $_POST['basic_project'];
$basic_disk = $_POST['basic_disk'];
$basic_domain = $_POST['basic_domain'];
$basic_support = $_POST['basic_support'];

 $ab = insert_que("price","basic_title, basic_price, basic_use, basic_project, basic_disk, basic_domain, basic_support", "'$basic_title','$basic_price','$basic_use','$basic_project','$basic_disk','$basic_domain','$basic_support'");

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
  $_SESSION['add_status'] = "Added Successfully";
  header('location: price.php');
}else{
  echo 'somethin wrong';
}
?> 