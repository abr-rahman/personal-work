
<?php
session_start();
require_once "database.php";

print_r($_POST);
$subject = $_POST['subject'];
$pecentage = $_POST['pecentage'];

$ab = insert_que("skill","subject, pecentage", " '$subject','$pecentage'");

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
  header('location: skill.php');
}else{
  echo 'wrong';
}
?> 