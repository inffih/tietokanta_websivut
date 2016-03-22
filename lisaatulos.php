<?php
// tietokantayhteys
include "connect.php";

// muuttujat lomakkeelta
$rata_ID = $_POST['rata_ID'];
$ratatulos = $_POST['ratatulos'];
$pelaaja_ID = $_POST['pelaaja_ID'];

// sql lauseke lisäykselle
$insert = "insert into PELI(pelaaja_ID,ratatulos,rata_ID) values($pelaaja_ID,$ratatulos,$rata_ID)";

// suoritetaan sql lauseke
mysqli_query($connection,$insert) or die("Could not add result to database");
echo "Result added to database!";

// suljetaan yhteys
mysqli_close($connection);

?>
