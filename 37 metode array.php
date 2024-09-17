<?php
//array_push()
$buah = ["apel", "jeruk"];
array_push($buah, "pisang", "mangga");
print_r($buah);

//array_pop()
echo "<hr>";
$buah = ["apel", "jeruk", "pisang"];
$buahTerakhir = array_pop($buah);
echo $buahTerakhir;

//array_shift()
echo "<hr>";
$buah = ["apel", "jeruk", "pisang"];
$buahPertama = array_shift($buah);
echo $buahPertama;

//array_unshift()
echo "<hr>";
$buah = ["apel", "jeruk"];
array_unshift($buah, "pisang", "mangga");
print_r($buah);

//array_merge()
echo "<hr>";
$array1 = ["warna" => "merah", 2, 4];
$array2 = ["a", "b", "warna" => "hijau", "bentuk" => "trapesium", 4];
$result = array_merge($array1, $array2);
print_r($result);

//array_slice()
echo "<hr>";
$buah = ["apel", "jeruk", "pisang", "mangga"];
$subBuah = array_slice($buah, 1, 2);
print_r($subBuah);

//array_splice()
echo "<hr>";
$buah = ["apel", "jeruk", "pisang", "mangga"];
array_splice($buah, 2, 1, "kiwi");
print_r($buah);
echo "<hr>";
echo "<p><strong>By:Dara Maulida";
