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
                $perintah = "SELECT * FROM `tabel_berita` WHERE id='$id' ";
                $exec = mysqli_query($con, $perintah);
                $data = mysqli_fetch_array($exec)
            ?>

 <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area blog bg-img bg-overlay jarallax" style="background-image: url('login/admin/add/img/berita/<?=$data['gambar']?>');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title"><?=$data['judul'] ?></h2>
                        <div class="post-meta">
                            <a href="#" class="post-date"><?=$data['tanggal'] ?></a>
                        </div>
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
                            <?=$data['isi'] ?>
                                
                            </p>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Area End -->



    <!-- Related News Area Start -->
    <div class="related-news-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Berita serupa</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Blog Area -->
                <?php
                  $perintah = "SELECT * FROM `tabel_berita` WHERE id NOT LIKE '$id%' ORDER BY id ";
                  $ex = mysqli_query($con, $perintah);
                  $no = 1;
                  while ($data = mysqli_fetch_array($ex)) {
                ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-post-area">
                        <!-- Post Thumbnail -->
                        <a href="#" class="post-thumbnail"><img src="login/admin/add/img/berita/<?=$data['gambar']?>" alt=""></a>
                        <!-- Post Conetent -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#"><?=$data['tanggal'] ?></a>
                            </div>
                            <a href="newsblog.php?id=<?=$data['id']?>" class="post-title"><?=$data['judul'] ?></a>
                        </div>
                    </div>

                </div>
                <?php
                    }
                  ?>
            </div>
            </div>

            <div class="border-top mt-5"></div>
        </div>
    <!-- Related News Area End -->


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