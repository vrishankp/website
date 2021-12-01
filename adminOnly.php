<?php
    
    include 'header.php';
    
    if (!isset($_SESSION["loggedin"])){
        $_SESSION["loggedin"] = false;
        header('Location: index.php');
    }
    
    if ($_SESSION["loggedin"] == false){
        header('Location: index.php');
    }
    
?>