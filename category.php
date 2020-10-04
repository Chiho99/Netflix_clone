<?php
    require_once('includes/header.php');
    // var_dump($userLoggedIn);
    if(!isset($_GET["id"])) {
        ErrorMessage::show("No id passed to page");
    }

    $preview = new PreviewProvider($con,$userLoggedIn);
    echo $preview->createCategoryPreviewVideo($_GET["id"]);

    $containers = new CategoryContainers($con, $userLoggedIn);
    echo $containers->showMovieCategories($_GET["id"]);
