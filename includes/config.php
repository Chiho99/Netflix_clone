<?php
    ob_start(); //Turns on output buffering
    session_start();

    date_default_timezone_set("Asia/Tokyo");

    try {
        $con = new PDO("mysql:dbname=netflix_clone;host=localhost", "root", ""); //convention
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch (PDOException $e){
       exit("Connection failed: " . $e->getMessage()); 
    }
?>