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
            <h1>Masukkan Instansi disini</h1>
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
                    <label for="exampleInputFile">Masukkan Logo Disini</label>
                    <input type="file" id="exampleInputFile" name="gambar">
                    <p class="help-block"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputTitle">Nama Instansi</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan Nama" name="judul">
					<label for="exampleInputTitle">Kode Instansi</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan Kode" name="kode">
                </div>   
                <div class="form-group">
                    <label for="exampleInputTitle">Tautan Instansi</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan Tautan" name="judul2">
                </div>  
                <div class="form-group">
                    <label for="exampleInputTitle">Pilih Kategori Instansi</label>
					<select class="form-control mb-30" name = "cat">
						<option value = "kementerian" selected>Kementerian/lembaga</option>
						<option value = "pemprov">Pemerintah Provinsi</option>
						<option value = "pemkot">Pemerintah Kota</option>
						<option value = "bumn">Perusahaan BUMN</option>
						<option value = "bumd">Perusahaan BUMD</option>
						<option value = "perbankan">Perusahaan Perbankan</option>		
					</select>
				</div> 
                <label for="exampleInputFile">Masukkan Deskripsi Instansi</label>
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
                  $lokasi = $_FILES['gambar']['tmp_name'];
                  $nama_file = $_FILES['gambar']['name'];

                  $judul = $_POST['judul'];
				  $kode = $_POST['kode'];
                  $isi = $_POST['judul2'];
                  $desc = $_POST['editor1'];
                  $cat = $_POST['cat'];

                  
                  move_uploaded_file($lokasi, "img/instansi/".$nama_file);

                  $perintah = "INSERT INTO instansi (namains,kodeins,linkins,desins,picins,catins) VALUES ('$judul','$kode','$isi','$desc','$nama_file','$cat')"; 

                  $cek = mysqli_query($con, $perintah);
                  
                  if($cek){
                    echo "<script>
                    alert ('Berita Berhasil Ditambahkan');
                    document.location='../inslist.php';
                    </script>"; 
                  }else{
                    echo "<script>
                  alert ('Berita Gagal Ditambahkan');
                  document.location='addins.php';
                  </script>"; 
                  }
                  

                }
            ?>
<?php
  include "footer.php";
?>
 
