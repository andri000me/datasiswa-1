<!DOCTYPE html>
<html>
    <head>
        <title>Data Siswa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scal=1">
        <link href="<?php echo base_url()?>/media/css/bootstrap.min.css" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo base_url()?>"/media/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>"/media/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Ini adalah Halaman Utama</h1>
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="tambah.php" class="btn btn-primary"><i class="glyphicon glyphicon-th"></i>Tambah Data</a>
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>NIS</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_object($data)) { ?>
                                <tr>
                                    <td>
                                        <img src="http://img.smkn4bdg.sch.id/siswa/<?php echo $row->nis?>.jpg" width="80px"/>
                                    </td>
                                    <td><?php echo $row->nis?></td>
                                    <td><?php echo $row->nama_lengkap?></td>
                                    <td><?php echo $row->jenis_kelamin?></td>
                                    <td><?php echo $row->alamat?></td>
                                    <td><?php echo $row->no_telp?></td>
                                    <td><?php echo $row->kelas?></td>
                                    <td>
                                        <a href="edit.php?nis=<?php echo $row->nis ?>" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a href="delete.php?nis=<?php echo $row->nis ?>" class="btn btn-danger btnDelete"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btnYa" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary btnTidak">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        <script type="text/javascript">
            $(function() {
                $(".btnDelete").on("click", function(e) {
                    e.preventDefault();
                    
                    var nama = $(this).parent().parent().children()[2];
                    nama = $(nama).html();
                    
                    $(".modal").modal('show');
                    $(".modal-title").html("Konfirmasi");
                    $(".modal-body").html('Anda yakin ingin menghapus data <b>' + nama +'</b> ?');
                    
                    var href = $(this).attr('href');
                    $('.btnYa').off();
                    $('.btnYa').on('click', function() {
                       location.href = href; 
                    });
                });
            });
        </script>
    </body>
</html>