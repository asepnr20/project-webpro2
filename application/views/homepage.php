
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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Konsultasi</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('user/obat') ?>">Obat & Vitamin</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('user/artikel') ?>">Artikel</a></li>
          <li class="dropdown"><a href=""><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="<?= base_url('user/team') ?>">Team</a></li>
              <li><a class="nav-link scrollto" href="#map">Site Map</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url('user/kebijakan') ?>">Kebijakan & Privasi</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <a href="<?= base_url('user/login') ?>" class="login-btn"><span class="d-none d-md-inline"></span>Login</a>

    </div>
  </header>
  <!-- ======= End Header ======= -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Aku Sehat</h1>
      <h2>Pengen sehat? Di Aku Sehat aja...</h2>
      <a href="#services" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  <!-- ======= End Hero ======= -->


  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Kenapa pilih<br>Aku Sehat?</h3>
              <p>
                <br>
                &mdash; Pelayanan kesehatan digital yang memberikan layanan kesehatan
                tanpa batasan wilayah dan dapat dijangkau oleh semua masyarakat. <br>
                &mdash; Bekerjasama dengan dokter yang berlisensi, serta turut membantu memberantas Covid-19.
                <br>
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="pic">
                    <img src="<?= base_url() ?>assets/img/content1.png" alt="Konsultasi" class="img-fluid">
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="pic">
                    <img src="<?= base_url() ?>assets/img/content2.png" alt="Obat" class="img-fluid">
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="pic">
                    <img src="<?= base_url() ?>assets/img/content3.png" alt="Artikel" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- ======= End Why Us Section ======= -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2>Konsultasi</h2>
          <p>Layanan telemedisin yang siap siaga untuk bantu kamu hidup lebih sehat.</p>
        </div>

        <!-- Kesehatan Mental -->
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4><a href="">Kesehatan Mental</a></h4>
              <p>Kesehatan mental berpengaruh terhadap bagaimana seseorang berpikir, merasakan, bertindak, membuat keputusan, dan berinteraksi dengan orang lain.</p>
            </div>
          </div>

          <!-- Umum -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hand-holding-medical"></i></div>
              <h4><a href="">Umum</a></h4>
              <p>Pencegahan untuk menghentikan berkembangnya berbagai macam penyakit bagi pasien yang memiliki faktor resiko.</p>
            </div>
          </div>

          <!-- Tes HIV -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-viruses"></i></div>
              <h4><a href="">Tes HIV</a></h4>
              <p>HIV (human immunodeficiency virus) sendiri adalah virus yang menyerang dan menghancurkan sel-sel dalam sistem kekebalan tubuh. Bertujuan untuk menunjukkan jika seseorang terinfeksi HIV atau tidak.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= End Services Section ======= -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="<?= base_url() ?>assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="<?= base_url() ?>assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="<?= base_url() ?>assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="<?= base_url() ?>assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="<?= base_url() ?>assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- ======= End Testimonials Section ======= -->

    <!-- ======= Map Section ======= -->
    <section id="map" class="map">
      <div class="container">

        <div class="section-title">
          <h2>Site Map</h2>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=UBSI%20Fatmawati&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Universitas Bina Sarana Informatika Fatmawati</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>cs.akusehat@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 812 3456 789</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>
    <!-- ======= End Map Section ======= -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy;<strong><span><a href="<?= base_url('user') ?>">Aku Sehat</a></span></strong>, 2022. All Rights Reserved
          </div>
          <div class="credits">
            Made with ❤️
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="tiktok"><i class="bx bxl-tiktok"></i></a>
        </div>
      </div>
    </footer>
    <!-- ======= End Footer ======= -->

    <!-- ======= Preloader ======= -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- ======= End Preloader ======= -->

  </main>
