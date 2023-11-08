<?php
include "../connection.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$query = "UPDATE anggota SET nama = '$nama', username = '$username', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_anggota = '$id'";

if (mysqli_query($koneksi, $query)) {
    header("location:../index.php");
    exit;
} else {
    echo "Gagal memperbarui data anggota: " . mysqli_error($koneksi);
}
?>
