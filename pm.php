<?php
error_reporting(E_ALL ^ E_WARNING); 
session_start();
$name = $_SESSION["name"];
if ($name == "") {
    echo '<script type="text/javascript">
     window.location = "index.html"
</script>';
}
$id = $_SESSION["id"];
$useridget = $id;
$useridget .= "PM";
$useridget .= ".txt";
?>
<html>
<head>
    <title>Private Nachrichten</title>
</head>
<body>
<link rel="stylesheet" href="styling.css">
<h1>Nachrichtencenter</h1>
<a href="mainpage.php">Zurück zur Hauptseite</a>
<p>Du kannst nicht mehr als zwei Nachrichten gleichzeitig haben!</p>
<form action="sendpm.php">
<p>Nachrichten sind komplett anonym.</p>
<input type="text" name="content" placeholder="Nachricht..." required>
<input type="number" name="id" placeholder="ID" min="1" max="5" required>
<button type="submit">Senden</button>
</form>
<p>Posteingang:</p>
<p><?php echo file_get_contents($useridget);?></p>
<br />
<a href="pmdel.php">Alle Nachrichten löschen</a>
<footer>
    <small>
    <p>Nutzer-IDs:</p>
    <p>1 - Marc</p>
    <p>2 - Kirsten</p>
    <p>3 - Michael</p>
    <p>4 - Katharina</p>
    </small>
</footer>
</body>
</html>