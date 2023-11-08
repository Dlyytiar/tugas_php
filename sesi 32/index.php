<?php
include 'connection.php';

$sql = "SELECT * FROM anggota";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Anggota</title>
    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Anggota</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="buku.php">Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pengarang.php">Pengarang</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-4">
        <h1>Daftar Anggota</h1>
        <a href="TambahData/tambahanggota.php" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID Anggota</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Alamat</th>
                    <th>Tanggal Entry</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id_anggota'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['telp'] . "</td>";
                        echo "<td>" . $row['alamat'] . "</td>";
                        echo "<td>" . $row['tgl_entry'] . "</td>";
                        echo "<td>
                                <a href='edit/editanggota.php?id=" . $row['id_anggota'] . "&nama=" . urlencode($row['nama']) . "&username=" . $row['username'] . "&email=" . urlencode($row['email']) . "&telp=" . $row['telp'] . "&alamat=" . urlencode($row['alamat']) . "&tgl_entry=" . $row['tgl_entry'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='config/delete_anggota.php?id=" . $row['id_anggota'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Delete</a>
                            </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
