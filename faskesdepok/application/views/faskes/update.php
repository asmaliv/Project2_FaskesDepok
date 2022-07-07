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
              <li class="breadcrumb-item disabled"><a href="<?php echo base_url('index.php/faskes/update')?>">Update</a></li>
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
          <h3 class="card-title">Update Faskes</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <?php $hidden = ['idedit'=>$faskes_update->id]; ?>
        <?php echo form_open_multipart('faskes/update','',$hidden)?>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Faskes</label> 
            <div class="col-8">
              <input id="nama" name="nama" type="text" value="<?=$faskes_update->nama?>" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">alamat</label> 
            <div class="col-8">
              <input id="alamat" name="alamat" type="text" value="<?=$faskes_update->alamat?>" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="latlong" class="col-4 col-form-label">Latlong</label> 
            <div class="col-8">
              <input id="latlong" name="latlong" type="text" value="<?=$faskes_update->latlong?>" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="jenis_id" class="col-4 col-form-label">Jenis Faskes</label> 
            <div class="col-8">
              <select id="jenis_id" name="jenis_id" value="<?=$faskes_update->jenis_id?>" class="custom-select">
              <?php $value=1; foreach($list_jenisfaskes as $jenisfaskes){?>
                <option value="<?=$value?>"><?=$jenisfaskes->nama?></option>
              <?php $value++; } ?>
              </select>
            </div>
          </div> 
          <div class="form-group row">
            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
            <div class="col-8">
              <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="skor_rating" class="col-4 col-form-label">Skor Rating</label> 
            <div class="col-8">
              <input id="skor_rating" name="skor_rating" value="<?=$faskes_update->skor_rating?>" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="foto1" class="col-4 col-form-label">Foto 1</label> 
            <div class="col-8">
            <input id="foto1" class="form-control" type="file" name="userfile[]" size="20" multiple required>
            </div>
          </div>
          <div class="form-group row">
            <label for="foto2" class="col-4 col-form-label">Foto 2</label> 
            <div class="col-8">
            <input id="foto2" class="form-control" type="file" name="userfile[]" size="20" multiple required>
            </div>
          </div>
          <div class="form-group row">
            <label for="foto3" class="col-4 col-form-label">Foto 3</label> 
            <div class="col-8">
            <input id="foto3" class="form-control" type="file" name="userfile[]" size="20" multiple required>
            </div>
          </div>
          <div class="form-group row">
            <label for="kecamatan_id" class="col-4 col-form-label">Kecamatan</label> 
            <div class="col-8">
              <select id="kecamatan_id" name="kecamatan_id" value="<?=$faskes_update->kecamatan_id?>"  class="custom-select">
              <?php $value=1; foreach($list_kecamatan as $kecamatan){?>
                <option value="<?=$value?>"><?=$kecamatan->nama?></option>
              <?php $value++; } ?>
                </select>
            </div>
          </div> 
          <div class="form-group row">
            <label for="website" class="col-4 col-form-label">Website Faskes</label> 
            <div class="col-8">
              <input id="website" name="website" type="text" value="<?=$faskes_update->website?>" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah_dokter" class="col-4 col-form-label">Jumlah Dokter</label> 
            <div class="col-8">
              <input id="jumlah_dokter" name="jumlah_dokter" type="text" value="<?=$faskes_update->jumlah_dokter?>" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah_pegawai" class="col-4 col-form-label">Jumlah Pegawai</label> 
            <div class="col-8">
              <input id="jumlah_pegawai" name="jumlah_pegawai" type="text" value="<?=$faskes_update->jumlah_pegawai?>" class="form-control">
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