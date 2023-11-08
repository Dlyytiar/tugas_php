<?php
include "../connection.php";

    $id = $_GET['id'];

    if(isset($koneksi)) {
        $query = "DELETE FROM anggota WHERE id_anggota = '$id'";
        if(mysqli_query($koneksi, $query)) {
            header("Location: ../index.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    } else {
        echo "Koneksi tidak terbentuk.";
    }
?>
