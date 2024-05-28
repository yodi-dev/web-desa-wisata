<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desa Wisata Bumi Arum</title>
    <meta content="desa wisata bumi arum" name="description">
    <meta content="desa wisata, bumi arum" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/logo.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="<?= base_url() ?>" class="logo"><img src="<?= base_url() ?>assets/img/logo.png" alt=""></a> -->
            <h1 class="me-auto" style="font-size:2.5em"><a href="">Bumi Arum</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="<?php if ($page == "home") echo 'active'; ?>" href="<?= base_url() ?>">BERANDA</a></li>
                    <li><a class="<?php if ($page == "galeri") echo 'active'; ?>" href="<?= base_url() ?>home/galeri">GALERI</a></li>
                    <li><a class="<?php if ($page == "destinasi") echo 'active'; ?>" href=" <?= base_url() ?>home/destinasi">DESTINASI</a></li>
                    <li><a class="<?php if ($page == "paket") echo 'active'; ?>" href="<?= base_url() ?>home/paket">PAKET WISATA</a></li>
                    <li><a class="<?php if ($page == "potensi") echo 'active'; ?>" href="<?= base_url() ?>home/potensi">POTENSI DESA</a></li>
                    <li><a class="<?php if ($page == "profil") echo 'active'; ?>" href="<?= base_url() ?>home/profil">PROFIL DESA</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                    <!-- <li><a href="contact.html">Contact</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <!-- <a href="courses.html" class="get-started-btn">Get Started</a> -->

        </div>
    </header><!-- End Header -->

    <?php
    if ($page) {
        echo view($page);
    }
    ?>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 footer-contact">
                        <h3>Desa Wisata Bumi Arum</h3>
                        <div class="col-lg-6 d-flex justify-content-beetwen">
                            <div class="col-lg-6">
                                <p>
                                    A108 Adam Street <br>
                                    New York, NY 535022<br>
                                    United States <br>
                                    <a href="<?= base_url() ?>auth">Login Admin</a><br>
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-2">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>2024</span></strong> - Desa Wisata Bumi Arum
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>