<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #00bbf0; /* Warna biru untuk header */
            color: black;
        }
        tr:nth-child(even) {
            background-color: #ccc; /* Warna abu-abu  untuk baris genap */
        }
        tr:nth-child(odd) {
            background-color: white; /* Warna putih untuk baris ganjil */
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>Nama ke $i</td>";
        echo "<td>Kelas " . (11 - $i) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<?php
echo "<br>";

// Melakukan looping untuk menampilkan pola angka
for ($i = 0; $i <= 9; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
?>

</body>
</html>
