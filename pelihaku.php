<?php

// tietokantayhteys
include "connect.php";

// haetaan ja tulostetaan HENKILO-taulun sisalto
$haku_rata = "select ratatulos, RATA.rnimi, PELAAJA.etunimi, PELAAJA.sukunimi from RATA,PELAAJA,PELI where RATA.rata_ID = PELI.rata_ID and PELAAJA.pelaaja_ID = PELI.pelaaja_ID";
$sql_rata = mysqli_query($connection,$haku_rata) or die("Can't find rata-data");

while($row = mysqli_fetch_array($sql_rata)){
  echo "<div class='tulokset'>";
  echo "<p>Etunimi: ".$row['etunimi']."</p>";
  echo "<p>Sukunimi: ".$row['sukunimi']."</p>";
  echo "<p>Rata: ".$row['rnimi']."</p>";
  echo "<p>Tulos: ".$row['ratatulos']."</p>";
  echo "</div>";
}

// suljetaan yhteys
mysqli_close($connection);

?>
