  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Backend Menu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard')?>">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card  card-success card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title"><strong>Aplikasi Informasi Fasilitas Kesehatan Kota Depok</strong></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-light">
            <li class="list-group-item border-0">
              <a class="btn btn-success" href="<?php echo base_url('index.php/faskes')?>" role="button"><i class="nav-icon fas fa-clinic-medical"></i> Kelola Fasilitas Kesehatan</a>
            </li>
            <li class="list-group-item border-0">
            <a class="btn btn-success" href="<?php echo base_url('index.php/kecamatan')?>" role="button"><i class="nav-icon fas fa-map-marker"></i> Kelola Referensi Kecamatan</a>
            </li>
            <li class="list-group-item border-0">
            <a class="btn btn-success" href="<?php echo base_url('index.php/jenisfaskes')?>" role="button"><i class="nav-icon fas fa-notes-medical"></i> Kelola Referensi Jenis Fasilitas Kesehatan</a>
            </li>
            <li class="list-group-item border-0">
            <a class="btn btn-success" href="<?php echo base_url('index.php/users')?>" role="button"><i class="nav-icon fa fa-user"></i> Kelola User</a>
            </li>
            <li class="list-group-item border-0">
            <a class="btn btn-success" href="<?php echo base_url('index.php/komentar')?>" role="button"><i class="nav-icon fas fa-comments"></i> Kelola Komentar</a>
            </li>
          </ul>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

      <!-- Default box -->
      <div class="card  card-danger card-outline">
        <div class="card-header">
          <h3 class="card-title"><strong>Anggota Kelompok</strong></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <ol class="list-group list-group-light border-danger">
            <li class="list-group-item">
              <strong>Ja'far Shodiq Asmali - 0110121142</strong>
            </li>
            <li class="list-group-item">
              <strong>Ilham Maulana Hakim - 0110121331</strong>
            </li>
            <li class="list-group-item">
              <strong>Fauzan Aryadih - 0110121316</strong>
            </li>
            <li class="list-group-item">
              <strong>Aris Saparudin - 0110121124</strong>
            </li>
          </ol>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->