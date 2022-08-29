<?php
    require_once "database.php"; 
    delete_with_photo("our_team","id", $_GET['id'], "news_photo");
    header('location: our_team.php')
?>
