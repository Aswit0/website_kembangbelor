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


  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Tempat Wisata</h2>
        </div>
        <div class="col-md-12 mb-4 d-flex justify-content-end">
            <a href="/wisata" class="lihat-selengkapnya-link">Lihat Selengkapnya</a>
        </div>

        <div class="row">
            @foreach ($wisata as $row)
            <div class="col-md-4 mb-4">
                <a href="/wisata-detail" class="wisata-link">
                    <div class="card wisata-card">
                        <img src="{{ $row->imageUrl }}" class="card-img-top wisata-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->name }}</h5>
                            <p class="card-text">{{ $row->desc }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>


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

<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<script src="assets/js/main.js"></script>

</body>

</html>