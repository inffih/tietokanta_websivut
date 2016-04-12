<?php

// tietokantayhteys
include "connect.php";

// haetaan ja tulostetaan HENKILO-taulun sisalto
$haku_rata = "select vaylamaara, ihannetulos, vaikeustaso, perustamisvuosi, RATA.rnimi,KAUPUNKI.nimi from RATA join KAUPUNKI on RATA.kaupunki_ID = KAUPUNKI.kaupunki_ID";
$sql_rata = mysqli_query($connection,$haku_rata) or die("Can't find rata-data");

//create an array
$ratatiedot = array();
while($row =mysqli_fetch_assoc($slq_rata))
{
    $ratatiedot[] = $row;
}

while($row = mysqli_fetch_array($sql_rata)){
  echo "<div class='tulokset'>";
  echo "<p>Rata: ".$row['rnimi']."</p>";
  echo "<p>Kaupunki: ".$row['nimi']."</p>";
  echo "<p>Väylämäärä: ".$row['vaylamaara']."</p>";
  echo "<p>Vaikeustaso: ".$row['vaikeustaso']."</p>";
  echo "<p>Ihannetulos: ".$row['ihannetulos']."</p>";
  echo "<p>Perustamisvuosi: ".$row['perustamisvuosi']."</p>";
  echo "</div>";
}

// suljetaan yhteys
mysqli_close($connection);

?>
