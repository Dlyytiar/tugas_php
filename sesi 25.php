<?php
// Tugas 1: Membuat output bilangan ganjil atau genap
$nilai = 15;

if ($nilai % 2 == 0) {
    echo "Bilangan Genap";
} else {
    echo "Bilangan Ganjil";
}

echo "<br>"; // Enter

// Tugas 2: Membuat output tahun kabisat
$tahun = 2012;

if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
    echo "$tahun adalah tahun kabisat";
} else {
    echo "$tahun bukan tahun kabisat";
}

echo "<br>"; // Enter

// Tugas 3: Membuat grade nilai
$nilai = 78;

if ($nilai >= 90 && $nilai <= 100) {
    echo "Grade A";
} elseif ($nilai >= 80 && $nilai < 90) {
    echo "Grade B";
} elseif ($nilai >= 70 && $nilai < 80) {
    echo "Grade C";
} elseif ($nilai >= 60 && $nilai < 70) {
    echo "Grade D";
} else {
    echo "Grade E";
}
?>
