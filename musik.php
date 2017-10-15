<?php
session_start();
$name = $_SESSION["name"];
if ($name == "") {
echo '<script type="text/javascript">
window.location = "mainpage.html"
</script>';
}
?>

<html>
<head>
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
<li>Timmy Trumpet & Savage - Freaks</li>
<li>Martin Garrix & Firebeatz - Helicopter</li>
<li>Dimitri Veegas, Martin Garrix & Like Mike - Tremor</li>
<li>Martin Garrix & Jay Hardway - Wizard</li>
<li>TroyBoi - Afterhours</li>
<li>DEAF KEY - Invincible</li>
<li>DVBBS & Borgeous - TSUNAMI</li>
<li>Skan & El Speaker - Herbalist</li>
<li>I'm an Albatraoz - Aron Chupa (E.Y. Remix)</li>
<li>Flo Rida - G.D.F.R.</li>
<li>Eminem - Rap God</li>
<li>DVBBS & Dropgun - Pyramids (ft. Sanjin)</li>
<li>Awaken - Matstubs</li>
<li>Dirtyphonics - Anonymous</li>
<li>Tropkillaz - HIDEHO</li>
<li>Imagine Dragons - Thunder</li>
<li>Afrojack & Martin Garrix - Turn up the Speakers</li>
<li>Matstubs - War</li> 
</ol>
<br />
<br />
<a href="https://www.youtube.com/playlist?list=PLfRDnxXohb4l9_45PNrf9RX41I6ZEyj12">Playlist</a>
</body>
</html>