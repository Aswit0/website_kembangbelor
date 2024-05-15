<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kembangbelor</title>

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  @include('layouts.navbar')
  @include('layouts.float-button')
<section id="devent" class="devent">

  <div class="section-title mt-5">
    <h2>{{ $wisata->name }}</h2>
</div>
    <div class="container">
        <div class="row mt-1">
            <div class="col-md-6">
              
                <div class="card mb-3">
                    <img src="{{ $wisata->imageUrl }}" class="card-img-top" alt="Foto Wisata" style="object-fit: cover; height:25rem;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $wisata->name }}</h5>
                        <p class="card-text">{{ $wisata->desc }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Informasi Wisata</h5>
                        <p class="card-text">Lokasi: <strong>{{ $wisata->name }}</strong></p>
                        <p class="card-text">Jam Buka: <strong>{{ $wisata->jamBuka }} - {{ $wisata->jamTutup }}</strong></p>
                        <p class="card-text">Tiket Masuk: <strong>{{ $wisata->htm }}</strong></p>
                    <div>
                      <a href="{{ $wisata->maps }}" class="btn btn-primary d-block mb-2"><i class="bi bi-geo-alt"></i> Buka di Maps</a>
                      <a href="https://wa.me/{{ $wisata->whatsapp }}" class="btn btn-success mt-2 d-block"><i class="bi bi-whatsapp"></i> Kontak via WhatsApp</a>
                    </div>

                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Lokasi Wisata</h5>
                        <iframe src="{{ $wisata->maps }}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                            </div>
                </div>
            </div>
        </div>
    </div>
</section>

  @include('layouts.footer')
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>