<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project 2 | FasKes Depok</title>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Plus&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css')?>">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('index.php/')?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link disabled">Contact Us</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="<?php echo base_url('dist/img/avatar.png')?>" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">
            <?php
              if($this->session->has_userdata('USERNAME')){
                echo $this->session->userdata('USERNAME');
              }
            ?>
          </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-teal">
            <img src="<?php echo base_url('dist/img/avatar.png')?>" class="img-circle elevation-2" alt="User Image">

            <p>
              <?php
                if($this->session->has_userdata('USERNAME')){
                  echo $this->session->userdata('USERNAME');
                  echo ' - '.$this->session->userdata('ROLE');
                }
              ?>
              <small>Member since 
              <?php
                if($this->session->has_userdata('USERNAME')){
                  echo $this->session->userdata('CREATED_AT');
                }
              ?>
              </small>
            </p>
          </li>
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat disabled">Profile</a>
            <a href="<?php echo base_url('index.php/login/logout')?>" class="btn btn-default btn-flat float-right"  onclick="if(!confirm('Anda Yakin Akan Log Out?')) {return false}">Sign out</a>
          </li>
        </ul>
    </ul>
  </nav>
  <!-- /.navbar -->