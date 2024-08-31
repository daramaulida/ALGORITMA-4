<?php
//Contoh Penggunaan while Loop
$i = 1;

while ($i <= 5) {
    echo "Nomor: $i <br><br>";
    $i++;
}

//Penanganan Array dengan while Loop
$fruits = ["apple", "banana", "cherry"];
$i = 0;

while ($i < count($fruits)) {
    echo $fruits[$i] . "<hr>";
    $i++;
}
echo "<p><strong>By:Dara Maulida";
?>
