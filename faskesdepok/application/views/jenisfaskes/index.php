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
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/jenisfaskes')?>">Jenis Faskes</a></li>
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
          <h3 class="card-title">Kelola Data Jenis Faskes</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            
        <div class="dropright">
          <a href="#" class="btn-sm btn-primary" data-toggle="dropdown" data-target="create-jenisfaskes"><i class="fas fa-plus"></i></a>
          <div class="dropdown-menu p-3" id="create-jenisfaskes">
            <?php echo form_open('jenisfaskes/create')?>
              <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                      <i class="nav-icon fas fa-notes-medical"></i>
                      </div>
                    </div> 
                    <input id="nama" name="nama" type="text" class="form-control">
                  </div>
                </div>
              </div> 
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="submit" type="submit" class="btn btn-primary">Create</button>
                </div>
              </div>
              <?php echo form_close()?>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="bg-teal">
              <tr>
                <th class="text-center" style="width: 0%;">No</th>
                <th>Nama</th>
                <th class="text-center" style="width: 0%;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $nomor=1;
                foreach($list_jenisfaskes as $jenisfaskes){
              ?>
              <tr>
                <td class="text-center"><?=$nomor?></td>
                <td><?=$jenisfaskes->nama?></td>
                <td class="text-center">
                  <div class="btn-group btn-group-sm">
                      <a href="#" class="btn btn-sm btn-success" data-toggle="dropdown" data-target="read-jenisfaskes"><i class="fas fa-eye"></i>
                        <ul class="dropdown-menu dropdown-menu-lg p-3" id="read-jenisfaskes">
                          <li class=""><strong>Id: <?=$jenisfaskes->id?></strong></li>
                          <li class=""><strong>Nama: <?=$jenisfaskes->nama?></strong></li>
                        </ul>
                      </a>
                      <a href="<?php echo base_url('index.php/jenisfaskes/update?id='.$jenisfaskes->id)?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    <a href="<?php echo base_url('index.php/jenisfaskes/delete?id='.$jenisfaskes->id)?>" class="btn btn-danger" onclick="if(!confirm('Anda Yakin Akan Menghapus Jenis Faskes Ini?')) {return false}"><i class="fas fa-trash"></i></a>
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