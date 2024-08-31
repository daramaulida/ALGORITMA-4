<?php

//Contoh For Loop
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
    echo "<hr>";
}

//Penggunaan Pada Array
$arr = array("Apple", "Banana", "Cherry");

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . " ";
    echo "<hr>";
}

//For Loop dengan Step yang Berbeda
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . " ";
    echo "<hr>";
}
echo "<p><strong>By:Dara Maulida";