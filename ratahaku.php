<?php

// tietokantayhteys
include "connect.php";

$haku = $_POST['haku'];

// haetaan ja tulostetaan HENKILO-taulun sisalto
$haku_rata = "select RATA.rnimi,KAUPUNKI.nimi from RATA join KAUPUNKI on RATA.kaupunki_ID = KAUPUNKI.kaupunki_ID";
$sql_rata = mysqli_query($connection,$haku_rata) or die("Can't find rata-data");

//create an array
$ratatiedot = array();
while($row =mysqli_fetch_assoc($slq_rata))
{
    $ratatiedot[] = $row;
}

echo json_encode($ratatiedot);

// while($row = mysqli_fetch_array($sql_rata)){
//   echo "<div style='background-color: #CCC'>";
//   echo "Rata: ".$row['rnimi']."</br>";
//   echo "Kaupunki: ".$row['nimi']."</br>";
//   echo "</div></br>";
// }


// suljetaan yhteys
mysqli_close($connection);

?>
