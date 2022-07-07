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
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/users')?>">Users</a></li>
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
          <h3 class="card-title">Kelola Data Users</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            
        <a class="btn-sm btn-primary" href="<?php echo base_url('index.php/users/insert')?>"><i class="fas fa-plus"></i></a>

        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="bg-teal">
              <tr>
                <th class="text-center" style="width: 0%;">No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Created at</th>
                <th>Last login</th>
                <th class="text-center" style="width: 0%;">Status</th>
                <th>Role</th>
                <th class="text-center" style="width: 0%;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $nomor=1;
                foreach($list_users as $users){
              ?>
              <tr>
                <td class="text-center"><?=$nomor?></td>
                <td><?=$users->username?></td>
                <td><?=$users->password?></td>
                <td><?=$users->email?></td>
                <td><?=$users->created_at?></td>
                <td><?=$users->last_login?></td>
                <td class="text-center"><?=$users->status?></td>
                <td ><?=$users->role?></td>
                <td class="text-center">
                  <div class="btn-group btn-group-sm">
                    <a href="<?php echo base_url('index.php/users/read?id='.$users->id)?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="<?php echo base_url('index.php/users/update?id='.$users->id)?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    <a href="<?php echo base_url('index.php/users/delete?id='.$users->id)?>" class="btn btn-danger" onclick="if(!confirm('Anda Yakin Akan Menghapus Users Ini?')) {return false}"><i class="fas fa-trash"></i></a>
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