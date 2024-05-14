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

<style>
    
</style>
</head>

<body>

@include('layouts.navbar')

<main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>
        @include('layouts.accordion')

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.2835118383477!2d112.55627611105797!3d-7.652633592331763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78770c28200469%3A0x4d3ca4c81c8e5363!2sBernah%20De%20Vallei!5e0!3m2!1sid!2sid!4v1712490080946!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Belor, Kembangbelor, Kec. Pacet, Kab. Mojokerto, Jawa Timur 61374</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>officialbernahdevallei@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>No Telepon:</h4>
                <p>+62 813 1144 8049</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="insertData" method="post" enctype="multipart/form-data" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <select class="form-select" name="tujuan" id="tujuan" required>
                    <option value="">Pilih Tujuan</option>
                    <option value="kritikSaran">Kritik dan Saran</option>
                    <option value="pertanyaan">Pertanyaan</option>
                </select>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
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
    </section><!-- End Contact Section -->

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