<?php
    session_start();
    
    if ($_SESSION['name'] != "") {
        $_SESSION["error"] = "Du hast nicht die passenden Berechtigungen!";
        header('Location: mainpage.php');
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
    header('Location: mainpage.php');
?>

<!DOCTYPE html>
<html lang="de">
    <head>
    <title>Sendet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <h1>Bitte warten...</h1>
    </body>
</html>