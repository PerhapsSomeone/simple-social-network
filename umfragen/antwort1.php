<?php
    session_start();

    if ($_SESSION['name'] == "") {
        Header('Location: mainpage.php');
    }
    
    $filename = "antwort1.txt";
    $zahl = intval(file_get_contents($filename));
    echo $zahl;
    $zahl = $zahl + 1;
    $file = fopen($filename,"w");
    fwrite($file,$zahl);
    fclose($file);
?>
<html>
<p><?php echo $zahl; ?></p>
<?php      echo '<script type="text/javascript">
           window.location = "../umfrage.php"
           </script>';?>
</html>