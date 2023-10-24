<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator BMI</title>
</head>
<body>
    <h1>Kalkulator BMI</h1>
    <form method="post" action="kategori.php">
        Nama: <input type="text" name="nama"><br>
        Tinggi (cm): <input type="number" name="tinggi"><br>
        Berat (kg): <input type="number" name="berat"><br>
        <input type="submit" value="Hitung BMI">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $tinggi = $_POST["tinggi"];
        $berat = $_POST["berat"];

        $tinggi_m = $tinggi / 100;
        $bmi = $berat / ($tinggi_m * $tinggi_m);

        if ($bmi < 18.5) {
            $kategori = "kurus";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $kategori = "sedang";
        } else {
            $kategori = "gemuk";
        }

        echo "Halo $nama, Nilai BMI anda adalah $bmi, anda termasuk $kategori";
    }
    ?>
</body>
</html>
