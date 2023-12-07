<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan Kos</title>

    <link rel="stylesheet" href="vendors/boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="styles/theme.css">
</head>
<style>
  body{
    background-color: ;
    
  }
  
</style>
<body>
  <!-- NAVBAR -->

  <nav class="navbar navbar-expand-lg" style="background-color:  #4BB543;">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">KOS ELIT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
          <div class="dropdown">
          <button class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:  #4BB543;">
            Login
          </button>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="<?php echo site_url('super_admin'); ?>">Login Super Admin</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('welcome/login_admin'); ?>">Login Admin</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('welcome/login_cs'); ?>">Login Member</li>
            <li></li>
          </ul>
        </div>
        

          <li class="nav-item">
            <a></a>
          </li>
          <li class="nav-item">
          <div class="dropdown">
          <button class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:  #4BB543;">
            Daftar
          </button>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="<?php echo site_url('welcome/daftar_mitra') ?>">Daftar</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('welcome/bayar_langganan'); ?>">Bayar langganan</a></li>
            <li></li>
          </ul>
        </div>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <section class="header-section" id="header">
    <div class="container">
      <div class="row align-item-center justify-content-between">
        <div class="col-md-6">
          <p class="text-green fw-semibold">ELIT KOS</p>
          <h1 class="header-title text-uppercase fw-bold mb-5">
           PENGELOLAAN<br class=" d-none d-md-block" />kos secara mudah
          </h1>
          <p class="text-green fw-semibold">Aplikasi pengelolaan kos ini akan memberikan<br class=" d-none d-md-block" />informasi 
            yang komprehensif kepada calon penyewa<br class=" d-none d-md-block" />dan membantu pemilik atau pengelola kos 
            <br class=" d-none d-md-block" />untuk berkomunikasi dengan potensi penyewa dengan lebih baik.
          </p>
          <br/>
          <br/>
          <a href="#" 
             class="header-skill d-inline-flex align-items-center gap-2">
             Login <i class="bx bx-right-arrow-alt fs-4"></i>
          </a>
          <br/>
          <a href="#" 
             class="header-skill d-inline-flex align-items-center gap-2">
             Sign up <i class="bx bx-right-arrow-alt fs-4"></i>
          </a>
          <br/>
          <a href="#" 
             class="header-skill d-inline-flex align-items-center gap-2">
             Purchase <i class="bx bx-right-arrow-alt fs-4"></i>
          </a>
          
          <div class="d-flex align-item-center gap-4 mt-5">
              <div class="d-flex align-item-center gap-2">
                  <i class="bx bxl-instagram fs-1 header-skill fw-bold mb-5" ></i></h2>
                  <p class="text-secondary fs-7 mb-0 ">Instagram <br>Link</p>
              </div>
              <div class="d-flex align-item-center gap-2">
                  <i class="bx bxl-twitter fs-1 header-skill fw-bold mb-5" ></i></h2>
                  <p class="text-secondary fs-7 mb-0 ">Twitter<br>Link</p>
              </div>
              <div class="d-flex align-item-center gap-2">
                  <i class="bx bxl-facebook fs-1 header-skill fw-bold mb-5" ></i></h2>
                  <p class="text-secondary fs-7 mb-0 ">Facebook<br>Link</p>
              </div>
          </div>
        </div>
        <div class="col-md-5">
            <img src="images/image5.png" class="header-img" alt=" " />
        </div>        
      </div>
    </div>
  </section>




    <script src="vendors/boostrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>