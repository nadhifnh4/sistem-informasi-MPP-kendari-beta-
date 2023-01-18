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
            <h1>Masukkan Civitas</h1>
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
                  <div class="form-group">
                    <label for="exampleInputFile">Masukkan Gambar Disini</label>
                    <input type="file" id="exampleInputFile" name="gambar">
                    <p class="help-block"></p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputTitle">Judul</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan nama " name="ttl">
                    <label for="exampleInputTitle">NIP</label>
					<input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan NIP (Dapat dikosongkan bagi non-ASN)" name="noinduk">
                    <label for="exampleInputTitle">Jabatan</label>
					<input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan Jabatan " name="pos">
					<label for="exampleInputTitle">Agama</label>
					<input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan Agama " name="agm">
                    <label for="exampleInputTitle">Kelamin</label>
					<select class="form-control mb-30" name = "gdr">
						<option value = "laki-laki">Laki-laki</option>
						<option value = "perempuan">Perempuan</option>		
					</select>
                    <label for="exampleInputTitle">Golongan (Kosongkan bagi non-ASN)</label>
					<input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan Golongan (dapat dikosongkan untuk non-ASN) " name="gol">
                    <label for="exampleInputTitle">Pendidikan Terakhir</label>
					<input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan pendidikan terakhir " name="pdt">
                    <label for="exampleInputTitle">Masa Kerja</label>
					<input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan masa kerja " name="durat">
					<label> Kode Posisi Jabatan</label>
					<select class="form-control mb-30" name = "cpos">
						<option value = "kadis">Kepala Dinas</option>
						<option value = "sk">Sekretaris Dinas</option>
						<option value = "kb">Ketua Bidang</option>
						<option value = "jf">Pejabat Fungsional</option>
						<option value = "fo">Pegawai Front Office</option>		
					</select>
					<label for="exampleInputTitle">TTL</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Masukkan TTL" name="birthdate">
                  </div>
                  <label for="exampleInputTitle">Masukkan riwayat diklat/pelatihan<br>
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
                  $nama_cr = $_FILES['gambar']['name'];

                  $crname = $_POST['ttl'];
                  $cridn = $_POST['noinduk'];
                  $crbd = $_POST['birthdate'];
                  $agm = $_POST['agm'];
                  $gdr = $_POST['gdr'];
                  $gol = $_POST['gol'];
                  $pdt = $_POST['pdt'];
                  $durat = $_POST['durat'];
                  $pos = $_POST['pos']; 
                  $cpos = $_POST['cpos'];
                  $isiid = $_POST['editor1'];  
     
                  
                  move_uploaded_file($lokasi, "img/team/".$nama_cr);

                  $perintah = "INSERT INTO ourteam(teamname,nicr,teamttl,tmbd,agamacr,gend,gol,pdt,durat,tmdesc,tmpic,catcr) VALUES ('$crname','$cridn','$pos','$crbd','$agm','$gdr','$gol','$pdt','$durat','$isiid','$nama_cr','$cpos')"; 

                  $cek = mysqli_query($con, $perintah);
                  
                  if($cek){
                    echo "<script>
                    alert ('Berita Berhasil Ditambahkan');
                    document.location='../crewlist.php';
                    </script>"; 
                  }else{
                    echo "<script>
                  alert ('Berita Gagal Ditambahkan');
                  document.location='addcrew.php';
                  </script>"; 
                  }
                  

                }
            ?>
<?php
  include "footer.php";
?>
 
