
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
                <h3 class="card-title">Pembayaran Mitra</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 50px">No</th>
                      <th style="width: 200px">username</th>
                      <th style="width: 150px">Waktu</th>
                      <th style="width: 150px">Harga</th>
                      <th style="width: 150px">Bukti Pembayaran</th>
                      <th style="width: 200px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php $no=1; foreach($langganan as $val){?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $val->username; ?></td>
                      <td><?php echo $val->waktu; ?></td>
                      <td><?php echo $val->biaya; ?></td>
                      <td>
                        <img src="<?php echo base_url('bukti_pembayaran/'. $val->bukti_pembayaran); ?>">
                      </td>

                        <td> <div class="btn-group">
              <a href="<?php echo site_url('super_admin/on_akun/'.$val->id_mitra);?>" class="btn btn-success">ON</a>
              <a href="<?php echo site_url('super_admin/delete_langganan/'.$val->id_blgn);?>" onclick="return confirm('Yakin menonaktifkan akun ini?')" class="btn btn-warning">Hapus</a>
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