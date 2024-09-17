<?php
//indexed array
$bulan = array ('Januari', 'Februari', 'Maret');
foreach ($bulan as $index => $nama_bulan) {
	echo ($index + 1) . '. ' . $nama_bulan . '<br/>';
}

//associative array
echo "<hr>";
$kendaraan = array('jenis' => 'Mobil', 'merk' => 'Toyota', 'tipe' => 'Vios');
foreach ($kendaraan as $key => $val) {
	echo ucfirst($key) . ': ' . $val . '<br/>';
}
echo "<hr>";
echo "<p><strong>By:Dara Maulida";