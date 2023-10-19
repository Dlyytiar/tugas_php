<?php
//Nomor 1
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Angka $i adalah bilangan genap<br>";
    } else {
        echo "Angka $i adalah bilangan ganjil<br>";
    }
}

echo "<br>";

//Nomor 2
for ($year = 2000; $year <= 2023; $year++) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "Tahun $year adalah tahun kabisat<br>";
    } else {
        echo "Tahun $year adalah bukan tahun kabisat<br>";
    }
}

echo "<br>";

//Nomor 3
for ($i = 9; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}

?>