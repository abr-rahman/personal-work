<?php
session_start();
require_once "database.php";

print_r($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$ab = insert_que("contact_form","name, email, subject, message", "'$name','$email','$subject','$message'");

if($ab){
  
  header('location: index.php');
}else{
  echo 'something wrong';
}
?> 