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
            <h1>Ubah SOP</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <?php
        include 'koneksi.php';
        $id=$_GET['id'];
        $perintah = "SELECT * FROM layanan WHERE idlyn='$id' ";
        $exec = mysqli_query($con, $perintah);
        $data = mysqli_fetch_array($exec)
      ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputTitle">Judul</label>
                    <input type="text" class="form-control" id="exampleInputTitle" name="judul" value="<?php echo "$data[namalyn]"; ?>">
                </div>   
                <div class="form-group">
                    <label for="exampleInputTitle">Judul</label>
                    <input type="text" class="form-control" id="exampleInputTitle" name="judul2" value="<?php echo "$data[linklyn]"; ?>">
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
                  $id=$_GET['id'];
                  $query="UPDATE layanan SET namalyn='$judul',linklyn='$isi' where idlyn='$id'";

                  mysqli_query($con, $query);

                   if($query){
                      echo "<script type='text/javascript'>
                      window.alert('berhasil');
                      document.location='../lynlist.php';
                    </script>";
                   }else{
                      echo 'gagal';
                   }   

                }
            ?>
<?php
  include "footer.php";
?>
 
