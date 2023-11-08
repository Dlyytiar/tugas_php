<?php
include "../connection.php";

$id = $_POST['id'];
$nama = $_POST['nama_pengarang'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$query = "UPDATE pengarang SET nama_pengarang = '$nama', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_pengarang = '$id'";

if (mysqli_query($koneksi, $query)) {
    header("location:../pengarang.php");
    exit;
} else {
    echo "Gagal memperbarui data pengarang: " . mysqli_error($koneksi);
}
?>
