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
              <li class="breadcrumb-item disabled"><a href="<?php echo base_url('index.php/komentar/create')?>">Create</a></li>
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
          <h3 class="card-title">Create Komentar</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <?php echo form_open('komentar/create')?>
            <div class="form-group row">
              <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-address-card"></i>
                    </div>
                  </div> 
                  <input id="tanggal" name="tanggal" type="date" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="isi" class="col-4 col-form-label">Isi</label> 
              <div class="col-8">
                <textarea id="isi" name="isi" cols="40" rows="5" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="users_id" class="col-4 col-form-label">Users</label> 
              <div class="col-8">
                <select id="users_id" name="users_id" class="custom-select">
                <?php $value=1; foreach($list_users as $users){?>
                <option value="<?=$value?>"><?=$users->username?></option>
              <?php $value++; } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="faskes_id" class="col-4 col-form-label">Nama Faskes</label> 
              <div class="col-8">
                <select id="faskes_id" name="faskes_id" class="custom-select">
                <?php $value=1; foreach($list_faskes as $faskes){?>
                <option value="<?=$value?>"><?=$faskes->nama?></option>
              <?php $value++; } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-4">Nilai Rating</label> 
              <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="nilai_rating_id" id="nilai_rating_id_0" type="radio" class="custom-control-input" value="1"> 
                  <label for="nilai_rating_id_0" class="custom-control-label">Jelek</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="nilai_rating_id" id="nilai_rating_id_1" type="radio" class="custom-control-input" value="2"> 
                  <label for="nilai_rating_id_1" class="custom-control-label">Kurang Bagus</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="nilai_rating_id" id="nilai_rating_id_2" type="radio" class="custom-control-input" value="3"> 
                  <label for="nilai_rating_id_2" class="custom-control-label">Biasa Aja</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="nilai_rating_id" id="nilai_rating_id_3" type="radio" class="custom-control-input" value="4"> 
                  <label for="nilai_rating_id_3" class="custom-control-label">Bagus</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="nilai_rating_id" id="nilai_rating_id_4" type="radio" class="custom-control-input" value="5"> 
                  <label for="nilai_rating_id_4" class="custom-control-label">Sangat Bagus</label>
                </div>
              </div>
            </div> 
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            <?php echo form_close()?>
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