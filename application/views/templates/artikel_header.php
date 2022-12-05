
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS File - Obat -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Vendor CSS Files - Artikel -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/artikel/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/artikel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/artikel/css/ticker-style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/artikel/css/flaticon.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/artikel/css/slicknav.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/artikel/css/animate.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/artikel/css/magnific-popup.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/artikel/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/artikel/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/artikel/css/slick.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/artikel/css/nice-select.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/artikel/css/style_.css">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/obat-style.css">
</head>
<body>


  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:cs.akusehat@gmail.com">cs.akusehat@gmail.com</a>
        <i class="bi bi-phone"></i> +62 812 3456 789
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="https://www.linkedin.com/in/arif-supriyanto-028baa179?original_referer=" class="twitter" target="_blank"><i class="bi bi-linkedin"></i></a>
        <a href="https://facebook.com/asepnr20" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/anr20_" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="#" class="tiktok" target="_blank"><i class="bi bi-tiktok"></i></a>
      </div>
    </div>
  </div>
  <!-- ======= End Top Bar ======= -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- logo brand -->
      <a href="<?= base_url('user') ?>" class="logo me-auto"><img src="<?= base_url() ?>assets/img/logo.png" alt="+Aku Sehat" class="img-fluid"></a>

      <!-- .navbar -->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="<?= base_url('user') ?>#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('user') ?>#services">Konsultasi</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('user/obat') ?>">Obat & Vitamin</a></li>
          <li><a class="nav-link scrollto active" href="<?= base_url('user/artikel') ?>">Artikel</a></li>
          <li class="dropdown"><a href=""><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="<?= base_url('user/team') ?>">Team</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url('user') ?>#map">Site Map</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url('user/kebijakan') ?>">Kebijakan & Privasi</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <!-- <a href="<?= base_url('user/login') ?>" class="login-btn"><span class="d-none d-md-inline"></span>Login</a> -->

    </div>
  </header>
  <!-- ======= End Header ======= -->
