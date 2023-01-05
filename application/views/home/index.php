<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Disdukcapil</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/home') ?>/img/favicon.png" rel="icon">
    <link href="<?php echo base_url('assets/home') ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/home') ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/home') ?>/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="<?php echo base_url('home') ?>" class="logo d-flex align-items-center">
                <img src="<?php echo base_url('assets/home') ?>/img/logo_pwk.png" alt="">
                <img src="<?php echo base_url('assets/home') ?>/img/logo_disduk.png" alt="">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="<?php echo base_url('auth') ?>">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Pengaduan Masyarakat</h1>
                    <h2 data-aos="fade-up">Dinas Kependudukan dan Pencatatan Sipil Kabupaten Purwakarta</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="<?php echo base_url('auth/register') ?>" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Daftar Akun</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?php echo base_url('assets/home') ?>/img/disdukcapil-purwakarta.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

            <header class="section-header">
                    <p>Jenis Pengaduan</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-card-checklist" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= $jumlahpengktp; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p>E-KTP</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-person-badge-fill" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= $jumlahpengakte; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p>AKTE Kelahiran</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= $jumlahpengkk; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Kartu Keluarga</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-motherboard-fill" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= $jumlahpenglain; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Lainnya</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact bg-light">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-12">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>Jl. Mr. Dr. Kusuma Atmaja No. 8, Nagri Tengah, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41114</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Kontak Kami</h3>
                                    <p>(0264) 200640<br>0877-7006-9688 (SMS Gateway)<br>0877-0076-9688 (WhatsApp Gateway)<br>0877-7006-9788 (Interaktif dengan Petugas)</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email</h3>
                                    <p>disdukcapil@purwakarta.go.id</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Buka</h3>
                                    <p>Senin - Jumat<br>8:00AM - 04:00PM</p>
                                    <h3>Tutup</h3>
                                    <p>Sabtu - Minggu</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container text-center">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="<?php echo base_url('assets/home') ?>/img/logo.png" alt="">
                            <span>Sosial Media</span>
                        </a>
                        <p>Dinas Kependudukan dan Pencatatan sipil Kabupaten Purwakarta</p>
                        <div class="social-links mt-3">
                            <a href="https://web.facebook.com/disdukpurwakarta" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/disdukcapil_pwk" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://twitter.com/Disdukcapil_PWK?t=bMDwTNJJIsoonJsLhp_bbA&s=08" class="instagram"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UC3JxnN4LPhOomDw8JsjwRRQ" class="youtube"><i class="bi bi-youtube"></i></a>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets/home') ?>/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets/home') ?>/js/main.js"></script>

</body>

</html>