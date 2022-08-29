<?php
    require_once "database.php";
    delete_query("price","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: price.php')
?>