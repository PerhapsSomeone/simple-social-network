<?php
      session_start();
      $name = $_SESSION["name"];
      $content = $_GET["content"];
      $tag = date("m.d.y");
      $heute = date("H:i:s");

      if ($name == "") {
            Header('Location: index.html');
      }

      $inhalt = "";
      $inhalt .= '<b>Dieser Post ist von';
      $inhalt .= $name;
      $inhalt .= " ";
      $inhalt .= 'um<br />';      
      $inhalt .= $heute;
      $filename = "posts.txt";
      $inhalt .= $heute;
      $inhalt .= "</b><br /><br />";
      $inhalt .=  $content;
      $inhalt .= "<br /><br />";
      file_put_contents($filename, $inhalt.PHP_EOL , FILE_APPEND | LOCK_EX);
      Header('Location: mainpage.php');
?>
<!DOCTYPE html>
<html lang="de">
      <head>
            <title>Post wird erstellt...</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
      </head>
      <body>
            <h1>Post wird erstellt...</h1>
      </body>
</html>