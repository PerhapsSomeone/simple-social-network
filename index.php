<?php
error_reporting(0);
session_start();

if($_SESSION['error'] != "") {
    echo '<script>alert("'.$_SESSION["error"].'");</script>';
    unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styling.css">
    </head>
    <body>
        <h1>Willkommen! Bitte logge dich ein!</h1>
        <br />
        <br />
        <form method="POST" action="login.php">
            <input type="text" name="name" placeholder="Nutzername">
            <br />
            <input type="password" name="pw" placeholder="Passwort">
            <br />
            <button type="submit">Einloggen</button>    
        </form>
        <br />
        <a href="mainpage.php">Wenn du noch eingeloggt bist: Direkt zur Hauptseite</a>    
    </body>
</html>