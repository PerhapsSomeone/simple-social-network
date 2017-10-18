<?php
    error_reporting(E_ALL ^ E_WARNING); 
    session_start();

    if ($_SESSION["name"] != "Marc") {
        $_SESSION['error'] = "Du hast nicht die passenden Berechtigungen!";
        Header('Location: mainpage.php');
        exit();
    }

    $filename = "posts.txt";
    unlink($filename);
    echo "ALLE POSTS GELÖSCHT!";

    Header('Location: mainpage.php');
?>