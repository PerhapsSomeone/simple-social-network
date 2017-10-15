<?php
$id = $_GET["id"];
$content = $_GET["content"];
$filename = $id;
$filename .= "PM";
$filename .= ".txt";
$content .= "<br /> <br />";
file_put_contents($filename, $content.PHP_EOL , FILE_APPEND | LOCK_EX);
echo '<script type="text/javascript">
window.location = "pm.php"
</script>';
?>