<?php
    include 'db/koneksi.php';
    
    $nis = $_GET['nis'];
    if(!empty($nis)) {
        $sql = "SELECT * FROM t_siswa WHERE nis = $nis";
        $query = $mysql->query($sql);
        $result = mysqli_fetch_object($query);
    }
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $nama_lengkap =     $_POST['nama_lengkap'];
        $jenis_kelamin =    $_POST['jenis_kelamin'];
        $alamat =           $_POST['alamat'];
        $no_telp =          $_POST['no_telp'];
        $kelas =            $_POST['kelas'];
        
        $sql = "UPDATE t_siswa SET
                nama_lengkap = '$nama_lengkap',
                jenis_kelamin = '$jenis_kelamin',
                alamat = '$alamat',
                no_telp = '$no_telp',
                kelas = '$kelas',
                WHERE nis = '$nis'
                ";
        if($mysql->query($sql)) {
            $success = "Data berhasil dirubahkan";
        } else {
            $error = "Error. " . $mysql->error;
        }
        header('location:index.php');
    }
    
    $form = "edit";
    $url = "edit.php";
    include 'views/v_form_siswa.php';
?>