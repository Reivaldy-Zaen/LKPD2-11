<?php
//  Ini adalah sebuah fungsi yang menerima jumlah uang sebagai input
function hitungPecahanUang($jumlahUang) {
    
    $pecahanUang = [100000, 50000, 20000, 10000, 5000, 2000, 1000];
    
    $hasil = [];
    
    
    foreach ($pecahanUang as $pecahan) {
        if ($jumlahUang >= $pecahan) {
            $lembar = intdiv($jumlahUang, $pecahan); 
            $hasil[$pecahan] = $lembar; 
            $jumlahUang %= $pecahan; 
        }
    }
    
    return $hasil;
}


$jumlahUang = 387000;
$pecahan = hitungPecahanUang($jumlahUang);


echo "Jumlah uang: $jumlahUang<br>";
foreach ($pecahan as $pecahan => $lembar) {
    echo "Pecahan Rp$pecahan: $lembar lembar<br>";
}
