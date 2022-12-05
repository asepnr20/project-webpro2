
  <div class="svg-container">
    <svg viewbox="0 0 800 400" class="svg">
      <path id="curve" fill="#1977cc" d="M 800 300 Q 400 350 0 300 L 0 0 L 800 0 L 800 300 Z"></path>
    </svg>
  </div>

  <header class="start">
    <h1>This is Our TEAM</h1>
    <h3>Here you are, scroll down.</h3>
    <a href="#team"><i class='fas fa-angle-double-down'></i></a>
  </header>

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title">
        <h2>Our Team</h2>
        <p>"Keberhasilan kami merupakan indikator terbaik dari pengembangan tim." &mdash; <i>Lewis Ergen</i></p>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="<?= base_url() ?>assets/img/team/arif.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Arif Supriyanto</h4>
              <span>Powerpoint Designer</span>
              <p><i>"Kamu nanyeaa? Copy paste aja solusinya.. "</i></p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="<?= base_url() ?>assets/img/team/elvian.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>M. Elvian Noer Fuad</h4>
              <span>Coding</span>
              <p>ما تَوَقَّفَ مَتْلَبُنْ أَنْتَ طَلِبُهُ بِرَبِكَ, وَلَا تَيَشَّرَ مَتْلَبُنْ أَنْتَ طَلِبُهُ بِنَفْسِكَ  </p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="<?= base_url() ?>assets/img/team/asep.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Asep Nur Rohman</h4>
              <span>Coding</span>
              <p><i>"Prestige won't to be make us rich" &mdash; nused.cloth</i></p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href="https://m.facebook.com/asepnr20/"><i class="ri-facebook-fill"></i></a>
                <a href="https://www.instagram.com/anr20_/"><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="<?= base_url() ?>assets/img/team/pam.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Luhur Pambudi</h4>
              <span>Paper Project</span>
              <p><i>"Cukup kopimu yang surut, rasa syukurmu jangan."</i></p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- ======= End Team Section ======= -->

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

  <script type="text/javascript">

    // JS File - Team
    (function() {
      // Variables
      var $curve = document.getElementById("curve");
      var last_known_scroll_position = 0;
      var defaultCurveValue = 350;
      var curveRate = 3;
      var ticking = false;
      var curveValue;

      // Handle the functionality
      function scrollEvent(scrollPos) {
        if (scrollPos >= 0 && scrollPos < defaultCurveValue) {
          curveValue = defaultCurveValue - parseFloat(scrollPos / curveRate);
          $curve.setAttribute(
            "d",
            "M 800 300 Q 400 " + curveValue + " 0 300 L 0 0 L 800 0 L 800 300 Z"
          );
        }
      }

      // Scroll Listener
      window.addEventListener("scroll", function(e) {
        last_known_scroll_position = window.scrollY;

        if (!ticking) {
          window.requestAnimationFrame(function() {
            scrollEvent(last_known_scroll_position);
            ticking = false;
          });
        }

        ticking = true;
      });
    })();

  </script>
