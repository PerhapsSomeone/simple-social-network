<?php
session_start();
$name = $_SESSION["name"];
if ($name == "") {
          echo '<script type="text/javascript">
           window.location = "index.html"
      </script>';
}
?>
<html>
<body>
<link rel="stylesheet" href="styling.css">  
<p>Du kannst mit &lt;img src="" /&gt; Bilder einfügen.</p>
<form action="createpost.php">
<textarea name="content" cols="40" rows="5" maxlength="800"></textarea>
<button type="submit">Abschicken</button>    
</form>
</body>
</html>