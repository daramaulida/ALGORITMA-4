<?php
for ($i = 1; $i <= 10; $i++) {
	if ($i == 5) {
		continue;
	}
    echo "$i<p>"; // 1 2 3 4 6 7 8 9 10
   
}

for ($i = 1; $i <= 15; $i++) {
	if ($i == 5) {
		continue;
	}
    echo "<hr>$i"; // 1 2 3 4 6 7 8 9 10 11 12 13 14 15
}
echo "<p><strong>By:Dara Maulida";
?>
