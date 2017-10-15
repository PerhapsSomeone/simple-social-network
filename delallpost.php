<?php
error_reporting(E_ALL ^ E_WARNING); 
session_start();
if ($_SESSION["name"] != "Marc") {
$_SESSION['error'] = "Du hast nicht die passenden Berechtigungen!";
echo '<script type="text/javascript">
window.location = "mainpage.php"
</script>';
exit();
}
$filename = "posts.txt";
unlink($filename);
echo "ALLE POSTS GELÖSCHT!";
echo '<script type="text/javascript">
window.location = "mainpage.php"
</script>';
?>