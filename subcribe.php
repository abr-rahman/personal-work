<?php
session_start();
require_once "database.php";

print_r($_POST);
$email_next = $_POST['email_next'];

$ab = insert_que("subcribe","email_next,", "'$email_next'");

if($ab){
  header('location: index.php');
}else{
  echo 'something wrong';
}
?> 