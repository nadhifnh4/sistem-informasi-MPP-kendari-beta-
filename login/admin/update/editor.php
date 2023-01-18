<?php
  include "koneksi.php";
  include "header.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <div id="summernote"><p>Hello Summernote</p></div>
                <script>
                  $(document).ready(function() {
                    $('#summernote').summernote();
                  });
                </script>
              </div>
            </div>
            <!-- /.card-header -->
            <div id ="div_editor1">
            </div>

            <div class="card-footer">
              Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin.
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
</div>
              </textarea>
            </div>
            <div class="card-footer">
              Visit <a href="https://codemirror.net/">CodeMirror</a> documentation for more examples and information about the plugin.
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

<script>
  var editor1 = new RichTextEditor("#div_editor1");
      editor1.setHTMLCode("Use inline HTML or setHTMLCode to init the default content.");
</script>



<?php
  include "footer.php"
?>