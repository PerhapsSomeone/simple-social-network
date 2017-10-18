<?php
    session_start();

    if ($_SESSION['name'] == "") {
        Header('Location: index.html');
    }
    $frage = file_get_contents("umfragen/umfrage.txt");
    $antwort1 = file_get_contents("umfragen/antwort1.txt");
    $antwort2 = file_get_contents("umfragen/antwort2.txt");
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Umfrage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styling.css">
    </head>
    <body>
    <br />
        <h1>Bitte nur einmal abstimmen!</h1>
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