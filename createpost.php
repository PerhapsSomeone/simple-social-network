<?php
session_start();
$name = $_SESSION["name"];
$content = $_GET["content"];    
$tag = date("m.d.y");  
$heute = date("H:i:s");   
if ($name == "") {
          echo '<script type="text/javascript">
           window.location = "index.html"
      </script>';
}
$inhalt = "";
$inhalt .= '
<b>Dieser Post ist von
';
$inhalt .= $name;
$inhalt .= " ";
$inhalt .= '
um 
<br />
';      
$inhalt .= $heute;
$filename = "posts.txt";
$inhalt .= $heute;
$inhalt .= "</b><br /><br />";
$inhalt .=  $content;
$inhalt .= "<br /><br />";
file_put_contents($filename, $inhalt.PHP_EOL , FILE_APPEND | LOCK_EX);
echo '<script type="text/javascript">
window.location = "mainpage.php"
</script>';
?>
<html>
<body>
<p>Post wird erstellt...</p>    
</body>
</html>