<?php
session_start();
error_reporting(E_ALL ^ E_WARNING); 
$name = $_SESSION["name"];
if ($name == "") {
    echo '<script type="text/javascript">
     window.location = "index.html"
</script>';
}
$id = $_SESSION["id"];
$useridget = $id;
$useridget .= "PM";
$useridget .= ".txt";
unlink($useridget);
echo '<script type="text/javascript">
window.location = "pm.php"
</script>';
?>