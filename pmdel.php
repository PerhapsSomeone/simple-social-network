<?php
    session_start();
    error_reporting(E_ALL ^ E_WARNING); 

    if ($_SESSION['name'] == "") {
        Header('Location: index.html');
    }
    $id = $_SESSION["id"];
    $useridget = $id;
    $useridget .= "PM";
    $useridget .= ".txt";
    unlink($useridget);
    Header('Location: pm.php');
?>