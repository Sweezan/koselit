
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" type="text/css">
<script src="<?php echo base_url('assets/css/bootstrap.min.css')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.js')?>"></script>
</head>


<body>

<section class="vh-100" style="background-color:  #4BB543;">
 <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <p class="display-4 ">Tambah Data Transaksi</p>


                  <form action="simpan_transaksi" method="post">

                    
                  <div class="form-outline mb-3">
                    <label >Tanggal Transaksi</label>
                    <label>:</label>
                    <input type="date" class="form-control" name="tanggal" required><br>
                 
                  <div class="form-outline mb-3">
                 
                     
                    <label>Nama</label>
                    <label>:</label>
                    <select name="nama" class="form-control" required>
                      <option selected disabled >Pilih Member</option>
                      <?php foreach($transaksi as $val){?>
                      <option value="<?php echo $val->nama; ?>"><?php echo $val->nama; ?></option>
                      <?php } ?>
                    </select>

                  
                </div>
                <div class="form-outline mb-3">
                 
                     


                </div>
                  <div class="form-outline mb-3">
                    <label>Tipe Kamar :</label><br>
                    <select name="tika" class="form-control" required>
                      <option selected disabled >Pilih Tipe</option>
                      <?php foreach($kamar as $val){?>
                      <option value="<?php echo $val->id_kamar ?>"><?php echo $val->tipe_kamar ?></option>
                      <?php } ?>
                    </select>
                  
                  </div>
                  <div class="form-outline mb-3">
                    <label>Pembayaran :</label><br>
                    <select name="pembayaran" class="form-control">
                      <option value="" selected disabled></option>
                    <option value="Belum Bayar" >Belum Bayar</option>
                  </select>
                  </div>

                  <div>
                    <input type="submit"  class="btn btn-primary btn-lg btn-block btn-success" value="Simpan">
                  </div>
                 

                  </form>
           </div>
        </div>
      </div>
    </div>
  </div>


</body>