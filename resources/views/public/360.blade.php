<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kembangbelor</title>

  <!-- icon web -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  @include('layouts.navbar')
  @include('layouts.float-button')

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
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

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/klurak1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Klurak Eco Park</h4>
                <p>Klurak Eco Park</p>
                <div class="portfolio-links">
                  <a href="assets/img/klurak1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/bernah1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bernah De Vallei</h4>
                <p>Bernah De Vallei</p>
                <div class="portfolio-links">
                  <a href="assets/img/bernah1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/klurak2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Klurak Eco Park</h4>
                <p>Klurak Eco Park</p>
                <div class="portfolio-links">
                  <a href="assets/img/klurak2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/bernah2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bernah De Vallei</h4>
                <p>Bernah De Vallei</p>
                <div class="portfolio-links">
                  <a href="assets/img/bernah2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/klurak3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Klurak Eco Park</h4>
                <p>Klurak Eco Park</p>
                <div class="portfolio-links">
                  <a href="assets/img/klurak3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/bernah3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bernah De Vallei</h4>
                <p>Bernah De Vallei</p>
                <div class="portfolio-links">
                  <a href="assets/img/bernah3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/klurak4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Klurak Eco Park</h4>
                <p>Klurak Eco Park</p>
                <div class="portfolio-links">
                  <a href="assets/img/klurak4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/bernah4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bernah De Vallei</h4>
                <p>Bernah De Vallei</p>
                <div class="portfolio-links">
                  <a href="assets/img/bernah4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/klurak5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Klurak Eco Park</h4>
                <p>Klurak Eco Park</p>
                <div class="portfolio-links">
                  <a href="assets/img/klurak5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"></a>bi bi-fullscreen</div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/bernah5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bernah De Vallei</h4>
                <p>Bernah De Vallei</p>
                <div class="portfolio-links">
                  <a href="assets/img/bernah5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>