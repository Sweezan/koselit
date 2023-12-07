
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

                  <?php echo form_open_multipart('member/simpan_bayar_member'); ?>
                  <div class="form-outline mb-3">
                    <select name="tanggal" class="form-control">
                    <?php foreach($member as $val){?>
                    <option value="<?php echo $val->Tanggal; ?>"><?php echo $val->Tanggal; ?></option>
                    <?php } ?>
                    </select>
                      </div>
                  <div class="form-outline mb-3">
                    <select name="nama" class="form-control" required>

                      <?php foreach($member as $val){?>
                      <option value="<?php echo $val->id; ?>"><?php echo $val->nama; ?></option>
                      <?php } ?>
                    </select>
                 </div>
                 <div class="form-outline mb-3">
                    <select name="tika" class="form-control" required>

                      <?php foreach($member as $val){?>
                      <option value="<?php echo $val->id_kamar; ?>"><?php echo $val->tipe_kamar; ?></option>
                      <?php } ?>
                    </select>
                 </div>
                 <div class="form-outline mb-3">
                    <select class="form-control" required>

                      <?php foreach($member as $val){?>
                      <option value="<?php echo $val->Harga; ?>"><?php echo $val->Harga; ?></option>
                      <?php } ?>
                    </select>
                 </div>
                 <div class="form-outline mb-3">


                      <?php foreach($metod as $val){?>
                      <?php echo 'Bank : '. $val->nama_bank; ?><br>
                      <?php echo $val->bank; ?>
                      <?php } ?>

                 </div>

                 
                 <div>
                  <input name="bukti_pembayaran" type="file" placeholder="Bukti" required>
                 </div>

               

                  <br>
                  <div>
                    <input type="submit"  class="btn btn-primary btn-lg btn-block btn-success" value="Bayar">
                  </div>
                 
                   <?php echo form_close() ?>
           </div>
        </div>
      </div>
    </div>
  </div>

</body>