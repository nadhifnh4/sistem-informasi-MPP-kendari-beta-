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
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                            <li><a href="index.php#member">- Anggota kami</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php#galeri">Galeri</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php#galeri">- Gambar</a></li>
                                            <li><a href="index.php#vid">- Video</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php#kontak">Hubungi Kami</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php#qna">Saran</a></li>
											<li><a href="index.php#contact">Kontak</a></li>
                                        </ul>
                                    </li>
                                         <!-- Search Icon -->
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <?php

              include 'koneksi.php';
              $id=$_GET['id'];
                $perintah = "SELECT * FROM `instansi` WHERE idins='$id' ";
                $exec = mysqli_query($con, $perintah);
                $data = mysqli_fetch_array($exec)
            ?>
  <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area blog bg-img bg-overlay jarallax" style="background-image: url('login/admin/add/img/instansi/<?php echo "$data[picins]"; ?>');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title"><?=$data['namains'] ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Blog Details Area Start -->
    <div class="alime--blog-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
                        <p>
                            <?=$data['desins'] ?>        
                        </p>
                        untuk pendaftaran lebih lanjut, silahkan tekan  
                        <a href="<?php echo "$data[linkins]"; ?>"> di sini</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Area End -->

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