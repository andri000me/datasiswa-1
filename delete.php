<?php    
    include 'db/koneksi.php';
    $nis = $_GET['nis'];
    if(!empty($nis)) {
        $sql = "DELETE FROM t_siswa WHERE nis = '$nis'";
        $query = $mysql->query($sql);
        $result = mysqli_fetch_object($query);
        
        if($mysql->query($sql)) {
            $success = "Data berhasil dihapuskan";
        } else {
            $error = "Error. " . $mysql->error;
        }
        header('location:index.php');
    }
?>