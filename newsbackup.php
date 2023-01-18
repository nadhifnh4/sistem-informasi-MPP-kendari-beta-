 <?php

  include "koneksi.php";

?>
    <section class="why-choose-us-area bg-gray section-padding-80-0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>apa kabar hari ini?</h2>
                    </div>
                </div>
            </div>

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">

    <!-- Related News Area Start -->
    <div class="related-news-area">

        <div class="container">

            <div class="row">

                <!-- Single Blog Area -->
                <?php
                  $perintah = "SELECT * FROM `tabel_berita` ORDER BY id DESC LIMIT 4";
                  $ex = mysqli_query($con, $perintah);
                  $no = 1;
                  while ($data = mysqli_fetch_array($ex)) {
                ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-post-area">


                        <!-- Post Thumbnail -->
                        <a href="#" class="post-thumbnail"><img src="../login/admin/add/img/berita/<?=$data['gambar']?>" alt=""></a>
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
            </div>

            <div class="border-top mt-5"></div>
        </div>
    </div>
            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">
                    <a href="newsext.php" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Gallery Area End -->
    </section>

