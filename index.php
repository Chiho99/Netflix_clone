<?php
    require_once('includes/config.php');
    if(isset($_SESSION["userLoggedIn"])) {
        header('Location: register.php');
        exit;
    }