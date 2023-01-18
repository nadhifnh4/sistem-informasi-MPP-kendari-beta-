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
            <h1>Balas Pengaduan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <?php
        include 'koneksi.php';
        $id=$_GET['id'];
        $perintah = "SELECT * FROM qna WHERE idqa='$id' ";
        $exec = mysqli_query($con, $perintah);
        $data = mysqli_fetch_array($exec)
      ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <form action="" method="post" enctype="multipart/form-data"> 
                <label for="exampleInputFile"> balasan untuk pesan dari ( <?=$data['qasender']?> ) pada tanggal:  <?=$data['tglqa']?></label><br>
                <label for="exampleInputFile">  <?=$data['quest']?> </label>
                <textarea id="summernote" name = editor1>
                </textarea>
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
            <!-- /.card-header -->
          <div id ="div_editor1">
          </div>
        </div>
        <!-- /.col-->
      </div>
            <?php 
                if (isset($_POST['tombol'])) {
                  $isi = $_POST['editor1'];        
                  
                  $id   = $_GET['id'];
                  $res   = "telah dibalas";
                  $query="UPDATE qna SET response='$isi', ressts= '$res' where idqa='$id'";

                  mysqli_query($con, $query);

                   if($query){
                      echo "<script type='text/javascript'>
                      window.alert('berhasil');
                      document.location='../qnalist.php';
                    </script>";
                   }
                   else{
                      echo 'gagal';
                   }   

                }
            ?>
   </section>
 </div>
<?php
  include "footer.php";
?>
 
