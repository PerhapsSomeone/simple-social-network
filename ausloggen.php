<?php
    session_start();
    unset($_SESSION["name"]);
    unset($_SESSION["id"]);
    session_destroy();

    // Redirect to index.html after logout
    Header('Location: index.html');
    die();

?>
