
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
            <p class="display-4 ">Edit Layanan</p>

                  <form action="<?php echo site_url('cs/simpanedit_cs')?>" method="post">
                  <div class="form-outline mb-4">  
                  <div class="form-outline mb-4">  
                    <?php foreach($cs as $val){ ?>
                    <input type="text" class="form-control" name="id" value="<?php echo $val->id_CS; ?>" readonly>
                  <?php } ?>
                  </div>
                    <select name="nama" class="form-control" required>

                      <option value="<?php echo $this->session->userdata('username') ?>"><?php echo $this->session->userdata('username') ?></option>

                    </select>
                  </div>

                  <div class="form-outline mb-3">
                  <?php foreach($cs as $val){ ?>
                    <input class="form-control" name="ket" value="<?php echo $val->keterangan ?>">
                    <?php } ?>
                  </div>

                  <div class="form-outline mb-3">
                  <select name="status" class="form-control" required>

                      <option value="Belum Selesai">Belum Selesai</option>

                    </select>
                  </div>

                  <div>
                    <input type="submit"  class="btn btn-primary btn-lg btn-block btn-success" value="Simpan Edit">
                  </div>
                 
                  </form>
           </div>
        </div>
      </div>
    </div>
  </div>

</body>