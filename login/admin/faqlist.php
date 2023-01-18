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
            <h1>Tabel Kumpulan FAQ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Tabel Kumpulan FAQ</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Silahkan Tambah, Ubah , dan Hapus Pertanyaan dan Jawaban yang diinginkan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <a button href="add/addfaq.php" type="button" class="btn btn-primary">
                Tambah Pertanyaan dan jawaban
                </a>
                <br>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Pertanyaan</th>
                    <th>jawaban</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $perintah = "SELECT * FROM `faq` ORDER BY idfaq DESC";
                      $ex = mysqli_query($con, $perintah);
                      $no = 1;
                      while ($data = mysqli_fetch_array($ex)) {
                    ?>
                  <tr>
                    <td width="25%"><?=$data['quest'] ?></td>
                    <td width="25%"><?=$data['ans'] ?></td>
                    <td width="25%">
                       <a button href="update/updatefaq.php?id=<?=$data['idfaq']?>" type="button" class="btn btn-primary">
                        Ubah
                        </a>
                        <a button href="delfaq.php?id=<?=$data['idfaq']?>" onclick= "return confirm('Apakah Anda yakin hapus data?')" type="button" class="btn btn-danger">
                        Hapus
                        </a>
                    </td>
                  </tr>
                  <?php
                    }
                  ?>
                  </tfoot>
                </table>
                <script>
                  function sortTable(n) {
                    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                    table = document.getElementById("example1");
                    switching = true;
                    // Set the sorting direction to ascending:
                    dir = "asc";
                    /* Make a loop that will continue until
                    no switching has been done: */
                    while (switching) {
                      // Start by saying: no switching is done:
                      switching = false;
                      rows = table.rows;
                      /* Loop through all table rows (except the
                      first, which contains table headers): */
                      for (i = 1; i < (rows.length - 1); i++) {
                        // Start by saying there should be no switching:
                        shouldSwitch = false;
                        /* Get the two elements you want to compare,
                        one from current row and one from the next: */
                        x = rows[i].getElementsByTagName("TD")[n];
                        y = rows[i + 1].getElementsByTagName("TD")[n];
                        /* Check if the two rows should switch place,
                        based on the direction, asc or desc: */
                        if (dir == "asc") {
                          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            // If so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                          }
                        } else if (dir == "desc") {
                          if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            // If so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                          }
                        }
                      }
                      if (shouldSwitch) {
                        /* If a switch has been marked, make the switch
                        and mark that a switch has been done: */
                        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                        switching = true;
                        // Each time a switch is done, increase this count by 1:
                        switchcount ++;
                      } else {
                        /* If no switching has been done AND the direction is "asc",
                        set the direction to "desc" and run the while loop again. */
                        if (switchcount == 0 && dir == "asc") {
                          dir = "desc";
                          switching = true;
                        }
                      }
                    }
                  }
                  </script>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <!-- Main content -->
<?php
  include "footer.php";
?>
 
