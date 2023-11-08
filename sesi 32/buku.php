<?php
include 'connection.php';

$sql = "SELECT * FROM buku";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Buku</title>
    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="buku.php">Buku</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Anggota</a></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pengarang.php">Pengarang</a>
                </li>
            </ul>
        </nav>
    <div class="container mt-4">
        <h1>Daftar Buku</h1>
        <a href="tambah_buku.php" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ISBN</th>
                    <th>Judul</th>
                    <th>Tahun</th>
                    <th>ID Penerbit</th>
                    <th>ID Pengarang</th>
                    <th>ID Katalog</th>
                    <th>Harga Pinjam</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['isbn'] . "</td>";
                    echo "<td>" . $row['judul'] . "</td>";
                    echo "<td>" . $row['tahun'] . "</td>";
                    echo "<td>" . $row['id_penerbit'] . "</td>";
                    echo "<td>" . $row['id_pengarang'] . "</td>";
                    echo "<td>" . $row['id_katalog'] . "</td>";
                    echo "<td>" . $row['harga_pinjam'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
