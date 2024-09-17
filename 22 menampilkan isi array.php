<?php
// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";

//menggunakan perulangan.
// membuat array
echo "<hr>";
$barang = ["Buku Tulis", "Penghapus", "Spidol"];
// menampilkan isi array dengan perulangan for
for($i=0; $i < count($barang); $i++){
    echo $barang[$i]."<br>";
}

//menggunakan perulangan while dan foreach.
// membuat array
echo "<hr>";
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array dengan perulangan foreach
foreach($barang as $isi){
    echo $isi."<br>";
}
echo "<hr>";
// menampilkan isi array dengan perulangan while
$i = 0;
while($i < count($barang)){
    echo $barang[$i]."<br>";
    $i++;
}
echo "<hr>";
echo "<p><strong>By:Dara Maulida";