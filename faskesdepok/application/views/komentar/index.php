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
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/komentar')?>">Komentar</a></li>
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
          <h3 class="card-title">Kelola Data Komentar</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            
        <a class="btn-sm btn-primary" href="<?php echo base_url('index.php/komentar/insert')?>"><i class="fas fa-plus"></i></a>

        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="bg-teal">
              <tr>
                <th class="text-center" style="width: 0%;">No</th>
                <th>Tanggal</th>
                <th>Komentar</th>
                <th>Nama User</th>
                <th>Nama Faskes</th>
                <th>Nilai Rating</th>
                <th class="text-center" style="width: 0%;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $nomor=1;
                foreach($list_komentar as $komentar){
              ?>
              <tr>
                <td class="text-center"><?=$nomor?></td>
                <td><?=$komentar->tanggal?></td>
                <td><?=$komentar->isi?></td>
                <td><?=$komentar->nama_users?></td>
                <td><?=$komentar->nama_faskes?></td>
                <td><?=$komentar->nama_rating?></td>
                <td class="text-center">
                  <div class="btn-group btn-group-sm">
                    <a href="<?php echo base_url('index.php/komentar/read?id='.$komentar->id)?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="<?php echo base_url('index.php/komentar/update?id='.$komentar->id)?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    <a href="<?php echo base_url('index.php/komentar/delete?id='.$komentar->id)?>" class="btn btn-danger" onclick="if(!confirm('Anda Yakin Akan Menghapus Komentar Ini?')) {return false}"><i class="fas fa-trash"></i></a>
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