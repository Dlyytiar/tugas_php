<?php
include '../connection.php';

$id = $_GET['id'];
$nama = $_GET['nama_pengarang'];
$email = $_GET['email'];
$telp = $_GET['telp'];
$alamat = $_GET['alamat'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pengarang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Data Pengarang</h1>
        <form action="../config/edit_pengarang.php" method="POST">
            <div class="form-group">
                <label for="id_pengarang">ID Pengarang:</label>
                <input type="text" class="form-control" id="id_pengarang" name="id" value="<?php echo $id; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_pengarang">Nama Pengarang:</label>
                <input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" value="<?php echo $nama; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
                <label for="telp">Telepon:</label>
                <input type="number" class="form-control" id="telp" name="telp" value="<?php echo $telp; ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" required><?php echo $alamat; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
