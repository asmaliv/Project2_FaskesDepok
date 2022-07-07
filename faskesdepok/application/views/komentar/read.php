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
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/komentar')?>">Komentar</a></li>
              <li class="breadcrumb-item disabled"><a href="<?php echo base_url('index.php/komentar/read')?>">Read</a></li>
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
          <h3 class="card-title">Read Komentar</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

          <table class="table table-striped">
            <tbody>
              <tr>
                <th>Tanggal</th><td><?=$komentar->tanggal?></td>
              </tr>
              <tr>
                <th>Deskripsi</th><td><?=$komentar->isi?></td>
              </tr>
              <tr>
                <th>User</th><td><?=$komentar->users_id?></td>
              </tr>
              <tr>
                <th>Faskes</th><td><?=$komentar->faskes_id?></td>
              </tr>
              <tr>
                <th>Nilai Rating</th><td><?=$komentar->nilai_rating_id?></td>
              </tr>
            </tbody>
          </table>
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