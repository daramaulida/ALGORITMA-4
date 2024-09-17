<?php
// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// menambahkan isi pada idenks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

// cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}
echo "<hr>";

// membuat array
$user = [
    "dara",
    "muhar",
    "ahmadimuslim"
];

// mengisi array pada indek ke-1 ("kaila")
$user[1] = "Ahmadi";

// mencetak isi array
echo "<pre>";
print_r($user);
echo "</pre>";
echo "<hr>";
echo "<p><strong>By:Dara Maulida";