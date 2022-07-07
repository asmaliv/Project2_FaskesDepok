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
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/faskes/create')?>">Create</a></li>
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
          <h3 class="card-title">Create Faskes</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

        <?php echo form_open_multipart('faskes/upload')?>
        <input type="hidden" name="id" value="<?=$faskes_upfoto->id?>"/>
            <div class="form-group row">
                <label for="foto1" class="col-4 col-form-label">Foto 1</label> 
                <div class="col-8">
                    <input id="foto1" name="foto" type="file" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="foto2" class="col-4 col-form-label">Foto 2</label> 
                <div class="col-8">
                    <input id="foto2" name="foto" type="file" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="foto3" class="col-4 col-form-label">Foto 3</label> 
                <div class="col-8">
                    <input id="foto3" name="foto" type="file" class="form-control" required>
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