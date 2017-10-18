<?php
session_start();
$name = $_POST["name"];
$pw = $_POST["pw"];
$fehlgeschlagen = false;
if ($name == "--snip--") {
    if ($pw == "--snip--") {
    unset($_SESSION["name"]);
     $_SESSION["name"] = "--snip--";
     $_SESSION["id"] = "1";
    }
    else {
        unset($_SESSION["name"]);
        $fehlgeschlagen = true;
    }
} 
else if ($name == "--snip--") {
    if ($pw == "--snip--") {
    unset($_SESSION["--snip--"]);
    $_SESSION["name"] = "--snip--";
    $_SESSION["id"] = "4";
    }
    else {
        unset($_SESSION["name"]);
        $fehlgeschlagen = true;
    }
}
else if ($name == "--snip--") {
    if ($pw == "--snip--") {
    unset($_SESSION["name"]);
    $_SESSION["name"] = "--snip--";
    $_SESSION["id"] = "2";
    }
    else {
        unset($_SESSION["name"]);
        $fehlgeschlagen = true;
    }
}
else if ($name == "--snip--") {
    if ($pw == "--snip--") {
    unset($_SESSION["name"]);
    $_SESSION["name"] = "--snip--";
    $_SESSION["id"] = "3";
    }
    else {
        unset($_SESSION["name"]);
        unset($_SESSION["id"]);
        $fehlgeschlagen = true;
    }
}
else {
    unset($_SESSION{"name"});
    $fehlgeschlagen = true;
}

?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Login...</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styling.css">
    </head>
    <body>
    <?php
        if ($fehlgeschlagen == true) {
            $_SESSION["error"] = "Falscher Nutzername/Passwort";
            echo "Login fehlgeschlagen!";
            Header('Location: index.php');
        } else {
            echo "Login erfolgreich!";
            Header('Location: mainpage.php');
        }
        ?>
        <br />
        <br />
        <br />
        <a href="mainpage.php">Weiter</a>
    </body>
</html>