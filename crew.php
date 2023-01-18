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

    <section class="why-choose-us-area bg-gray section-padding-80-0 clearfix">
            <!-- Top Search Form Area -->


    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">

      <!-- Related News Area Start -->
    <div class="related-news-area">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Instansi Terkait</h2>
                    </div>
                </div>
            </div>

                <!-- Gallery Area Start -->
            <div class="alime-portfolio-area section-padding-80 clearfix">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Projects Menu -->
                            <div class="alime-projects-menu wow fadeInUp" data-wow-delay="100ms">
                                <div class="portfolio-menu text-center">
                                    <button class="btn active" data-filter="*">Semua</button>
                                    <button class="btn" data-filter=".kadis">Kepala Dinas</button>
                                    <button class="btn" data-filter=".sk">Sekretaris Dinas</button>
                                    <button class="btn" data-filter=".kb">Kepala Bidang</button>
                                    <button class="btn" data-filter=".jf">Jabatan Fungsional</button>
                                    <button class="btn" data-filter=".st">Staff</button>
                                    <button class="btn" data-filter=".fo">Front Office</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row alime-portfolio">
                        <?php
                        $perintah = "SELECT * FROM ourteam ";
                        $exec = mysqli_query($con, $perintah);
                        while ($data = mysqli_fetch_array($exec)){
                        ?>
                        <!-- Single Gallery Item -->
                        <div class="col-12 col-sm-6 col-lg-3 single_gallery_item <?php echo "$data[catcr]"; ?> mb-30 wow fadeInUp" data-wow-delay="700ms">
                            <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="100ms" >
                                <a href="crdetail.php?id=<?=$data['idteam']?>">
                                <center><img src="login/admin/add/img/team/<?=$data['tmpic']?>" alt="" ></center>
                                <div class="member-thumb">
                                   
                                </div>
                                <h5>
                                    <?php echo "$data[teamname]"; ?>
                                </h5>
                                <span>
                                    <strong><?php echo "$data[teamttl]"; ?></strong>
                                    <br>
                                    <?php echo "$data[nicr]"; ?>
                                    <br>
                                </span>
                                </a>
                            </div>
                        </div>

                      <?php
                            }
                         ?>  
                </div>
            </div>
         </div>
    <!-- Gallery Area End -->

            <div class="border-top mt-5"></div>
        </div>
    </div>
  
            </div>

            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">

                </div>
            </div>

    </div>
    <!-- Gallery Area End -->
    </section>

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