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
            <h1>Masukkan Berita</h1>
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
              <div class="card-header">
                    <label for="exampleInputFile">Masukkan Gambar Disini</label>
                    <input type="file" id="exampleInputFile" name="gambar">
                    <p class="help-block"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputTitle">Judul</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan Judul" name="judul">
                </div>   
                <label for="exampleInputFile">Masukkan Isi Berita</label>
                <textarea id="summernote" name = editor1></textarea>
                  <script>
                    $(document).ready(function() {
                      $('#summernote').summernote();
                    });
                  </script>
                <div class="form-group" style="float: right; margin-top: 10px;">
                    <input type="submit" value="Simpan" name="tombol" class="btn btn-primary">
                </div>
            </form>
        </div>
            <?php 
                if (isset($_POST['tombol'])) {
                  $lokasi = $_FILES['gambar']['tmp_name'];
                  $nama_file = $_FILES['gambar']['name'];

                  $judul = $_POST['judul'];
                  $isi = $_POST['editor1']; 
                  $tgl = date("y-m-d");         
                  
                  move_uploaded_file($lokasi, "img/berita/".$nama_file);

                  $perintah = "INSERT INTO tabel_berita (judul,isi,tanggal,gambar) VALUES ('$judul','$isi','$tgl','$nama_file')"; 

                  $cek = mysqli_query($con, $perintah);
                  
                  if($cek){
                    echo "<script>
                    alert ('Berita Berhasil Ditambahkan');
                    document.location='../newslist.php';
                    </script>"; 
                  }else{
                    echo "<script>
                  alert ('Berita Gagal Ditambahkan');
                  document.location='addnews.php';
                  </script>"; 
                  }
                  

                }
            ?>
          </div>
        </div>
  </section>
</div>
<?php
  include "footer.php";
?>
 
