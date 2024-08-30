<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Index - Gp Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/dist/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/vendor/glightbox/dist/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/clients/logo-cilukba.png') }}" alt="" />
                <!-- <h1 class="sitename">GP</h1> -->
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/majalah">Majalah</a></li>
                    <li><a href="/about">Tentang Kami</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <a class="btn btn-header" href="/#subscribe">Subscribe</a>
        </div>
    </header>

    <main class="main">
        @yield('content');
    </main>

    <footer id="footer" class="footer dark-background">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="" class="logo d-flex align-items-center">
                            <img src="{{ asset('assets/img/clients/logo-cilukba.png') }}" alt="" />
                        </a>
                        <div class="footer-contact pt-3">
                            <p>PT. Smart Media Prima</p>
                            <p>
                                Jalan Tentara Pelajar RT 2/11 Jetak, Bolon, Kec. Colomadu,
                                Kota Surakarta, Jawa Tengah 57178
                            </p>
                            <p class="mt-3">
                                <strong>Phone:</strong> <span>+62 821 3692 9111</span>
                            </p>
                            <p>
                                <strong>Email:</strong> <span>supp.mediaprima@gmail.com</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Daftar Menu</h4>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#about">Tentang Kami</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="/majalah">Daftar Majalah</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#promo">Flash Sale</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Bergabung</h4>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Agen</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Paket Tahunan</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Paket Semester</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-12 footer-contact">
                        <h4>Temukan Kami</h4>
                        <div class="social-links d-flex my-2 align-items-center">
                            <a href="https://www.facebook.com/majalahcilukba"><i class="bi bi-facebook"></i></a>
                            <span>Majalah Cilukba</span>
                        </div>
                        <div class="social-links d-flex my-2 align-items-center">
                            <a href="https://www.instagram.com/majalah.cilukba"><i class="bi bi-instagram"></i></a>
                            <span>@majalahcilukba</span>
                        </div>
                        <div class="social-links d-flex my-2 align-items-center">
                            <a href="https://www.youtube.com/@MajalahCilukba"><i class="bi bi-youtube"></i></a>
                            <span>Cilukba</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container text-center">
                <p>
                    &copy;<span> Copyright</span>
                    <strong class="px-1 sitename">PT. Smart Media Prima</strong>
                    <span>All Rights Reserved</span>
                </p>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>
</body>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/@srexi/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/dist/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/wow.js/dist/wow.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/dist/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Other JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</html>
