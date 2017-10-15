<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["id"]);
echo '<script type="text/javascript">
window.location = "index.html"
</script>';
?>
