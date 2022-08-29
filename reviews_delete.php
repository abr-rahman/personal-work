<?php
    require_once "database.php";
    echo delete_query("reviews","id", $_GET['id']);
    header('location: reviews.php')
?>