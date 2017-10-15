<?php
session_start();
$name = $_SESSION["name"];
if ($name == "") {
    echo '<script type="text/javascript">
     window.location = "index.html"
</script>';
}
$frage = file_get_contents("umfragen/umfrage.txt");
$antwort1 = file_get_contents("umfragen/antwort1.txt");
$antwort2 = file_get_contents("umfragen/antwort2.txt");
?>

<html>
<head>
    <title>Umfrage</title>
</head>
<body>
<br />
<h1>Bitte nur einmal abstimmen!</h1>
<link rel="stylesheet" href="styling.css">
<a href="mainpage.php">Zurück</a>
<br />
<br />
<p>Die Frage ist: <?php echo $frage;?></p>
<a href="umfragen/antwort1.php">Ja (<?php echo $antwort1; ?>)</a>
<br />
<br />
<a href="umfragen/antwort2.php">Nein (<?php echo $antwort2; ?>)</a>
</body>
</html>

