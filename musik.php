<?php
    session_start();
    $name = $_SESSION["name"];
    if ($name == "") {
        Header('Location: mainpage.php');
    }
?>

<!DOCTYPE html>
<html lang="de">
    <head>
    <title>Musik</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="styling.css">-->
        <title>Musik</title>
    </head>
    <body>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLfRDnxXohb4l9_45PNrf9RX41I6ZEyj12" frameborder="0" allowfullscreen></iframe>
        <br />
        <br />
        <a href="mainpage.php">Zurück</a><br />
        <p>Liste:</p>
        <ol>
            <li>Aero Chord - Surface</li>
            <li>DJ ASSASS1N - Frag Out</li>
            <li>Two Feet - Go **** Yourself</li>
            <li>Timmy Trumpet &amp; Savage - Freaks</li>
            <li>Martin Garrix &amp; Firebeatz - Helicopter</li>
            <li>Dimitri Veegas, Martin Garrix &amp; Like Mike - Tremor</li>
            <li>Martin Garrix &amp; Jay Hardway - Wizard</li>
            <li>TroyBoi - Afterhours</li>
            <li>DEAF KEY - Invincible</li>
            <li>DVBBS &amp; Borgeous - TSUNAMI</li>
            <li>Skan &amp; El Speaker - Herbalist</li>
            <li>I'm an Albatraoz - Aron Chupa (E.Y. Remix)</li>
            <li>Flo Rida - G.D.F.R.</li>
            <li>Eminem - Rap God</li>
            <li>DVBBS &amp; Dropgun - Pyramids (ft. Sanjin)</li>
            <li>Awaken - Matstubs</li>
            <li>Dirtyphonics - Anonymous</li>
            <li>Tropkillaz - HIDEHO</li>
            <li>Imagine Dragons - Thunder</li>
            <li>Afrojack &amp; Martin Garrix - Turn up the Speakers</li>
            <li>Matstubs - War</li> 
        </ol>
        <br />
        <br />
        <a href="https://www.youtube.com/playlist?list=PLfRDnxXohb4l9_45PNrf9RX41I6ZEyj12">Playlist</a>    
    </body>
</html>