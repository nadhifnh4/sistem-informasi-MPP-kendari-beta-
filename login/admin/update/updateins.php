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
            <h1>Ubah Instansi</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <?php
        include 'koneksi.php';
        $id=$_GET['id'];
        $perintah = "SELECT * FROM instansi WHERE idins='$id' ";
        $exec = mysqli_query($con, $perintah);
        $data = mysqli_fetch_array($exec)
      ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputTitle">Nama Instansi</label>
                    <input type="text" class="form-control" id="exampleInputTitle" name="judul" value="<?php echo "$data[namains]"; ?>">
					<label for="exampleInputTitle">Kode Instansi</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="<?php echo "$data[kodeins]"; ?>" name="kode">
				</div>   
                <label for="exampleInputFile">Masukkan deskripsi Instansi</label>
                <textarea id="summernote" name = editor1>
                  <?php echo "$data[desins]"; ?>
                </textarea>
                  <script>
                    $(document).ready(function() {
                      $('#summernote').summernote();
                    });
                  </script>
                <div class="form-group">
                    <label for="exampleInputTitle">Link Instansi</label>
                    <input type="text" class="form-control" id="exampleInputTitle" name="judul2" value="<?php echo "$data[linkins]"; ?>">
                </div>  
                <div class="form-group">
                    <label for="exampleInputTitle">Pilih Kategori Instansi</label>
					<select class="form-control mb-30" name = "cat">
						<option value="<?php echo "$data[catins]"; ?>" selected> <?php echo "$data[catins]"; ?> "(terpilih)"</option>
						<option value = "kementerian">Kementerian/lembaga-kementerian</option>
						<option value = "pemprov">Pemerintah Provinsi-pemprov</option>
						<option value = "pemkot">Pemerintah Kota-pemkot</option>
						<option value = "bumn">Perusahaan BUMN-bumn</option>
						<option value = "bumd">Perusahaan BUMD-bumd</option>
						<option value = "perbankan">Perusahaan Perbankan-perbankan</option>		
					</select>
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
				  $kode = $_POST['kode'];
                  $isi = $_POST['editor1'];
                  $link = $_POST['judul2'];          
                  $cat = $_POST['cat'];

                  $id   = $_GET['id'];
                  $query="UPDATE instansi SET namains='$judul',kodeins='$kode',desins='$isi',linkins='$link' , catins ='$cat' where idins='$id'";

                  mysqli_query($con, $query);

                   if($query){
                      echo "<script type='text/javascript'>
                      window.alert('berhasil');
                      document.location='../inslist.php';
                    </script>";
                   }else{
                      echo 'gagal';
                   }   

                }
            ?>
<?php
  include "footer.php";
?>
 
