<?php
include 'connection.php';

$sql = "SELECT * FROM pengarang";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Daftar Pengarang</title>
    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="pengarang.php">Pengarang</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Anggota</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="buku.php">Buku</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-4">
        <h1>Daftar Pengarang</h1>
        <a href="TambahData/tambahpengarang.php" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID Pengarang</th>
                    <th>Nama Pengarang</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_pengarang'] . "</td>";
                    echo "<td>" . $row['nama_pengarang'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['telp'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
