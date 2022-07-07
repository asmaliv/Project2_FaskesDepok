<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FasKes Depok | Comment</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css')?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?php echo base_url('index.php/')?>" class="h1 text-primary"><b>FasKes</b> Depok</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Tambah Komentar</p>
      <?php ?>
          <?php echo form_open('komentar/comment')?>
          <input type="hidden" name="users_id" value="<?php echo $this->session->userdata('ID')?>">
          <input type="hidden" name="faskes_id" value="<?php echo $this->input->get('idfaskes')?>">
  <div class="form-group row">
    <label for="skor_rating" class="col-4 col-form-label">Beri Rating</label> 
    <div class="col-8">
      <select id="skor_rating" name="nilai_rating_id" class="custom-select" required="required">
        <option value="5">Sangat Bagus</option>
        <option value="4">Bagus</option>
        <option value="3">Biasa Aja</option>
        <option value="2">Kurang Bagus</option>
        <option value="1">Jelek</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="isi" class="col-4 col-form-label">Komentar</label> 
    <div class="col-8">
      <textarea id="isi" name="isi" cols="40" rows="5" class="form-control" required="required"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/adminlte.min.js')?>"></script>
</body>
</html>
