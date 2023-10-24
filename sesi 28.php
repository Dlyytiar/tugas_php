<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai</title>
    <style>
        .navbar {
            background-color: #00bbf0;
            text-align: left;
            padding: 8px;
            margin-bottom: 60px;
            color: white;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: white;
        }
        tr:nth-child(even) {
            background-color: white;
        }
        tr:nth-child(odd) {
            background-color: #CCCCCC;
        }
    </style>
</head>
<body>
<div class="navbar">
    <h1>Daftar Nilai</h1>
</div>
<table border="1">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Kelas</th>
        <th>Nilai</th>
        <th>Hasil</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $data = file_get_contents("data.json");
    $nilai = json_decode($data, true);

    $no = 1; 
    
    foreach ($nilai as $n) {
        echo "<tr>";
        echo "<td>" . $no . "</td>"; 
        echo "<td>" . $n['nama'] . "</td>";
        
        // Mengubah format tanggal lahir
        $tanggal_lahir = new DateTime($n['tanggal_lahir']);
        $tanggal_lahir_formatted = $tanggal_lahir->format('d F Y');
        echo "<td>" . $tanggal_lahir_formatted . "</td>";
        
        // Menghitung umur berdasarkan tanggal lahir 
        $today = new DateTime('today');
        $umur = $tanggal_lahir->diff($today)->y;
        echo "<td>" . $umur . " tahun</td>";
        
        echo "<td>" . $n['alamat'] . "</td>";
        echo "<td>" . $n['kelas'] . "</td>";
        echo "<td>" . $n['nilai'] . "</td>";

        // Menghitung hasil berdasarkan nilai
        $hasil = "";
        if ($n['nilai'] >= 90 && $n['nilai'] <= 100) {
            $hasil = "A";
        } elseif ($n['nilai'] >= 80 && $n['nilai'] <= 89) {
            $hasil = "B";
        } elseif ($n['nilai'] >= 70 && $n['nilai'] <= 79) {
            $hasil = "C";
        } else {
            $hasil = "D";
        }
        echo "<td>" . $hasil . "</td>";

        echo "</tr>";
        $no++;
    }
    ?>
    </tbody>
</table>
</body>
</html>
