<?php
    include "koneksi.php";
?>

   <!-- Blog Area Start -->
    <div class="alime-blog-area section-padding-80-0 mb-70">
        <div class="container">
            <div class="row">

                <!-- Single Blog Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                <?php
                  $perintah = "SELECT * FROM `tabel_berita` ORDER BY id DESC";
                  $ex = mysqli_query($con, $perintah);
                  while ($data = mysqli_fetch_array($ex)) {
                ?>
                    <div class="single-post-area wow fadeInUpBig" data-wow-delay="100ms">
                        <!-- Post Thumbnail -->
                        <a href="#" class="post-thumbnail"><img src="../login/admin/add/img/berita/<?=$data['gambar']?>" width="10%" height="10%" alt=""></a>
                        <!-- Post Conetent -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">May 19, 2019</a>
                                <a href="#">3 Comment</a>
                            </div>
                            <a href="#" class="post-title"><?php echo "$data[judul]"; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

                  <?php
                    }
                  ?>

  