<?php
    require_once('includes/header.php');
    // var_dump($userLoggedIn);
    $preview = new PreviewProvider($con,$userLoggedIn);
    echo $preview->createMoviesPreviewVideo();

    $containers = new CategoryContainers($con, $userLoggedIn);
    echo $containers->showMovieCategories();
