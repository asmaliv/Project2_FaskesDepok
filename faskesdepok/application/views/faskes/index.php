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
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/faskes')?>">Faskes</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card  card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Kelola Data Fasilitas Kesehatan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            
        <a class="btn-sm btn-primary" href="<?php echo base_url('index.php/faskes/insert')?>"><i class="fas fa-plus"></i></a>

        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="bg-teal">
              <tr>
                <th class="text-center" style="width: 0%;">No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Latlong</th>
                <th>Jenis Faskes</th>
                <th>Deskripsi</th>
                <th style="width: 0%;">Rating</th>
                <th>Kecamatan</th>
                <th class="text-center">Foto 1</th>
                <th class="text-center">Foto 2</th>
                <th class="text-center">Foto 3</th>
                <th>Website</th>
                <th class="text-center">Jumlah Dokter</th>
                <th class="text-center">Jumlah Pegawai</th>
                <th class="text-center" style="width: 0%;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $nomor=1;
                foreach($list_faskes as $faskes){
              ?>
              <tr>
                <td class="text-center"><?=$nomor?></td>
                <td><?=$faskes->nama?></td>
                <td><?=$faskes->alamat?></td>
                <td><?=$faskes->latlong?></td>
                <td><?=$faskes->jenis_faskes?></td>
                <td><?=$faskes->deskripsi?></td>
                <td class="text-center"><?=$faskes->skor_rating?></td>
                <td><?=$faskes->nama_kec?></td>
                <td class="text-center"><img src="<?php echo base_url().'/dist/img/'.$faskes->foto1?>" height="100" ></td>
                <td class="text-center"><img src="<?php echo base_url().'/dist/img/'.$faskes->foto2?>" height="100" ></td>
                <td class="text-center"><img src="<?php echo base_url().'/dist/img/'.$faskes->foto3?>" height="100" ></td>
                <td><?=$faskes->website?></td>
                <td class="text-center"><?=$faskes->jumlah_dokter?></td>
                <td class="text-center"><?=$faskes->jumlah_pegawai?></td>
                <td class="text-center">
                  <div class="btn-group btn-group">
                    <a href="<?php echo base_url('index.php/faskes/read?id='.$faskes->id)?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="<?php echo base_url('index.php/faskes/edit?id='.$faskes->id)?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    <a href="<?php echo base_url('index.php/faskes/delete?id='.$faskes->id)?>" class="btn btn-danger" onclick="if(!confirm('Anda Yakin Akan Menghapus Faskes Ini?')) {return false}"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              <?php $nomor++; } ?>
              </tr>
            </tbody>
          </table>
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