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

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>360</h2>
          <p>Sebuah desa di kecamatan Pacet yang memiliki keindahan yang luar biasa dari berbagai bidang. Mulai dari fasilitas yang lengkap, penginapan dan banyak wisata yang sangat indah untuk dinikmati</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Bernah De Vallei</li>
              <li data-filter=".filter-card">Klurak Eco Park</li>
              <!-- <li data-filter=".filter-web">Web</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="build/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="build/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-fullscreen"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="build/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="build/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-fullscreen"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="build/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="build/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bi bi-fullscreen"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="build/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="build/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bi bi-fullscreen"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="build/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="build/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bi bi-fullscreen"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="build/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="build/assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-fullscreen"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="build/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="build/assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bi bi-fullscreen"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="build/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="build/assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bi bi-fullscreen"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="build/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="build/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-fullscreen"></i></a>
bi bi-fullscreen                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

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

  <!-- Vendor JS Files -->
  <script src="build/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="build/assets/vendor/aos/aos.js"></script>
  <script src="build/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="build/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="build/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="build/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="build/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="build/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="build/assets/js/main.js"></script>

</body>

</html>