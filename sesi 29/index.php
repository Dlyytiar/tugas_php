<?php
include 'connection.php';

$sql = "SELECT buku.isbn, buku.judul, buku.tahun, penerbit.nama_penerbit, katalog.nama AS nama_katalog, pengarang.nama_pengarang
        FROM buku
        INNER JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
        INNER JOIN katalog ON buku.id_katalog = katalog.id_katalog
        INNER JOIN pengarang ON buku.id_pengarang = pengarang.id_pengarang";

$result = mysqli_query($koneksi, $sql);
$nomor = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Perpustakaan</title>
</head>
<body>
    <nav class="navbar">Perpustakaan</nav>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>ISBN</th>
                <th>Judul</th>
                <th>Tahun</th>
                <th>Penerbit</th>
                <th>Katalog</th>
                <th>Pengarang</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $nomor . "</td>"; 
                echo "<td>" . $row['isbn'] . "</td>";
                echo "<td>" . $row['judul'] . "</td>";
                echo "<td>" . $row['tahun'] . "</td>";
                echo "<td>" . $row['nama_penerbit'] . "</td>";
                echo "<td>" . $row['nama_katalog'] . "</td>";
                echo "<td>" . $row['nama_pengarang'] . "</td>";
                echo "</tr>";
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>
