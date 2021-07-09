<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Sanggar Tari Sangkuriang</title>
  <meta name="description" content="Sanggar Tari Sangkuriang">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
  <link rel="icon" href="<?= base_url('assets/'); ?>img/ci-icon.ico">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/fontawesome-all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/fontawesome5-overrides.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/Article-List.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/Brands.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/Navigation-with-Button.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/Projects-Clean.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/Simple-Slider.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/Team-Boxed.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/Team-Clean.css">
</head>

<body class="text-center">
  <nav class="navbar navbar-light navbar-expand bg-white text-center shadow d-inline-flex mb-4 topbar static-top" style="width: 1280px;height: 100px;background: var(--blue);">
    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
      <a href=""><img class="img-fluid" src="assets/img/logo%20sts%20transparan.png" style="height: 80px;"></a>
      <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="width: 600;">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a class="nav-link active" href="">Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= base_url('pendaftaran.php'); ?>"><br>Prosedur Pendaftaran<br><br></a></li>
              <li class="nav-item dropdown"><a class="dropdown-toggle nav-link visible" aria-expanded="false" data-toggle="dropdown" href="#">Menu Lain</a>
                <div class="dropdown-menu"><a class="dropdown-item" href="DataKelasTari.php">Kelas Tari</a><a class="dropdown-item" href="DataPengajar.html">Data Pengajar</a><a class="dropdown-item" href="#">Rencana Kegiatan</a></div>
              </li>
            </ul><span class="navbar-text actions"> </span>
          </div>
        </div>
      </nav>
      <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <div class="input-group-append"></div>
        </div>
      </form>
      <a class="btn btn-primary active btn-block text-white btn-user" role="button" style="width: 100px;margin-right: 10px;" href="<?= base_url('auth'); ?>">Login</a>
    </div>
  </nav>
  <div class="simple-slider">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="d-inline-flex flex-grow-1 swiper-slide" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;) center center / cover no-repeat;"><img class="d-inline-flex d-xl-flex flex-grow-1 align-self-center" src="assets/img/slides/s02.jpg"></div>
        <div class="swiper-slide" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;) center center / cover no-repeat;"></div>
        <div class="swiper-slide" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;) center center / cover no-repeat;"></div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
  <section class="article-list">
    <div class="container">
      <div class="intro">
        <h2 class="text-center">Pagelaran Seni Akbar 2021</h2>
        <p class="text-center"><br><br>Pagelaran Seni Sunda telah sukse dilaksanakan, dibawah naungan ....<br>read more...</p>
      </div>
      <div class="row articles">
        <div class="col-sm-6 col-md-4 item"><a href="#"></a><img class="img-fluid" src="assets/img/slides/s03.jpg">
          <h3 class="name">Cara Pendaftaran</h3>
          <p class="description">Mari bergabubg bersama kami</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
        </div>
        <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/slides/s02.jpg"></a>
          <h3 class="name">Pagelaran Seni Lingkung Seni Sunda</h3>
          <p class="description"><br>Pagelaran Seni Sunda telah sukse dilaksanakan, dibawah naungan ....<br><br></p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
        </div>
        <div class="col-sm-6 col-md-4 item"><a href="#"></a><img class="img-fluid d-inline-flex" src="assets/img/slides/s01.jpg">
          <h3 class="name">Pagelaran Seni&nbsp; di Bandung Independent School</h3>
          <p class="description">Undangan drama musikal di Bandung Independent School ...</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  <div class="text-center"></div>
  <footer class="bg-white sticky-footer">
    <section class="team-clean"></section>
    <section class="team-boxed"></section>
    <div class="container my-auto">
      <div class="text-center my-auto copyright"></div>
    </div>
  </footer>
  <script src="<?= base_url('assets/'); ?>/js/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/'); ?>/js/chart.min.js"></script>
  <script src="<?= base_url('assets/'); ?>/js/bs-init.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>/js/Simple-Slider.js"></script>
  <script src="<?= base_url('assets/'); ?>/js/theme.js"></script>
</body>

</html>