
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
            <p class="display-4 ">Tambah Akun Mitra</p>

                  <form action="simpan_mitra" method="post">
                  <div class="form-outline mb-4">      
                    <input type="text" class="form-control" name="username" placeholder="Username..">
                  </div>

                  <div class="form-outline mb-3">
                    <input type="password" class="form-control" name="password"  placeholder="Password">
                  </div>

                  <div>
                    
                  </div>

                  <div>
                    <input type="submit"  class="btn btn-primary btn-lg btn-block btn-success" value="Next">
                  </div>
                 
                  </form>
           </div>
        </div>
      </div>
    </div>
  </div>

</body>