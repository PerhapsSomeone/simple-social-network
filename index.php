<?php
error_reporting(0);
session_start();
if($_SESSION['error'] != "") {
    echo '<script type="text/javascript">alert("'.$_SESSION["error"].'");</script>';
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<link rel="stylesheet" href="styling.css">
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