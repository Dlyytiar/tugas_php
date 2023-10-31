<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pengarang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Data Pengarang</h1>
        <form action="../config/tambah_pengarang.php" method="POST">
            <div class="form-group">
                <label for="id_pengarang">ID Pengarang:</label>
                <input type="text" class="form-control" id="id_pengarang" name="id_pengarang" required="">
            </div>
            <div class="form-group">
                <label for="nama_pengarang">Nama Pengarang:</label>
                <input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" required="">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" required="">
            </div>
            <div class="form-group">
                <label for="telp">Telepon:</label>
                <input type="number" class="form-control" id="telp" name="telp" required="">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" required=""></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
</body>
</html>
