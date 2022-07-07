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
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/users')?>">Users</a></li>
              <li class="breadcrumb-item disabled"><a href="<?php echo base_url('index.php/users/read')?>">Read</a></li>
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
          <h3 class="card-title">Read Users</h3>

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
                    <th>Username</th><td><?=$users->username?></td>
                  </tr>
                  <tr>
                    <th>Password</th><td><?=$users->password?></td>
                  </tr>
                  <tr>
                    <th>Email</th><td><?=$users->email?></td>
                  </tr>
                  <tr>
                    <th>Dibuat Pada</th><td><?=$users->created_at?>
                  </tr>
                  <tr>
                    <th>Terakhir Login</th><td><?=$users->last_login?></td>
                  </tr>
                  <tr>
                    <th>Status</th><td><?=$users->status?></td>
                  </tr>
                  <tr>
                    <th>Role</th><td><?=$users->role?></td>
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