<?php
session_start();
$name = $_SESSION["name"];
if ($name != "") {
    $_SESSION["error"] = "Du hast nicht die passenden Berechtigungen!";
    echo '<script type="text/javascript">
     window.location = "mainpage.php"
</script>';
exit();
}
$frage = $_POST["frage"];
$a1 = $_POST["antwort1"];
$a2 = $_POST["antwort2"];
$fragefile = fopen("umfragen/umfrage.txt", "w");
$a1file = fopen("umfragen/antwort1.txt", "w");
$a2file = fopen("umfragen/antwort2.txt", "w");
fwrite($fragefile,$frage);
fwrite($a1file,"0");
fwrite($a2file,"0");
fclose($fragefile);
fclose($a1file);
fclose($a2file);
echo '<script type="text/javascript">
window.location = "mainpage.php"
</script>';
?>

<html>
    <head>
        <title>Sendet</title>
    </head>
    <body>
        <h1>Bitte warten...</h1>
    </body>
</html>