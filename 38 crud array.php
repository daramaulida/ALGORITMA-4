<?php

//Membuat Array (Create)
$buah = array("apel", "mangga", "pisang");
// atau
$buah = ["apel", "mangga", "pisang"];
$umur = array("Ali" => 20, "Budi" => 25, "Citra" => 22);
//Membaca Array (Read)
echo "<hr>";
echo $buah[0]; // menampilkan "apel"
echo "<hr>";
echo $umur["Ali"]; // menampilkan 20
echo "<hr>";
foreach ($buah as $b) {
    echo $b . " "; // menampilkan "apel mangga pisang "
}
echo "<hr>";
echo "<p><strong>By:Dara Maulida";
