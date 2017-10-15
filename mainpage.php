<?php
error_reporting(E_ALL ^ E_WARNING); 
session_start();
$name = $_SESSION["name"];
$pmid = $_SESSION["id"];
$pmid .= "PM.txt";
if ($name == "") {
          echo '<script type="text/javascript">
           window.location = "index.html"
      </script>';
      exit();
}
if( ! empty($_SESSION['error']))
{
    echo '<script type="text/javascript">alert("'.$_SESSION["error"].'");</script>';
    unset($_SESSION['error']);
}
?>
<html>
<head>
<title><?php 
$date = date("H:i");
echo $date;
echo " Uhr";
?>
</title>
</head>
<body>
<link rel="stylesheet" href="styling.css">
<h1>Willkommen zurück bei meinem Netzwerk <?php echo $name;?>!</h1>
<ul>
<li><a href="newpost.php">Neuer Post</a></li>
<li><a href="ausloggen.php">Ausloggen</a></li>
<li><a href="pm.php">Private Nachricht</a></li>
<li><a href="musik.php">Musik</a></li>
<li><a href="umfrage.php">Umfrage</a></li>
</ul>
<br />
<br />
<p><?php 
$filename = "posts.txt";
$postcontent = file_get_contents($filename);
echo $postcontent;
?></p>
<br />
<br />
<div class="admin">
<p>Du hast <?php    
if ($name == "Marc") {
    Echo "das passende Berechtigungslevel fuer das Adminpanel!";
}
else {
    Echo "ein zu kleines Berechtigungslevel fuer das Adminpanel!";
}
?>
</p>  
<p>Ich bin gefährlich :3</p>
<form action="delallpost.php">
    <button type="submit"><b>ALLE</b> Posts löschen</button>
</form>
<a href="pollpanel.php">Umfragen</a>
</div>
</body>
</html>