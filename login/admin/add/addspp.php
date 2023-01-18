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
            <h1>Masukkan SPP</h1>
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
                    <label for="exampleInputTitle">Judul</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan Judul" name="judul">
                </div>   
                <div class="form-group">
                    <label for="exampleInputTitle">Link</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan Judul" name="judul2">
                </div> 
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
                  $isi = $_POST['judul2'];         

                  $perintah = "INSERT INTO spp (namaspp,linkspp) VALUES ('$judul','$isi')"; 

                  $cek = mysqli_query($con, $perintah);
                  
                  if($cek){
                    echo "<script>
                    alert ('Berita Berhasil Ditambahkan');
                    document.location='../spplist.php';
                    </script>"; 
                  }else{
                    echo "<script>
                  alert ('Berita Gagal Ditambahkan');
                  document.location='addspp.php';
                  </script>"; 
                  }
                  

                }
            ?>
<?php
  include "footer.php";
?>
 
