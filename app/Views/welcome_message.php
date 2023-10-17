<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SPK - Penentuan Grade Biji Kopi Robusta</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Della">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" href="<?= base_url('assets'); ?>/home/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?= base_url('assets'); ?>/home/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/home/css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/home/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/home/css/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/home/css/responsive.css">
    <script src="<?= base_url('assets'); ?>/home/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header Area Start -->
    <header class="top">
        <div class="fixedArea">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 noPadding">
                    <div class="content-wrapper one">
                        <!-- Main Menu Start -->
                        <!-- Navbar-->
                        <header class="header">
                            <nav class="navbar navbar-default myNavBar">
                                <div class="container">

                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                <div class="row">
                                                    <div class="navbar-content">
                                                        <h2>
                                                            SPK
                                                        </h2>

                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <button type="button" class="navbar-toggle collapsed"
                                                    data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                                    aria-expanded="false">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right navBar">
                                            <li class="nav-item"><a href="#section0"
                                                    class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Home
                                                    <span class="sr-only">(current)</span></a></li>
                                            <li class="nav-item"><a href="Dashboard"
                                                    class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Hitung</a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </header>
                        <!-- Main Menu End -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    <!-- Section0 Area Start -->
    <section id="section0" class="slider-area">
        <div class="main-slider owl-theme owl-carousel">
            <!-- Start Slingle Slide -->
            <div class="single-slide item" style="background-image: url(<?= base_url('assets'); ?>/home/kopi.jpg)">


                <!-- <img src="img/slider/placehold.png"> -->

                <!-- Start Slider Content -->

                <div class="slider-content-area">
                    <div class="row">
                        <div class="slide-content-wrapper text-center">
                            <div class="slide-content">
                                <img class="classic" src="<?= base_url('assets'); ?>/home/img/logo/cemrebakerylogo.png">
                                <h3>Sistem Pendukung Keputusan </h3>
                                <h2>Penentuan Grade Biji Kopi Robusta</h2>
                                <p> Sebuah sistem pendukung keputusan berbasis web yang dapat digunakan bagi setiap
                                    orang yang ingin mengetahui grade biji kopi dari beberapa daerah. Sistem ini
                                    menggunakan logika Fuzzy Analytical Hierarchy Process (FAHP) dalam melakukan
                                    perhitungan penentuan grade biji kopi robusta.</p>

                                <a class="default-btn" href="<?= base_url('dashboard'); ?>">Hitung</a>
                                <img class="classic" src="<?= base_url('assets'); ?>/home/img/new/icon.png">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Slider Content -->
            </div>
            <!-- End Single Slide -->
            <!-- Start Slingle Slide -->

            <!-- <img src="img/slider/bakery.jpg"> -->
            <!-- Start Slider Content -->


            <!-- Start Slider Content -->
        </div>


        </div>
    </section>

    <footer class="footer-area">

        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Copyright © Della Hayu</a> 2023. All Right
                            Reserved By Della Hayu</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <script src="<?= base_url('assets'); ?>/home/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="<?= base_url('assets'); ?>/home/js/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets'); ?>/home/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets'); ?>/home/js/parallax.min.js"></script>
    <script src="<?= base_url('assets'); ?>/home/js/ajax-mail.js"></script>
    <script src="<?= base_url('assets'); ?>/home/js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets'); ?>/home/js/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url('assets'); ?>/home/js/main.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyIMWhs-crjT0yhctbRjfJFq75FlEhSzE&callback=initMap">
    </script>
</body>

</html>