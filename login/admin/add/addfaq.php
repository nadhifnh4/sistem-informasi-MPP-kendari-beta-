<?php
  include "header.php";
  include "koneksi.php";
?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Masukkan Pertanyaan beserta jawabannya</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputTitle">Pertanyaan</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan Judul" name="judul">
                </div>   
                <label for="exampleInputFile">Jawaban</label>
                <textarea id="summernote" name = editor1></textarea>
                  <script>
                    $(document).ready(function() {
                      $('#summernote').summernote();
                    });
                  </script>
                <div class="form-group" style="float: right; margin-top: 10px;">
                    <input type="submit" value="Simpan" name="tombol" class="btn btn-primary">
                </div>
              </div>
            </form>
        </div>
            <!-- /.card-header -->
          <div id ="div_editor1">
          </div>
      </div>
        <!-- /.col-->
  </div>
            <?php 
                if (isset($_POST['tombol'])) {

                  $judul = $_POST['judul'];
                  $isi = $_POST['editor1'];        
                  

                  $perintah = "INSERT INTO faq (quest,ans) VALUES ('$judul','$isi')"; 

                  $cek = mysqli_query($con, $perintah);
                  
                  if($cek){
                    echo "<script>
                    alert ('Berita Berhasil Ditambahkan');
                    document.location='../faqlist.php';
                    </script>"; 
                  }else{
                    echo "<script>
                  alert ('Berita Gagal Ditambahkan');
                  document.location='addfaq.php';
                  </script>"; 
                  }
                  

                }
            ?>
<?php
  include "footer.php";
?>
 
