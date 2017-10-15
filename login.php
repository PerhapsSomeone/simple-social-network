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
<html>
<head>
<title>
Login...    
</title>    
</head>
<body>  
<link rel="stylesheet" href="styling.css">
<?php
  if ($fehlgeschlagen == true) {
    $_SESSION["error"] = "Falscher Nutzername/Passwort";
      echo "Login fehlgeschlagen!";
      echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
  }
  else {
    echo "Login erfolgreich!";
    echo '<script type="text/javascript">
    window.location = "mainpage.php"
    </script>'; 
  }
?>
<br />
<br />
<br />
<a href="mainpage.php">Weiter</a>
</body>
</html>