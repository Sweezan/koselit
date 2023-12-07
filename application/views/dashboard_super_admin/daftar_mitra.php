
<head>
<meta name="viewport" content="width-deviace-width, initial-scale-1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" type="text/css">
<script src="<?php echo base_url('assets/css/bootstrap.min.css')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.js')?>"></script>
</head>

<style>
  body{
    background-color: ;
  }
</style>

<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
        
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Mitra</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="<?php echo base_url('index.php/cs/tambah_cs') ?>">+ Tambah Data</a>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 50px">No</th>
                      <th style="width: 150px">username</th>
                      <th style="width: 50px">Tanggal pembayaran</th>
                      <th style="width: 50px">Waktu</th>
                      <th style="width: 150px">Status</th>
                      <th style="width: 200px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php $no=1; foreach($mitra as $val){?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $val->username; ?></td>
                      <td><?php echo $val->tgl; ?></td>
                      <td><?php echo $val->waktu; ?></td>
                      <td><?php echo $val->status; ?></td>

                        <td> <div class="btn-group">
              <a href="<?php echo site_url('super_admin/on_akun/'.$val->id);?>" class="btn btn-success">ON</a>
              <a href="<?php echo site_url('super_admin/off_akun/'.$val->id);?>" onclick="return confirm('Yakin menonaktifkan akun ini?')" class="btn btn-warning">OFF</a>
              </div></td>
                    </tr>
          <?php $no++; } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


</body>