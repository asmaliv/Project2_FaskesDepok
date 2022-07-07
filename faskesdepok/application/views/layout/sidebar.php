  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('index.php/dashboard')?>" class="brand-link">
      <img src="<?php echo base_url('dist/img/logo.jpeg')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FasKes Depok</span>
    </a>  

    <!-- Sidebar -->
    <div class="sidebar main-sidebar-custom sidebar-dark-primary elevation-4">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/faskes')?>" class="nav-link">
              <i class="nav-icon fas fa-clinic-medical"></i>
              <p>
                Kelola FasKes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/kecamatan')?>" class="nav-link">
            <i class="nav-icon fas fa-map-marker"></i>
              <p>
                Kelola Kecamatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/jenisfaskes')?>" class="nav-link">
            <i class="nav-icon fas fa-notes-medical"></i>
              <p>
                Kelola Jenis FasKes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/users')?>" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
              <p>
                Kelola Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/komentar')?>" class="nav-link">
            <i class="nav-icon fas fa-comments"></i>
              <p>
                Kelola Komentar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>