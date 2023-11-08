<?php
include "../connection.php"; // Periksa dan sesuaikan path

$id = $_GET['id'];

if(isset($koneksi)) {
    $query = "DELETE FROM pengarang WHERE id_pengarang = '$id'";
    if(mysqli_query($koneksi, $query)) {
        header("Location: ../pengarang.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "Koneksi tidak terbentuk.";
}
?>
