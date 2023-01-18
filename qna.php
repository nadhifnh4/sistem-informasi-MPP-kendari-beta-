<?php
    include "koneksi.php";
?>
    <!-- Our Team Area Start -->
    <section class="our-team-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <!-- Team Member Area -->
                <div class="alime-contact-form mt-50">
                    <h4 class="mb-30">Masih bingung? Silahkan Tanyakan Disini</h4>
                    <!-- Form -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input type="text" name="nama" class="form-control mb-30" placeholder="Nama Anda">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="email" name="telp" class="form-control mb-30" placeholder="No. Telp">
                            </div>
                            <div class="col-12">
                                <textarea name="quest" class="form-control mb-30" placeholder="Pertanyaan"></textarea>
                                </div>
                            <div class="col-12">
                                <button type="submit" value="Simpan" class="btn alime-btn btn-2 mt-15">Kirim Pertanyaan</button>
                            </div>
                        </div>
                    </form>
                    <?php 
                    if (isset($_POST['submit'])) {

                      $judul = $_POST['nama'];
                      $telp = $_POST['telp']; 
                      $isi = $_POST['quest']; 
                      $tgl = date("y-m-d");         

                      $perintah = "INSERT INTO qna (qasender, tlpqa,quest, tglqa) VALUES ('$judul','$telp','$isi','$tgl')"; 

                      $cek = mysqli_query($con, $perintah);
                      
                      if($cek){
                        echo "<script>
                        alert ('Berita Berhasil Ditambahkan');
                        document.location='index.php';
                        </script>"; 
                      }else{
                        echo "<script>
                      alert ('Berita Gagal Ditambahkan');
                      document.location='index.php/#qna';
                      </script>"; 
                      }
                      

                    }
                ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team Area End -->