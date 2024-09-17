<?php
// ini adalah array dua dimensi
$matrik = [
    [2,3,4],
    [7,5,0],
    [4,3,8],
];

// cara mengakses isinya
echo $matrik[1][0]; //-> output: 7
echo "<hr>";

//contoh lain
// membuat array 2 dimensi yang berisi array asosiatif

$artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk Pemula",
        "penulis" => "ahmadimuslim"
    ],
    [
        "judul" => "Tutorial PHP dari Nol hingga Mahir",
        "penulis" => "ahmadimuslim"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "daramaulida"
    ]
];

// menampilkan array
foreach($artikel as $post){
    echo "<h2>".$post["judul"]."</h2>";
    echo "<p>".$post["penulis"]."<p>";
    echo "<hr>";
}
echo "<p><strong>By:Dara Maulida";