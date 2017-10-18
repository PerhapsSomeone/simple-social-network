<?php
session_start();

if ($_SESSION['name'] == "") {
      Header('Location: index.html');
}

?>

<!DOCTYPE html>
<html lang="de">
      <head>
            <title>New post</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="styling.css">  
      </head>
      <body>
            <p>Du kannst mit &lt;img src="" /&gt; Bilder einfügen.</p>
            <form action="createpost.php">
                  <textarea name="content" cols="40" rows="5" maxlength="800"></textarea>
                  <button type="submit">Abschicken</button>    
            </form>      
      </body>
</html>