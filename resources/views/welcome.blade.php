<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ParkirQyu</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">ParkirQyu.id</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#team">Team</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="cta-btn" href="{{ url('/admin') }}">Login</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/Loby.webp" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">Sistem Manajemen Parkir Kampus</h2>
        <p data-aos="fade-up" data-aos-delay="200">Solusi digital untuk pengelolaan area parkir di lingkungan kampus
          dengan fitur canggih</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="{{ url('/admin') }}"class="btn-get-started">Get Started</a>
          <a href="https://youtu.be/28-bwjuXDaY?si=RiQa7edPBZoxJUU1"
            class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
              Video</span></a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Mengapa Memilih Sistem Parkir Digital Kami?</h3>
            <img src="assets/img/tentang.avif" class="img-fluid rounded-4 mb-4" alt="">
            <p>Platform ini dirancang khusus untuk memenuhi kebutuhan pengelolaan parkir di lingkungan kampus. Dengan
              teknologi modern seperti QR Code scanner, RFID, dan integrasi IoT, kami membantu mengotomatisasi proses
              masuk-keluar kendaraan, menghitung tarif parkir secara akurat, serta melacak slot parkir yang tersedia</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Fitur Utama Sistem Parkir Kami
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Pendaftaran Kendaraan Otomatis</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Pembayaran Digital</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Monitoring Real-Time</span></li>
              </ul>

              <div class="position-relative mt-4">
                <img src="assets/img/video.png" class="img-fluid rounded-4" alt="">
                <a href="https://youtu.be/4B3foUstP1w?si=uWRSQ6kwy-vyiScA" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-building color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Gedung Terhubung Sistem</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-credit-card color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="18500" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>18.000+ Pembayaran Diproses</p>
              </div>
            </div>
          </div><!-- End Stats Item -->


          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-graph-up-arrow color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Data Terekam dengan Tepat</p>
              </div>
            </div>
          </div><!-- End Stats Item -->


          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-shield-lock color-purple flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Keamanan Aktif 24 Jam</p>
              </div>
            </div>
          </div><!-- End Stats Item -->


        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Fitur Utama Sistem Parkir Kampus:<br></p>
      </div><!-- End Section Title -->
      <!-- Features Section -->
      <section id="features" class="features section">

        <div class="container">

          <ul class="nav nav-tabs row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li class="nav-item col-4 text-center">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                <i class="bi bi-binoculars"></i>
                <h4 class="d-none d-lg-block">Masuk Kendaraan Otomatis</h4>
              </a>
            </li>

            <li class="nav-item col-4 text-center">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                <i class="bi bi-box-seam"></i>
                <h4 class="d-none d-lg-block">Keluar & Pembayaran Digital</h4>
              </a>
            </li>

            <li class="nav-item col-4 text-center">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                <i class="bi bi-brightness-high"></i>
                <h4 class="d-none d-lg-block">Monitoring Slot Parkir Real-Time</h4>
              </a>
            </li>
          </ul><!-- End Tab Nav -->


          <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

            <div class="tab-pane fade active show" id="features-tab-1">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                  <h3>Sistem masuk kendaraan cepat tanpa kartu atau tiket.</h3>
                  <p class="fst-italic">
                    Proses masuk parkir kini lebih mudah dan efisien.
                    Dengan teknologi pengenalan plat nomor otomatis, kendaraan langsung dikenali
                    tanpa harus berhenti lama atau mengambil tiket secara manual.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-all"></i>
                      <spab>Kendaraan langsung dikenali dengan kamera ANPR.</spab>
                    </li>
                    <li><i class="bi bi-check2-all"></i> <span> Tanpa kartu fisik, tanpa sentuhan.</span>.</li>
                    <li><i class="bi bi-check2-all"></i> <span>Akses otomatis tanpa antre, cocok untuk mobilitas tinggi.</span></li>
                  </ul>
                  <p>
                    Fitur ini mempersingkat waktu masuk dan meningkatkan keamanan. Sangat ideal untuk area parkir kampus, perkantoran, atau fasilitas umum dengan arus kendaraan yang padat.
                  </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="assets/img/masuk.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End Tab Content Item -->

            <div class="tab-pane fade" id="features-tab-2">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                  <h3>Bayar parkir lebih praktis dengan sistem cashless.</h3>
                  <p>
                    Tidak perlu lagi mencari uang tunai atau menunggu antrean. Proses pembayaran dilakukan secara digital
                    melalui berbagai metode seperti QRIS, e-wallet, atau aplikasi parkir terintegrasi.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-all"></i> <span>Pembayaran cepat via OVO, DANA, GoPay, atau kartu.</span></li>
                    <li><i class="bi bi-check2-all"></i> <span>Sistem membaca durasi parkir secara otomatis.</span></li>
                    <li><i class="bi bi-check2-all"></i> <span>Gerbang keluar terbuka setelah transaksi berhasil.</span></li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="assets/img/bayar.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End Tab Content Item -->

            <div class="tab-pane fade" id="features-tab-3">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                  <h3>Lihat slot kosong secara langsung, tanpa buang waktu.</h3>
                  <p>
                   Fitur ini memudahkan pengguna mengetahui ketersediaan parkir secara akurat. Slot yang tersedia akan tampil langsung di aplikasi atau monitor area parkir.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-all"></i> <span>Informasi slot tersedia ditampilkan real-time.</span></li>
                    <li><i class="bi bi-check2-all"></i> <span>Pantauan melalui aplikasi atau layar LED.</span></li>
                    <li><i class="bi bi-check2-all"></i> <span>Hemat waktu, langsung arahkan kendaraan ke area kosong.</span></li>
                  </ul>
                  <p class="fst-italic">
                    Monitoring ini membantu pengelola mengatur lalu lintas di area parkir, dan pengguna bisa langsung menemukan tempat tanpa harus berkeliling.
                  </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="assets/img/application.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End Tab Content Item -->
          </div>
        </div>
      </section><!-- /Features Section -->

      <!-- Testimonials Section -->
      <section id="testimonials" class="testimonials section dark-background">

        <img src="assets/img/testi.jpg" class="testimonials-bg" alt="">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Mahasiswa Manajemen</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>ParkirQyu.id benar-benar mempermudah aktivitas harian saya.
                      Tidak perlu ribet ambil karcis, semua otomatis dan praktis!</span><i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sarah Putri</h3>
                  <h4>Mahasiswa Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>EBayar parkirnya cepat banget, tinggal scan QR. Sangat cocok untuk saya yang selalu terburu-buru ke kelas.</span><i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Mahasiswa Akuntan</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Fitur monitoring slot parkir real-time-nya sangat membantu. Saya jadi tidak perlu berkeliling cari tempat kosong lagi.</span><i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Mahasiswa Hukum</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Awalnya ragu, tapi setelah pakai ParkirQyu.id, saya jadi lebih hemat waktu dan gak pernah telat kuliah lagi.</span><i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Mahasiswa Teknik Informatika</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Parkir jadi lebih tertata dan nyaman. Sistem otomatis ini sangat membantu di kampus yang ramai.</span><i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

      </section><!-- /Testimonials Section -->


      <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
              <a href="index.html" class="logo d-flex align-items-center">
                <span class="sitename">ParkirQyu</span>
              </a>
              <div class="footer-contact pt-3">
                <p>Jalan Lenteng Agung Raya</p>
                <p>Jakarta Selatan, No.20 RT.5/RW.1</p>
                <p class="mt-3"><strong>Phone:</strong> <span>+62 5589 55488 55</span></p>
                <p><strong>Email:</strong> <span>parkir@example.com</span></p>
              </div>
              <div class="social-links d-flex mt-4">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-12 footer-newsletter">
              <h4>Our Newsletter</h4>
              <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
              <form action="forms/newsletter.php" method="post" class="php-email-form">
                <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe">
                </div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your subscription request has been sent. Thank you!</div>
              </form>
            </div>

          </div>
        </div>

        <div class="container copyright text-center mt-4">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">ParkirQyu</strong> <span>All Rights Reserved</span></p>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">Kelompok 4</a> Distributed by <a
              href=“https://themewagon.com>STT-NF
          </div>
        </div>

      </footer>

      <!-- Scroll Top -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
          class="bi bi-arrow-up-short"></i></a>

      <!-- Preloader -->
      <div id="preloader"></div>

      <!-- Vendor JS Files -->
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

      <!-- Main JS File -->
      <script src="assets/js/main.js"></script>

</body>

</html>
