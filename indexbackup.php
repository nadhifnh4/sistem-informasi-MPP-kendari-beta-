<!DOCTYPE html>
<html lang="en">

<?php
  include "koneksi.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>MPP Kota Kendari</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/mppblackmini.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->


    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index.html"><img src="./img/core-img/mppmini.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="index.php#main">Beranda</a></li>
                                    <li><a href="index.php#news">Berita</a></li>
                                    <li><a href="index.php#service">Layanan</a>
                                    <li><a href="index.php#tentang">Profil</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php#sejarah">- Sejarah</a></li>
                                            <li><a href="index.php#vis">- Visi & Misi</a></li>
                                            <li><a href="index.php#ttg">- Tentang</a></li>
                                            <li><a href="index.php#fcs">- Fasilitas</a></li>
                                            <li><a href="index.php#member">- Anggota kami</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php#galeri">Galeri</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php#galeri">- Gambar</a></li>
                                            <li><a href="index.php#vid">- Video</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php#contact">Hubungi Kami</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php#contact">Kontak</a></li>
                                            <li><a href="index.php#qna">FAQ</a></li>
                                        </ul>
                                    </li>
                                         <!-- Search Icon -->
                                </ul>
                            </div>
                            <!-- Nav End -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <div id="main">
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/mppselasar.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text text-justify">
                                <h2 data-animation="bounceInDown" data-delay="900ms" style="font-size:40px"> SELAMAT DATANG DI <br> MAL PELAYANAN PUBLIK <br> KOTA KENDARI</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/mppselasar.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text text-justify">
                                <h2 data-animation="bounceInDown" data-delay="900ms" style="font-size:40px"> SELAMAT DATANG DI <br> MAL PELAYANAN PUBLIK <br> KOTA KENDARI</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </div>
    <!-- Welcome Area End -->

    <div id="inst">
        <?php
            include "instansi.php";
        ?>  

    </div>

    <div id="news">
        <?php
            include "news.php";
        ?>  

    </div>
    <div id="service">
        <?php
            include "layanan.php";
        ?>  
    </div>  

      
      
    <div id="tentang">
        <?php
            include "about.php";
        ?>  
    </div>

    <div id="vis">
        <?php
            include "vision.php";
        ?>
    </div>

    <div id="ttg">
        <?php
            include "tentang.php";
        ?>
    </div>

    <div id="fcs">
        <?php
            include "facility.php";
        ?>
    </div>




    <div id="member">
        <?php

            include "leader.php";
            include "member.php";
        ?>  

    </div>

    <div id="galeri">
        <?php

            include "gallery.php";
        ?>  

    </div>

    <div id="vid">
        <?php

            include "galvid.php";
        ?>  

    </div>





 <div id="contact">
        <?php
            include "contact.php";
        ?>  

  </div>


  <div id="qna">
        <?php
            include "qna.php";
        ?>  
  </div>

    <!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content d-flex align-items-center justify-content-between">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Mall Pelayanan Publik Kota Kendari
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="#"><img src="img/core-img/mppblackmini.png" alt=""></a>
                        </div>
                        <!-- Social Info -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/alime.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>