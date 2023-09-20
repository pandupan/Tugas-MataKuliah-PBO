<?php 
require('Hewan.php');
require('Kera.php');
require('Katak.php');

$sheep = new Hewan("shaun");

echo "Nama Hewan : " . $sheep->name . "<br>";
echo "kaki : " . $sheep->kaki . "<br>";
echo "berdarah digin : " . $sheep->berdarah_digin . "<br><br>";

$kodok = new Katak("dokodok");

echo "Nama Hewan : " . $kodok->name . "<br>";
echo "kaki : " . $kodok->kaki . "<br>";
echo "berdarah digin : " . $kodok->berdarah_digin . "<br>";
echo $kodok->loncat("Hop Hop");

$sungokong = new Kera("kera sakti");

echo "Nama Hewan : " . $sungokong->name . "<br>";
echo "kaki : " . $sungokong->kaki . "<br>";
echo "berdarah digin : " . $sungokong->berdarah_digin . "<br>";
echo $sungokong->teriak("Auooo");
?>