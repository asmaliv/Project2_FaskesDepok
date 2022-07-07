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
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/jenisfaskes')?>">Jenis Faskes</a></li>
                        <li class="breadcrumb-item disabled"><a href="<?php echo base_url('index.php/jenisfaskes/update?id='.$jenfaskes_update->id)?>">Update</a></li>
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
                <h3 class="card-title">Kelola Data Jenis Fasilitas Kesehatan</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">

                <?php $hidden = ['idedit'=>$jenfaskes_update->id]; ?>
                <?php echo form_open('jenisfaskes/create','',$hidden)?>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label> 
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="nav-icon fas fa-notes-medical"></i></div>
                                </div> 
                                <input id="nama" name="nama" type="text" class="form-control">
                            </div>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-sm btn-primary">Update</button>
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

