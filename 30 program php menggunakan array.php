<?php
//Array 1 Dimensi PHP
$test=array("Index pertama","Index Kedua","Index ketiga");
echo "Hasil array : 0." . $test[0] . ", 1." . $test[1] . " dan 2." . $test[2] . ".";

//Array 2 Dimensi Pada PHP
echo "<hr>";
$nilai=array(
    array(90,65,83),
    array(90,78,97),
    array(78,90,78)
  );
echo"output array <br>";
echo $nilai[0] [0]." ".$nilai[0] [1]." ".$nilai[0] [2]."<br>";
echo $nilai[1] [0]." ".$nilai[1] [1]." ".$nilai[1] [2]."<br>";
echo $nilai[2] [0]." ".$nilai[2] [1]." ".$nilai[2] [2]."<br><hr>";

//Array 3 Dimensi PHP
$nilai=array(
    array(
      array(80,55,85),
      array(95,80,99),
      array(79,93,80)
    ), 
    array(array(80,55,85),
      array(95,80,99),
      array(79,93,80)
    )
  );
echo"output array <br>";
echo $nilai[0] [0] [0]." ".$nilai[0] [0] [1]." ".$nilai[0] [0] [2]."<br>";
echo $nilai[0] [1] [0]." ".$nilai[0] [1] [1]." ".$nilai[0] [1] [2]."<br>";
echo $nilai[0] [2] [0]." ".$nilai[0] [2] [1]." ".$nilai[0] [2] [2]."<br>";
echo "<hr>";
echo "<p><strong>By:Dara Maulida";