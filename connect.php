<?php

// yhteysmuuttujat
$user = "K1719";
$pass = "uusisalasana";
$host = "mysql.labranet.jamk.fi";
$db = "K1719_1";

// muodostetaan yhteys
$connection = mysqli_connect($host,$user,$pass) or die("Connection to database failed");

// valitaan tietokanta
mysqli_select_db($connection,$db) or die("Can't select database");

?>
