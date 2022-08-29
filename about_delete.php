<?php
    session_start();
    require_once "database.php";
    delete_query("about","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: about.php')
?>