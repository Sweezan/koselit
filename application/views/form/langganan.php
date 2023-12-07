
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
            <p class="display-4 ">Bayar Langganan</p>

                  <?php echo form_open_multipart('welcome/simpan_langganan'); ?>
                  <div class="form-outline mb-3">
                    <select name="nama" class="form-control" required>
                      <option selected disabled >Pilih User</option>
                      <?php foreach($user as $val){?>
                      <option value="<?php echo $val->id; ?>"><?php echo $val->username; ?></option>
                      <?php } ?>
                    </select>
                 </div>
                 <div class="form-outline mb-3">
                    <label >Tanggal Transaksi</label>
                    <label>:</label>
                    <input type="date" class="form-control" name="tanggal" required><br>
                      </div>

                  <div class="form-outline mb-3">      

                      <?php foreach($langganan as $val){?>
                        <option ><?php echo $val->waktu ; ?><label>  :  </label><a></a><?php echo '    Rp ', $val->biaya; ?></option>
                      <?php } ?>

                  </div>

                  <div class="form-outline mb-3">
       
                    <select name="waktu" class="form-control" required>
                      <option selected disabled >Pilih Langganan</option>
                      <?php foreach($langganan as $val){?>
                      <option value="<?php echo $val->id_biaya; ?>"><?php echo $val->waktu; ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div>
                    <label>Nama</label>
                    <label>:</label>
                    <label>PT.Kos</label>
                  </div>
                     <?php foreach($metode as $val){?>
                    <label>Bank</label>
                    <label>:</label>
                   <?php echo $val->nama_metode; ?>

                  <div class="form-outline mb-3">
                    <label>No</label>
                    <label>:</label>
                    <?php echo $val->no; ?>
                   <?php } ?>
                  </div>

                 <div>
                  <input name="bukti_pembayaran" type="file" placeholder="Bukti" required>
                 </div>

               

                  <br>
                  <div>
                    <input type="submit"  class="btn btn-primary btn-lg btn-block btn-success" value="Upload">
                  </div>
                 
                   <?php echo form_close() ?>
           </div>
        </div>
      </div>
    </div>
  </div>

</body>