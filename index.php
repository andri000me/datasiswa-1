<?php
    include 'db/koneksi.php';
    // Membuat query SQL mengambil data siswa
    $sql = "SELECT * FROM t_siswa";
    // Lakukan query, hasil query masukan kedalam variable $data
    $data = $mysql->query($sql) or die($mysql->error);
    // Tampilkan views dengan nama v_index.php dari folder views
    include 'views/v_index.php';
?>
