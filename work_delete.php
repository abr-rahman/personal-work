<?php
    require_once "database.php";
    echo delete_query("work","id", $_GET['id']);
    header('location: work.php')
?>