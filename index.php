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
                                            <li><a href="index.php#member">- Anggota kami</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php#galeri">Galeri</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php#gbr">- Gambar</a></li>
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

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel" id="main">
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
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown" data-delay="900ms" style="font-size:40px">Silahkan Kunjungi OPD mitra Kami di sini</h2>
                                <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                    <a href="index.php#ins" class="btn alime-btn mb-3 mb-sm-0 mr-4">Mulai</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->


     <!-- Instansi Start -->
     <div class="alime-portfolio-area section-padding-80 clearfix" id="ins">
        <?php
            include "koneksi.php";
        ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Instansi Terkait</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu wow fadeInUp" data-wow-delay="100ms">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">Semua</button>
                            <button class="btn" data-filter=".kementerian">Kementerian/lembaga</button>
                            <button class="btn" data-filter=".pemkot">Pemkot</button>
                            <button class="btn" data-filter=".pemprov">Pemprov</button>
                            <button class="btn" data-filter=".bumn">BUMN</button>
                            <button class="btn" data-filter=".bumd">BUMD</button>
                            <button class="btn" data-filter=".perbankan">Perbankan</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row alime-portfolio">
                <?php
                $perintah = "SELECT * FROM instansi LIMIT 10";
                $exec = mysqli_query($con, $perintah);
                while ($data = mysqli_fetch_array($exec)){
                ?>
                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item <?php echo "$data[catins]"; ?> mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="login/admin/add/img/instansi/<?php echo "$data[picins]"; ?>" alt="">
                        <div class="hover-content">
                            <a href="insdetail.php?id=<?=$data['idins']?>">+</a>
                        </div>
                    </div>
                </div>

              <?php
                    }
                 ?>  
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">
                <a href="insext.php" class="btn alime-btn btn-2 mt-15">View More</a>
           </div>
        </div>
    </div>
     <!-- Instansi End -->

     <!-- Berita Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix" id="news">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                    <h2>apa kabar hari ini?</h2>
                </div>
            </div>
        </div>
         <?php
          include "koneksi.php";
        ?>
        <div class="container-fluid">
            <!-- Related News Area Start -->
            <div class="related-news-area">
                <div class="container">
                    <div class="row">
                        <!-- Single Blog Area -->
                        <?php
                          $perintah = "SELECT * FROM `tabel_berita` ORDER BY tanggal DESC LIMIT 8";
                          $ex = mysqli_query($con, $perintah);
                          $no = 1;
                          while ($data = mysqli_fetch_array($ex)) {
                        ?>
                        <!-- Single Blog Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-post-area wow fadeInUpBig" data-wow-delay="400ms">
                                <!-- Post Thumbnail -->
                                <a href="#" class="post-thumbnail"><img src="login/admin/add/img/berita/<?=$data['gambar']?>" alt=""></a>
                                <!-- Post Conetent -->
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="newsblog.php?id=<?=$data['id']?>"><?=$data['tanggal'] ?></a>
                                    </div>
                                    <a href="newsblog.php?id=<?=$data['id']?>" class="post-title"><?=$data['judul'] ?></a>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                          ?>
                        <!-- Single Blog Area -->
                    </div>
                    <div class="row">
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="300ms">
                            <a href="newsext.php" class="btn alime-btn btn-2 mt-15">View More</a>
                        </div>
                    </div>
                    <div class="border-top mt-5"></div>
                </div>
            </div>     
        </div>
    </div>
     <!-- Berita End -->


     <!-- Service Start -->
    <section class="breadcrumb-area blog bg-img bg-overlay jarallax" style="background-image: url(img/mppservice.jpeg);">
        <div class="container h-100" id="service">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Layanan</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-choose-us-area bg-gray section-padding-80-0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Hasil Kerja Kami</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Why Choose Area -->
                   <?php
                    $perintah = "SELECT * FROM layanan ORDER BY idlyn LIMIT 9";
                    $exec = mysqli_query($con, $perintah);
                    while ($data = mysqli_fetch_array($exec)){
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <a href="<?php echo "$data[linklyn]"; ?>">
                        <h4><strong><?php echo "$data[namalyn]"; ?></strong></h4>
                        </a>
                    </div>
                </div>
                </a>
              <?php
                    }
                ?>

            </div>
            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">
                <a href="layext.php" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div>
        </div>
    </section>
     <!-- Service End -->


     <!-- tentang Start -->
    <section class="breadcrumb-area blog bg-img bg-overlay jarallax" style="background-image: url(img/mppservice.jpeg);">
        <div class="container h-100" id="tentang">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Tentang Kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="alime--blog-area section-padding-80" id= "sejarah">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms" >
                                <h2>Sejarah DPMPTSP Kota Kendari</h2>
                        </div>

                        <div class="section-heading text-justify wow fadeInUp" data-wow-delay="300ms">
                         
                        <p>
                            &emsp; Diawali dari instruksi Mendagri No. 25 Tahun 1998 tentang Pelayanan Perizinan Satu Atap di daerah, yang ditindak lanjuti oleh Instruksi Gubernur Sultra No. 02 Tahun 1999 tentang Pedoman Pembentukan Unit Pelayanan Sistem Satu Atap di lingkungan Pemerintah Daerah Tingkat II se Sulawesi Tenggara., maka pada tanggal 15 November 1999 diresmikanlah Unit Pelayanan Terpadu Sistem Satu Atap dan Satu Pintu Kota Kendari  dengan dasar hukun pembentukan melalui SK. Walikota Kendari Nomor 24 Tahun 2000 tentang Pembentukan Organisasi dan Tata kerja Unit Pelayanan Terpadu Sistem Satu Atap dan Satu Pintu Kota Kendari, dengan struktur organisasi dan tata kerja terdiri dari: Kepala unit, Loket Informasi, Loket Pembayaran, Petugas Penelitian Teknis,  dan Petugas Pengelolaan Administrasi. Kepala unit saat itu dijabat oleh Bapak Drs. Najamuddin dari Tahun 1999 - 2001.
                            <br>
                            &emsp; Pada Tahun 2001 Unit Pelayanan terpadu Sistem Satu Atap dan Satu Pintu ditingkatkan statusnya menjadi Kantor Pelayanan Perizinan berdasarkan Perda Nomor 1 
                            Tahun 2001 tentang pembentukan organisasi perangkat daerah, yang dijabat oleh Bapak Drs. K. Iskandar Zulkarnain sampai Tahun 2004, dengan struktur organisasi dan tata kerja terdiri dari: Kepala Kantor; Sub. Bagian Tata Usaha; Seksi Publikasi dan Pengaduan Masyarakat; Seksi Administrasi dan Penerbitan izin; dan Seksi pengujian Lapangan. Selanjutnya dalam kurun waktu tahun 2004 - 2008 Kepala Kantor Pelayanan Perizinan di jabat oleh Dra. Hj. Ferial Bunggasi, M.Si. Kemudian dalam tahun 2008 - April 2009 Kepala Kantor Pelayanan Perizinan di jabat oleh Dra. Hj. Asni Bonea. 
                            <br>
                            &emsp; Pada Tahun 2009 Kantor Pelayanan Perizinan ditingkatkan statusnya menjadi Badan Penyelenggara Pelayanan Perizinan Kota Kendari berdasarkan Perda Nomor 6 Tahun 2009 tentang pembentukan  organisasi dan Tata Kerja Lembaga Teknis Daerah Kota Kendari, sebagai kepala Badan saat itu adalah Dra. Hj. Ferial Bunggasi, M.Si., jabatan ini diemban sampai dengan 24 Juni 2011, selanjutnya  pada periode 24 Juni 2011 – 13 Agustus 2013 Kepala Badan dijabat oleh Drs. H. Abdul Madjid. Kemudian pada periode 13 Agustus 2013 dijabat oleh Yan Bela, SE. 
                            <br>
                            &emsp; Pada tanggal 31 Desember 2013 Badan Pelayanan Perizinan Kota Kendari berubah nama menjadi Badan Pelayanan Perizinan Terpadu Satu Pintu Dan Penanaman Modal Daerah Kota Kendari dan sebagai Kepala Badan dijabat oleh Yan Bela, SE dengan struktur organisasi dan tata kerja terdiri dari : Kepala Badan; Sekretaris (Subbagian Umum dan Kepegawaian; Subbagian perencanaan dan Evaluasi); Bidang Pelayanan dan Pengaduan Masyarakat (Subbidang Pelayanan dan Publikasi; Subbidang Pengaduan Masyarakat); Bidang Pengujian Teknis, Koordinasi dan Pengawasan (Subbidang Pelayanan dan Publikasi; subbidang Pengaduan Masyarakat); Kepala Bidang Perizinan dan Data (Kepala Sub Bidang Perizinan dan Non Izin; Kepala Sub Bidang Pengolahan Data dan Sistem Informasi); Kepala Bidang Penanaman Modal (Kepala Sub Bidang Investasi dan Promosi; Kepala Sub Bidang Kerjasama dan Pengendalian).
                            <br>
                            &emsp; Kemudian untuk lebih meningkatkan pelayanan kepada masyarakat sesuai dengan tujuan pembentukan PTSP yaitu untuk memberikan pelayanan perijinan yang 
                            cepat,mudah,praktis dan efisien maka pada tanggal 17 Oktober 2016 Badan Penyelenggara Pelayanan Perizinan Kota Kendari di tingkatkan statusnya menjadi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Kendari berdasarkan Perda Nomor 5 Tahun 2016 tentang Pembentukan Organisasi dan Susunan Perangkat Daerah Kota Kendari, dengan Kepala Dinas dijabat Bapak Yan Bela, SE. Jabatan ini diemban sampai dengan 27 Februari 2017. Berhubung bapak Yan Bela,SE memasuki usia pensiun maka pada periode 27 Februari 2017 – 5 September 2017 jabatan Kepala Dinas dilaksanakan oleh Pelaksana Tugas dalam hal ini diemban oleh Sekretaris Dinas PM&PTSP Kota Kendari yaitu Ridha Wahyuni Nappu, SE.,M.Si berdasarkan SK Walikota Nomor 378 Tahun 2017 tentang Penunjukan 
                            Pelaksana Tugas Kepala Organisasi Perangkat Daerah Lingkup Pemerintah Kota Kendari. 
                            <br>
                            &emsp; Kemudian pada tanggal 5 September 2017 Kepala Dinas dijabat oleh Sri Yusnita, ST.,MM. Berdasarkan SK Walikota Kendari Nomor 954 Tahun 2017 tentang Pengangkatan dalam Jabatan Pimpinan Tinggi Pratama Lingkup Pemerintah Kota Kendari. Dan saat ini Dinas Penanaman Modal dan PTSP Kota Kendari dipimpin oleh Hj. Satria Damayanti, SE., ME.
                        </p>
                        </div>
                        <div class="blog-details-text">
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms" >
                                <h2>Sejarah MPP</h2>
                        </div>

                        <div class="section-heading text-justify wow fadeInUp" data-wow-delay="300ms">
                         
                        <p>
                            &emsp;Pemerintah Kota Kendari terus berkomitmen dalam meningkatkan
                            pelayanan publik. Salah satunya dengan membuat terobosan penyelenggaraan
                            Mal Pelayanan Publik (MPP) di Kota Kendari. Inovasi pelayanan ini sebagai
                            salah satu solusi untuk mempermudah segala pelayanan yang dibutuhkan.
                            Dengan kata lain reformasi Administrasi di Kota Kendari harus segera
                            di jadi kan pilihan Pemerintah Kota Kendari untuk mewujudkan pelayanan publik
                            yang ber kualitas, pemerintah yang bersih, sehat dan berwibawa. Ketersediaan
                            pelayanan publik yang berkualitas merupakan salah satu instrumen yang
                            dapat meningkat kan kepercayaan masyarakat kepada pemerintah. Jumlah layanan 121 dengan 32 Instansi yang bergabung dalam Mal Pelayanan Publik (MPP) Kota Kendari. Luas keseluruhan lokasi Layanan MPP Kota Kendari ± 2.040 m2.
                            <br>
                           
                        </p>
                        </div>                       
                    </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- tentang End -->

     <!-- Vision Start -->
     <div class="alime--blog-area section-padding-80" id="vis">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms" >
                                <h2>VISI DAN MISI KAMI</h2>
                    </div>
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
                        <!-- Visi -->
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                                <h2>Visi</h2>
                        </div>
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>
                            &emsp; Terwujudnya pelayanan prima dan iklim investasi yang kondusif untuk mendorong pertumbuhan ekonomi daerah yang maju, mandiri dan berdaya saing.
                        </p>
                        </div>

                        <!-- Visi -->
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                                <h2>Misi</h2>
                        </div>
                        <div class="section-heading text-left wow fadeInUp" data-wow-delay="300ms">
                        <p>
                            Profesionalisme aparatur ;
                            <br>
                            Pengembangan kualitas pelayanan perizinan melalui pengembangan infrastruktur dan sistem teknologi informasi ;
                            <br>
                            Perumusan kebijakan investasi ;
                            <br>
                            Peningkatan informasi investasi yang akurat dan promosi investasi
                            <br>
                            Peningkatan pengawasan dan pengendalian pelayanan perizinan investasi
                        </p>
                        </div>                      
                       </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Vision End -->

     <!-- Tentang Kami Start -->
    <div class="alime--blog-area section-padding-80" id="ttg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                                <h2>TENTANG KAMI</h2>
                        </div>
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">

                        <!-- Visi -->
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                                <h2>MOTTO</h2>
                        </div>
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>
                            &emsp;QUICK AND EXCELLENT SERVICE
                        </p>
                        </div>

                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                                <h2>MAKLUMAT PELAYANAN</h2>
                        </div>
                        <div class="section-heading text-left wow fadeInUp" data-wow-delay="300ms">
                        <p>
                            &emsp;DENGAN INI, KAMI MENYATAKAN SANGGUP MENYELENGGARAKAN PELAYANAN SESUAI STANDAR PELAYANAN  YANG SUDAH DITETAPKAN. DAN APABILA KAMI MELANGGAR KAMI BERSEDIA MENERIMA SANKSI SESUAI KETENTUAN YANG BERLAKU
                        </p>
                        </div>

                        <!-- Visi -->
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                                <h2>JANJI PELAYANAN</h2>
                        </div>
                        <div class="section-heading text-left wow fadeInUp" data-wow-delay="300ms">
                        <p>
                            UNTUK MENINGKATKAN KINERJA PELAYANAN PERIZINAN DAN NON PERIZINAN DI DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU KOTA KENDARI MAKA DITETAPKAN JANJI LAYANAN SEBAGAI BERIKUT :
                            <br>
                            1.       MEMBERIKAN KEMUDAHAN PELAYANAN BAGI MASYARAKAT DAN PELAKU USAHA;
                            <br>
                            2.       MEMBERIKAN KEPASTIAN WAKTU, PROSEDUR DAN BIAYA;
                            <br>
                            3.       MEMBERIKAN PELAYANAN SEPENUH HATI;
                            <br>
                            4.       MEMBERIKAN KEMUDAHAN AKSES PROSES KEPADA SEMUA LAYANAN; DAN
                            <br>
                            5.       MELAKUKAN PERBAIKAN DAN PENGEMBANGAN KUALITAS PELAYANAN SETIAP WAKTU
                        </p>
                        </div>


                         <div class="my-5">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <img class="mb-10" src="img/core-img/labengki.jpg" alt="">
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <img class="mb-10" src="img/core-img/moramo.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <img class="mb-10" src="img/core-img/tugu-kdi.jpg" alt="">
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Tentang Kami End -->




    <!--Member Start -->
        <section class="our-team-area section-padding-80-50">
                <div class="container">
                    <div class="row" id="member">
                        <div class="col-12">
                            <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                                <h2>CIVITAS KAMI</h2>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <!-- Team Member Area -->
                    <?php
                        $perintah = "SELECT * FROM ourteam WHERE teamttl LIKE 'kepala dinas' ";
                        $exec = mysqli_query($con, $perintah);
                        while ($data = mysqli_fetch_array($exec)){
                    ?>
                                                        <div class="about-us-area section-padding-80-0 clearfix">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6">
                                        <div class="about-us-content mb-80">
                                            <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                                                <h2><?php echo "$data[teamttl]"; ?></h2>
                                            </div>
                                            <h3 class="wow fadeInUp" data-wow-delay="100ms"><?php echo "$data[teamname]"; ?></h3>
                                            <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                                            <p class="wow fadeInUp"  style="text-align:justify;" data-wow-delay="400ms">
                                                NIP&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp; &emsp; &ensp;: <?php echo "$data[nicr]"; ?>
                                                <br>
                                                TTL&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp; &emsp; &ensp;:  <?php echo "$data[tmbd]"; ?>
                                                <br>
                                                Agama&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &ensp; : <?php echo "$data[agamacr]"; ?>
                                                <br>
                                                Kelamin&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp; : <?php echo "$data[gend]"; ?>
                                                <br>
                                                gol&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; : <?php echo "$data[gol]"; ?>
                                                <br>
                                                Pendidikan Terakhir &ensp; &ensp; &nbsp; &nbsp; : <?php echo "$data[pdt]"; ?>
                                                <br>
                                                Masa Kerja &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &ensp; : <?php echo "$data[durat]"; ?>
                                                <br>
                                                Riwayat Diklat/Pelatihan &nbsp; : 
                                                <br>
                                                <?php echo "$data[tmdesc]"; ?>
                                            </p>
                                            
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="about-video-area mb-80 wow fadeInUp" data-wow-delay="100ms">
                                            <img src="login/admin/add/img/team/<?=$data['tmpic']?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>>
                    <?php
                        }
                    ?>
                    </div>
                </div>
        </section>
        <section class="our-team-area section-padding-80-50">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                                <h2>Our Team</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Team Member Area -->
                    <?php
                        $perintah = "SELECT * FROM ourteam WHERE teamttl NOT LIKE 'kepala dinas' ORDER BY idteam ASC";
                        $exec = mysqli_query($con, $perintah);
                        while ($data = mysqli_fetch_array($exec)){
                    ?>
                        <div class="col-md-6 col-xl-3">
                            <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="100ms">
                                <center><img src="login/admin/add/img/team/<?=$data['tmpic']?>" alt="" ></center>
                                <div class="member-thumb">
                                    <a href="crdetail.php?id=<?=$data['idteam']?>">
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
                <div class="row">
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">
                        <a href="crew.php" class="btn alime-btn btn-2 mt-15">View More</a>
                   </div>
                </div>
            </section>
    <!-- Member End -->


    <!--  Galeri Start -->
    <section class="breadcrumb-area blog bg-img bg-overlay jarallax" style="background-image: url(img/mppservice.jpeg);">
        <div class="container h-100" id="galeri">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Galeri</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="alime-portfolio-area section-padding-80 clearfix" id="gbr">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Galeri Foto</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row alime-portfolio">
                <?php
                $perintah = "SELECT * FROM ttgpic  ORDER BY tgtgg LIMIT 10";
                $exec = mysqli_query($con, $perintah);
                while ($data = mysqli_fetch_array($exec)){
                ?>
                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="login/admin/add/img/gambar/<?php echo "$data[gbrttg]"; ?>" alt="">
                         <div class="hover-content">
                            <a href="login/admin/add/img/gambar/<?php echo "$data[gbrttg]"; ?>" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

              <?php
                    }
                 ?>  
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">
                <a href="picext.php" class="btn alime-btn btn-2 mt-15">View More</a>
           </div>
        </div>
    </div>
    <!--  Galeri End -->



    <!-- Video  Start -->
    <section class="follow-area clearfix">
        <div class="container" id="vid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Galeri video</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row alime-portfolio">
                <?php
                $perintah = "SELECT * FROM tabel_video ORDER BY tglv DESC LIMIT 10";
                $exec = mysqli_query($con, $perintah);
                while ($data = mysqli_fetch_array($exec)){
                ?>
                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src= "<?php echo "$data[thmb]"; ?>"  alt="">
                        <div class="hover-content">
                            <a href="<?php echo "$data[vid]"; ?>" class="video-play-btn"> <i class="arrow_triangle-right"></i></a>
                        </div> 
                    </div>
                </div>

              <?php
                    }
                 ?>  
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">
                <a href="vidext.php" class="btn alime-btn btn-2 mt-15">View More</a>
           </div>
        </div>
    </div>
    <!-- Video End -->


    <!-- Contact  Start -->
    <section class="breadcrumb-area blog bg-img bg-overlay jarallax" style="background-image: url(img/mppselasar.jpeg);">
        <div class="container h-100" id="kontak">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Hubungi Kami</h2>
                        <div class="post-meta">
                            <a href="#">Facebook</a>
                            <a href="#"> Instagram</a>
                            <a href="#"> Youtube</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comment Area Start -->
    <div class="comment-area section-padding-80" id="qna">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <!-- Leave A Reply -->
                    <div class="alime-contact-form mt-50">
                        <h4 class="mb-30">Salurkan Saran, Aduan, dan Kritik anda disini!</h4>
                        <!-- Form -->
						<div class="form-group">
							<div class="row">
								<div class="col-12">
									<form action="" method="post">
										<label>Masukkan Nama Anda</label>
										<input type="text" name="nama" class="form-control mb-30" >
										<label>Masukkan No. HP/Telp</label>
										<input type="text" name="hp" class="form-control mb-30">
										<label>Masukkan Opsi Saran, Aduan, atau Kritik</label>
										<select class="form-control mb-30" name = "tipe">
											<option value = "saran">Saran</option>
											<option value = "aduan">Aduan</option>
											<option value = "kritik">Kritik</option>
										</select>
										<label>Masukkan Instansi yang ingin dituju</label>
										<select class="form-control mb-30" name = "instansi">
											<?php
												$perintah = "SELECT * FROM instansi ";
												$exec = mysqli_query($con, $perintah);
												while ($data = mysqli_fetch_array($exec)){
											?>
											<option value = <?php echo "$data[kodeins]"; ?>> <?php echo "$data[namains]"; ?></option>
											<?php
												}
											?> 
										</select>
										<label>Masukkan Jenis Layanan</label>
										<input type="text" name="servtype" class="form-control mb-30" >
										<label>Tulis Saran, Aduan, atau Kritik Anda</label>
										<textarea name="aduan" class="form-control mb-30"></textarea>
										<input type="submit" class="btn alime-btn btn-2 mt-15" value="Simpan" name="tombol" class="btn btn-primary">
										
									</form>
								</div>
								<?php 
										if (isset($_POST['tombol'])) {
										  $nama = $_POST['nama'];
										  $telp = $_POST['hp'];
										  $aduan = $_POST['tipe'];
										  $ins = $_POST['instansi'];
										  $lyn = $_POST['servtype'];
										  $isi = $_POST['aduan'];
										  $tgl = date("y-m-d");         
		  
										  if(empty($nama)){
											echo "<script>
											  alert ('Nama Anda tidak boleh kosong. Silakan isi nama anda');
											  document.location='index.php#qna';
											</script>"; 
										  }else{
											if(empty($telp)){
												echo "<script>
												  alert ('No Telepon Anda tidak boleh kosong. Silakan isi No.Telepon anda');
												  document.location='index.php#qna';
												</script>"; 
											}else{
												if(empty($lyn)){
													echo "<script>
													  alert ('Silahkan isi jenis layanan yang dituju');
													  document.location='index.php#qna';
													</script>"; 
												  }else{
													if(empty($isi)){
														echo "<script>
														  alert ('Silahkan isi Pesan Masukkan anda');
														  document.location='index.php#qna';
														</script>"; 
													  }else{
														$perintah = "INSERT INTO qna (tipe,qasender,tlpqa,instansi,layanan,quest,tglqa) VALUES ('$aduan','$nama','$telp','$ins','$lyn','$isi','$tgl')"; 
														$con = mysqli_connect("localhost","root","","mppkdi");
														$cek = mysqli_query($con, $perintah);

														if($cek){
														echo "<script>
														alert ('Terima kasih atas Masukkan anda! Masukkan anda adalah Motivasi Kami untuk menjadi lebih baik lagi');
														document.location='index.php';
														</script>"; 
														}else{
															echo "<script>
														  alert ('Berita Gagal Ditambahkan');
														  document.location='index.php#qna';
														  </script>"; 
														}
													  }
												  }
												} 
											} 
										}
									?>
							</div>
						</div>   
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Comment Area End -->

    <div class="contact-area section-padding-80-50" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2 class="contact-title mb-30">Mari Bermitra</h2>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Contact Info -->
                    <div class="contact-info mb-30">
                        <p>Surel</p>
                        <a href="mailto:ptps.kendari@gmail.com">mpp.kendari@gmail.com</a>
                    </div>
                    <!-- Contact Info -->
                    <div class="contact-info mb-30">
                        <p>Telepon</p>
                        <a href="#">+6511.188.888</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Contact Info -->
                    <div class="contact-info mb-30">
                        <p>Kunjungi kami di</p>
                        <a href="https://goo.gl/maps/SwKYWpy8wdqMxTEf6">Jl. Jend. Ahmad Yani, Mandonga, Kec. Mandonga, Kota Kendari, Sulawesi Tenggara 93111</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact  End -->



    <div class="map-area section-padding-0-80">
        <div class="container">
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15920.926250513197!2d122.5113579!3d-3.9726833!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x577cbea231560a49!2sMPP%20KOTA%20KENDARI!5e0!3m2!1sen!2sid!4v1668242264818!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- Contact End -->



   
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