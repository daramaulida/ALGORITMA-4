<?php
// Menggunakan fungsi array()
$buah = array('apel', 'jeruk', 'pisang');

// Menggunakan tanda kurung siku []
$warna = ['merah', 'hijau', 'biru'];
echo $buah[1]; // akan menampilkan 'jeruk'
echo "<br><hr>";
echo $warna[0]; // akan menampilkan 'merah'
echo "<br><hr>";
$pengguna = ['nama' => 'Ali', 'umur' => 25, 'pekerjaan' => 'Pengembang Web'];
echo $pengguna['nama']; // akan menampilkan 'Ali'
echo "<br><hr>";
$buah[1] = 'mangga';
echo $buah[1]; // akan menampilkan 'mangga'
echo "<br><hr>";
$buah[] = 'anggur'; // akan menambahkan 'anggur' ke akhir array
unset($buah[1]); // akan menghapus elemen dengan indeks 1 dari array $buah
echo count($buah); // akan menampilkan jumlah elemen dalam array $buah
foreach ($warna as $w) {
    echo $w . '<br><hr>';
}
foreach ($pengguna as $kunci => $nilai) {
    echo $kunci . ': ' . $nilai . '<br>';
}
echo "<br><hr>";
echo "<p><strong>By:Dara Maulida";