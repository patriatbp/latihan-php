<?php

require_once ("animal.php");
require_once ("Ape.php");
require_once ("Katak.php");

$sheep = new Animal("shaun");

echo "Nama Hewan : " .$sheep->name."<br>"; // "shaun"
echo "Jumlah Kaki : " .$sheep->legs."<br>"; // 2
echo "Berdarah Dingin : ".$sheep->cold_blooded."<hr >"; // false

 $sungokong = new Ape("kera sakti");

echo "Nama Hewan : ".$sungokong->name."<br>";
echo "Jumlah Kaki : ".$sungokong->legs."<br>";
echo "Berdarah Dingin : " .$sungokong->cold_blooded."<br>";
echo  $sungokong->yelling()."<hr>"; // "Auooo"

$kodok = new Katak("buduk");

echo "Nama Hewan : " .$kodok->name."<br>";
echo "Jumlah Kaki : " .$kodok->legs."<br>";
echo "Berdarah Dingin : " . $kodok->cold_blooded."<br>";
echo  $kodok->jump() ; // "hop hop"