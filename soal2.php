<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Kompensasi Pegawai</title>
    <style>
        body {
            color: black;
            margin: 0;
            padding: 10%;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }

        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

       
        h6 {
            color: #555;
            font-size: 0.9em;
        }

        .result {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <label for="lamakerja">Lama Kerja (Jam):</label>
        <input type="number" name="lamakerja" id="lamakerja" min="1" required>
        <h6>Note: <b>Default jam kerja adalah 8 jam</b></h6>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jamKerja = intval($_POST['lamakerja']); // Mengambil nilai input dan mengubahnya menjadi bilangan bulat

        $kompensasi = 0; // Inisialisasi nilai kompensasi dengan 0

        if ($jamKerja > 8) {
            $kompensasi = 50000 + ($jamKerja - 9) * 25000; // Menghitung kompensasi jika bekerja lebih dari 8 jam
        }

        $jamlebih = $jamKerja - 8; // Menghitung berapa jam lebih yang bekerja di atas 8 jam
    
        echo '<div class="result">';
        echo "<p>Lama kerja Anda adalah " . $jamKerja . " jam</p>";
        echo "<p>Jam lebih adalah " . $jamlebih . " jam</p>";
        echo "<p>Jumlah kompensasi adalah Rp " . number_format($kompensasi, 0, ',', '.') . "</p>"; // Menampilkan hasil kompensasi dengan format angka
        echo '</div>';
    }
    ?>

</body>

</html>
