<?php
function hitungUsia($kategoriusia)
{
    $anakanak = 0;
    $dewasa = 0;

    foreach ($kategoriusia as $usia) {
        if ($usia < 17) {
            $anakanak++;
        } else {
            $dewasa++;
        }
    }

    return [
        'data_usia' => $kategoriusia,
        'anak_anak' => $anakanak,
        'dewasa' => $dewasa
    ];
}

$dataUsia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
$hasil = hitungUsia($dataUsia);

echo "List Usia : " . implode(', ', $hasil['data_usia']) . "\n";
echo "<br>";
echo "Jumlah Kategori Dewasa : " . $hasil['dewasa'] . "\n";
echo "<br>";
echo "Jumlah Kategori Anak-Anak : " . $hasil['anak_anak'] . "\n";

