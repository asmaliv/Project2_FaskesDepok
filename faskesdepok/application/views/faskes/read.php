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
              <li class="breadcrumb-item"><a href="<?php echo base_url('')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/faskes')?>">Faskes</a></li>
              <li class="breadcrumb-item disabled"><a href="<?php echo base_url('index.php/faskes/read')?>">Read</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card  card-success card-outline">
        <div class="card-header">
          <h3 class="card-title">Read Faskes</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="row mb-2">
            <div class="col-sm-8">
              <table class="table table-striped">
                <tbody>
                  <tr><td>Nama Faskes</td><td><?=$faskes->nama?></td></tr>
                  <tr><td>Alamat</td><td><?=$faskes->alamat?></td></tr>
                  <tr><td>Latlong</td><td><?=$faskes->latlong?></td></tr>
                  <tr><td>Jenis Faskes</td><td><?=$faskes->jenis_id?></td></tr>
                  <tr><td>Deskripsi</td><td><?=$faskes->deskripsi?></td></tr>
                  <tr><td>Skor Rating</td><td><?=$faskes->skor_rating?></td></tr>
                  <tr><td>Kecamatan</td><td><?=$faskes->kecamatan_id?></td></tr>
                  <tr><td>Website</td><td><?=$faskes->website?></td></tr>
                  <tr><td>Jumlah Dokter</td><td><?=$faskes->jumlah_dokter?></td></tr>
                  <tr><td>jumlah pegawai</td><td><?=$faskes->jumlah_pegawai?></td></tr>
                  </tbody>
              </table>
            </div>
            <div class="col-sm-4">
            <?php
              $foto1 = base_url('/dist/img/'.$faskes->foto1);
              $foto2 = base_url('/dist/img/'.$faskes->foto2);
              $foto3 = base_url('/dist/img/'.$faskes->foto3);

              $array = get_headers($foto1);
              $string = $array[0];
              if(strpos($string,"200")){
                echo '<img src="'.$foto2.'" width="50%" class="img-fluid" alt="foto"/>';
                echo '<img src="'.$foto3.'" width="50%" class="img-fluid" alt="foto"/>';
                echo '<img src="'.$foto1.'" width="100%" class="img-fluid" alt="foto"/>';
              }else{
                echo '<img src="'.base_url('/dist/img/boxed-bg.jpg').'" class="img-fluid" alt="foto"/>';
              }
            ?>
            </div>
          </div>
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