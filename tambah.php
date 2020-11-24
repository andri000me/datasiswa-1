<?php
    include 'db/koneksi.php';
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $nis = $_POST['nis'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $kelas = $_POST['kelas'];
        
        $sql = "INSERT INTO t_siswa(nis, nama_lengkap, jenis_kelamin, alamat, no_telp, kelas) VALUES('$nis','$nama_lengkap','$jenis_kelamin','$alamat','$no_telp','$kelas')";
        if($mysql->query($sql)) {
            $success = "Data berhasil ditambahkan";
        } else {
            $error = "Error. " . $mysql->error;
        }
    }
    $form = "add";
    $url = "tambah.php";
    include 'views/v_form_siswa.php';
?>