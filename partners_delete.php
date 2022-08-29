<?php
    require_once "database.php"; 
    delete_with_photo("partners","id", $_GET['id'], "news_photo");
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: partners.php')
?>
