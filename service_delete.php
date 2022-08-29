<?php
    require_once "database.php";
    echo delete_query("service","id", $_GET['id']);
    header('location: service.php')
?>