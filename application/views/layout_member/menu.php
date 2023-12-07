<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/admin/dist/img/AdminLTELogo.png');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Member</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/admin/dist/img/user2-160x160.jpg');?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#"><?php echo $this->session->userdata('username') ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li clas="nav-item">
          <a href="<?php echo site_url('welcome/dashboard_member'); ?>" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>  
          <p>Dashboard</p>
          </a>
         </li>
         <li clas="nav-item">
          <a href="<?php echo site_url('CS'); ?>" class="nav-link">
          <i class="nav-icon fas fa-th"></i>  
          <p>Customer Service</p>
          </a>
         </li>
             <li clas="nav-item">

          <a href="<?php echo site_url('transaksi_member/').$this->session->userdata('id')   ?>" class="nav-link">

          <i class="nav-icon fas fa-money-bill-wave"></i>  
          <p>Pembayaran</p>
          </a>
         <li clas="nav-item">
          <a href="<?php echo site_url('welcome/logout'); ?>" class="nav-link">
          <i class="nav-icon fas fa-circle"></i>  
          <p>Logout</p>
          </a>
         </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
