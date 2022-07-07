 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Project 2 | Faskes Depok</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" >
    <!-- Icon -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/line-icons.css')?>">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.css')?>">
    
    <!-- Animate -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
    <!-- Main Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>">

  </head>
  <body>
  
    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="<?php echo base_url('index.php/')?>" class="navbar-brand text-primary">FasKes Depok</a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#faskes">
                  Home
                </a>
              </li>
              <?php if($this->session->has_userdata('USERNAME')){ ?>
              <li class="nav-item">
                <a class="nav-link" href="#"><?php echo $this->session->userdata('USERNAME'); ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/login/logout')?>" onclick="if(!confirm('Anda Yakin Akan Log Out?')) {return false}">
                  Sign Out
                </a>
              </li>
              <?php }else{ ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/login')?>">
                  Login
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/register')?>">
                Sign Up
                </a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

    </header>
    <!-- Header Area wrapper End -->  

    <!-- Team Section Start -->
    <section id="faskes" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Daftar Fasilitas Kesehatan Kota Depok</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <?php foreach($list_faskes as $faskes){?>
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo base_url().'/dist/img/'.$faskes->foto1?>" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><strong><?=$faskes->nama?></strong></h3>
                  <p>Skor Rating  : <?=$faskes->skor_rating?></p>
                  <p>Alamat : <?=$faskes->alamat?></p>
                  <p>Deskripsi  : <?=$faskes->deskripsi?></p>
                  <p>Website  : <a href="<?=$faskes->website?>" target="_blank"><?=$faskes->website?></a></p>
                <?php if($this->session->has_userdata('ID')){ ?>
                  <a href="<?php echo base_url('index.php/home/insert?idfaskes='.$faskes->id)?>" class="btn btn-primary">Beri Nilai</a>
                <?php }else{ }?>
                </div>
              </div>
            </div>
            <?php } ?>
            <!-- Team Item Ends -->
          </div>
        </div>
      </div>
    </section>
    <!-- Team Section End -->

    <footer id="footer" class="footer-area section-padding">
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-content">
                <p> <a rel="nofollow" href="#" target="_blank">Project 2 Pemrograman Web</a> Faskes Depok</p>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </footer> 
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery-min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/wow.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nav.js')?>"></script>
    <script src="<?php echo base_url('assets/js/scrolling-nav.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js')?>"></script>  
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
    <script src="<?php echo base_url('assets/js/form-validator.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/contact-form-script.min.js')?>"></script>
      
  </body>
</html>
