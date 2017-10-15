<?php
session_start();
$name = $_SESSION["name"];
if ($name != "Marc") {
    $_SESSION["error"] = "Du hast nicht die passenden Berechtigungen!"; 
    echo '<script type="text/javascript">
     window.location = "mainpage.php"
</script>';
}
?>
<html>
<head>
<title>Umfragen - ADMIN</title>
</head>
<body>
<form method="POST" action="pollsubmit.php">
    <input type="text" name="frage" placeholder="Frage">
    <input type="hidden" name="antwort1" value="0">
    <input type="hidden" name="antwort2" value="0">
    <button type="submit">Abschicken</button>
</form>
</body> 
</html>