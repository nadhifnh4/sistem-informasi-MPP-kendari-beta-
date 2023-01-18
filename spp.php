 <?php
    include "koneksi.php";
?>

    <section class="why-choose-us-area bg-gray section-padding-80-0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>SPP</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Why Choose Area -->
                <?php
                    $perintah = "SELECT * FROM spp ORDER BY idspp DESC";
                    $exec = mysqli_query($con, $perintah);
                    while ($data = mysqli_fetch_array($exec)){
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <a href="<?php echo "$data[linkspp]"; ?>">
                        <h4><strong><?php echo "$data[namaspp]"; ?></strong></h4>
                    </a>
                    </div>
                </div>
            <?php
                }
            ?>
            </div>
        </div>
    </section>
    <!-- Why Choose  us Area End -->

