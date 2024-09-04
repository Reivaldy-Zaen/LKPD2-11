<form method=POST>
        <label>Nama 1 : </label> 
        <input type="text" name="nama1"><br><br>
        <label>Nama 2 : </label>
        <input type="text" name="nama2"><br>
        <button name="tombol">kirim</button>
    </form>
    <?php
    if(isset($_POST['tombol'])) {
        $nama1 = $_POST['nama1'];
        $nama2 = $_POST['nama2'];
        $selisih = strlen($nama1) - strlen($nama2);
        $selisih2 = strlen($nama2) - strlen($nama1);
        if (strlen($nama1) > strlen($nama2)) {
            echo $nama1 . " memilih jumlah karakter lebih banyak dari " . $nama2 . " dengan selisih " . $selisih . " Karakter";
        }else {
            echo $nama2 . " memilih jumlah karakter lebih banyak dari " . $nama1 . " dengan selisih " . $selisih2 . " Karakter";
        }
    };
    ?>