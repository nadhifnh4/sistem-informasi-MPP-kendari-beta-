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
            <h1>Ubah Civitas</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <?php
        include 'koneksi.php';
        $id=$_GET['id'];
        $perintah = "SELECT * FROM ourteam WHERE idteam='$id' ";
        $exec = mysqli_query($con, $perintah);
        $data = mysqli_fetch_array($exec)
      ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="card-header">
                  <div class="form-group">
                    <label for="exampleInputTitle">Nama</label>
                    <input type="text" class="form-control" id="exampleInputTitle"  name="nama" value="<?php echo "$data[teamname]"; ?>">
                    <label for="exampleInputTitle">NIP (dapat dikosongkan bagi non-ASN)</label>
                    <input type="text" class="form-control" id="exampleInputTitle"  name="cridn" value="<?php echo "$data[nicr]"; ?>">
                    <label for="exampleInputTitle">Jabatan</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan Jabatan " name="pos" value="<?php echo "$data[teamttl]"; ?>">
                    <label> Kode Posisi Jabatan</label>
					<select class="form-control mb-30" name = "cpos" >
						<option value = "<?php echo "$data[catcr]"; ?>" selected><?php echo "$data[catcr]"; ?> (terpilih)</option>
						<option value = "kadis">Kepala Dinas/kadis</option>
						<option value = "sk">Sekretaris Dinas/sk</option>
						<option value = "kb">Ketua Bidang/kb</option>
						<option value = "jf">Pejabat Fungsional/jf</option>
						<option value = "fo">Pegawai Front Office/fo</option>		
					</select>
                    <label for="exampleInputTitle">TTL</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan TTL" name="ttl" value="<?php echo "$data[tmbd]"; ?>">
                    <label for="exampleInputTitle">Agama</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan agama" name="agm" value="<?php echo "$data[agamacr]"; ?>">
                   <label for="exampleInputTitle">Kelamin</label>
					<select class="form-control mb-30" name = "gdr">
						<option value = "<?php echo "$data[gend]"; ?>" selected><?php echo "$data[gend]"; ?> (terpilih)</option>
						<option value = "laki-laki">Laki-laki</option>
						<option value = "perempuan">Perempuan</option>		
					</select>
					 
					 <label for="exampleInputTitle">Gol</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan Golongan (dapat dikosongkan untuk non-ASN) " name="gol" value="<?php echo "$data[gol]"; ?>">
                     <label for="exampleInputTitle">Pendidikan Terakhir</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan pendidikan terakhir " name="pdt" value="<?php echo "$data[pdt]"; ?>">
                     <label for="exampleInputTitle">Masa Kerja</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan masa kerja " name="durat" value="<?php echo "$data[durat]"; ?>">

                  </div>
                   <label for="exampleInputTitle">Masukkan Riwayat Diklat/Pelatihan<br>
                  </label>
                <textarea id="summernote" name = editor1 ><?php echo "$data[tmdesc]"; ?></textarea>
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
                  $judul = $_POST['nama'];
                  $cridn = $_POST['cridn'];
                  $jabat = $_POST['pos']; 
                  $cjabat = $_POST['cpos']; 
                  $ttl = $_POST['ttl']; 
                  $agm = $_POST['agm']; 
                  $gdr = $_POST['gdr'];
                  $gol = $_POST['gol'];
                  $pdt = $_POST['pdt'];
                  $durat = $_POST['durat'];
                  $isi = $_POST['editor1']; 
                  $query ="UPDATE ourteam SET teamname='$judul',nicr='$cridn',teamttl='$jabat',tmbd='$ttl', agamacr='$agm',gend='$gdr',gol='$gol',pdt='$pdt',durat='$durat',tmdesc='$isi',catcr='$cjabat' where idteam='$id'";

                  mysqli_query($con, $query);

                   if($query){
                      echo "<script type='text/javascript'>
                      window.alert('berhasil');
                      document.location='../crewlist.php';
                    </script>";
                   }else{
                      echo 'gagal';
                   }   

                }
            ?>
<?php
  include "footer.php";
?>
 
