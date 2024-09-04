<?php
$data = [80, 90, 75, 100, 85, 100, 66];

$cari = 100;
function hitungAngka($array, $cari)
{
    $jumlahKemunculan = 0; //untuk jumlah kemunculan angkanya
    foreach ($array as $angka) {
        // Jika elemen sama dengan angka yang dicari, tambahkan jumlah kemunculan
        if ($angka == $cari) {
            $jumlahKemunculan++;
        }
    }
    echo "jumlah angka $cari = $jumlahKemunculan <br>";
}
// Panggil fungsi dan tampilkan hasilnya
hitungAngka($data , $cari);



