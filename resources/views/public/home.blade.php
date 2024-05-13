<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kembangbelor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- icon web -->
  <link href="build/assets/img/logo.png" rel="icon">
  <link href="build/assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="build/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="build/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="build/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="build/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="build/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="build/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="build/assets/css/style.css" rel="stylesheet">

</head>

<body>

  @include('layouts\navbar')

  <!-- ======= Landingpage ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>Desa Kembangbelor</h1>
      <h2 class="text-center">Sebuah desa di kecamatan Pacet yang memiliki keindahan yang luar biasa dari berbagai bidang. Mulai dari fasilitas yang lengkap, penginapan dan banyak wisata yang sangat indah untuk dinikmati</h2>
      <a href="#about" class="btn-about">Jelajahi</a>
    </div>
  </section>
  <!-- End  Landingpage -->

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Selamat Datang Di kembangbelor</h2>
            <p>Sebuah desa di kecamatan Pacet yang memiliki keindahan yang luar biasa dari berbagai bidang. Mulai dari fasilitas yang lengkap, penginapan dan banyak wisata yang sangat indah untuk dinikmati</p>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div style="position: relative; padding-bottom: 45%; /* 3:4 aspect ratio */ height: 0; overflow: hidden; border-radius: 10px;">
                    <iframe src="https://www.youtube.com/embed/7YCwQmwOevM?si=BQuUkOzHd0mf7TyJ" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" title="YouTube video player" allowfullscreen></iframe>
                </div>
            </div>
          </div>
        </div>
      </section><!-- End About Section -->

      <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Sebuah desa di kecamatan Pacet yang memiliki keindahan yang luar biasa dari berbagai bidang. Mulai dari fasilitas yang lengkap, penginapan dan banyak wisata yang sangat indah untuk dinikmati</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bi bi-tree"></i>
              </div>
              <h4><a href="">Tempat Wisata</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bi bi-snow"></i>
              </div>
              <h4><a href="">Sejuk</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-orange">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bi bi-fire"></i>
              </div>
              <h4><a href="">Camping Ground</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= wisata Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Sebuah desa di kecamatan Pacet yang memiliki keindahan yang luar biasa dari berbagai bidang. Mulai dari fasilitas yang lengkap, penginapan dan banyak wisata yang sangat indah untuk dinikmati</p>
        </div>
        <div class="col-md-12 mb-4 d-flex justify-content-end">
          <a href="/wisata" class="lihat-selengkapnya-link">Lihat Selengkapnya</a>
      </div>
      
      <div class="row">
        <div class="col-md-4 mb-4"> 
            <a href="/wisata-detail" class="wisata-link">
                <div class="card wisata-card">
                    <img src="build/assets/img/wisata1.jpg" class="card-img-top wisata-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Klurak Eco Park</h5>
                        <p class="card-text">Sebuah tempat yang berada di alam yang memiliki kolam renang dengan suasana yang sejuk.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-4"> 
            <a href="/wisata-detail" class="wisata-link">
                <div class="card wisata-card">
                    <img src="build/assets/img/wisata2.jpg" class="card-img-top wisata-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Bernah De Vallei</h5>
                        <p class="card-text">Tempat yang cocok untuk melakukan kegiatan outdor bersama keluarga maupun teman terdekat.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-4"> 
            <a href="/wisata-detail" class="wisata-link">
                <div class="card wisata-card">
                    <img src="build/assets/img/wisata3.jpg" class="card-img-top wisata-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Bernah Camping Ground</h5>
                        <p class="card-text">Lokasi yang berada di tengah hutan menjadikan suasana yang cocok untuk mendirikan tenda dan membuat api unggun.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    
      </section>
        <!-- End  wisata section -->

            <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Sebuah desa di kecamatan Pacet yang memiliki keindahan yang luar biasa dari berbagai bidang. Mulai dari fasilitas yang lengkap, penginapan dan banyak wisata yang sangat indah untuk dinikmati</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="build/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="build/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="build/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="build/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="build/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kembangbelor</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="/about">Politeknik Negeri Jember</a> 2024
      </div>
    </div>
  </footer>
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="build/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="build/assets/vendor/aos/aos.js"></script>
  <script src="build/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="build/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="build/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="build/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="build/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="build/assets/vendor/php-email-form/validate.js"></script>

  <script src="build/assets/js/main.js"></script>

</body>

</html>