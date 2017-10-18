<?php
    session_start();

    if ($_SESSION['name'] != "Marc") {
        $_SESSION["error"] = "Du hast nicht die passenden Berechtigungen!"; 
        Header('Location: mainpage.php');
    }
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Umfragen - ADMIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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