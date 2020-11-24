<!DOCTYPE html>
<html>
    <head>
        <title>Data Siswa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scal=1">
        <link href="<?php echo base_url()?>/media/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Ini adalah Halaman tambah data siswa</h1>
                    <?php if(!empty($success)) {?>
                        <div class="col-lg-12">
                            <div class="alert alert-success"><?php echo $success?></div>
                        </div>
                    <?php } ?>
                    <?php if(!empty($error)) {?>
                        <div class="col-lg-12">
                            <div class="alert alert-danger"><?php echo $error?></div>
                        </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <form class="form-horizontal" method="POST" action="<?php echo $url ?>">
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIS</label>
                    <div class="col-sm-10">
                        <input type="text" name="nis" class="form-control" value="<?php echo @$result->nis ?>"/>
                    </div>
                    <label class="col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_lengkap" class="form-control" value="<?php echo @$result->nama_lengkap ?>" />
                    </div>
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label><input type="radio" name="jenis_kelamin" value="Laki Laki" <?php echo @$result->jenis_kelamin == "Laki-Laki" ? 'checked' : ''?>/>Laki-Laki</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo @$result->jenis_kelamin == "Perempuan" ? 'checked' : ''?>/>Perempuan</label>
                        </div>
                    </div>
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" value="<?php echo @$result->alamat ?>"></textarea>
                    </div>
                    <label class="col-sm-2 control-label">No Telp</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_telp" class="form-control" value="<?php echo @$result->no_telp ?>" />
                    </div>
                    <label class="col-sm-2 control-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" name="kelas" class="form-control" value="<?php echo @$result->kelas ?>" />
                    </div>
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <?php if ($form == "add") { ?>
                            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                        <?php } else {?>
                            <button type="submit" class="btn btn-warning"><i class="glyphicon glyphicon-floppy-disk"></i> Ubah</button>
                        <?php } ?>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>