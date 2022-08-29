<?php
session_start();
require_once "database.php";
    foreach($_POST as $setup_name => $setup_value){
       $update_query = "UPDATE setups SET set_value = '$setup_value' WHERE set_name = '$setup_name'";
      mysqli_query(connect_to_db(), $update_query);
    }
    $_SESSION['add_status'] = "Added Successfully";
    header('location: setup.php');

?>
