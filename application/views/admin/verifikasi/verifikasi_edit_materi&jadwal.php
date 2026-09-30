<script type="text/javascript" src="assets/panel/ckeditor/ckeditor.js"></script>
<style>
  label {
    font-weight: bold;
  }
</style>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-12">
        <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
             <!-- <legend class="text-bold"> Edit Materi & Jadwal Ujian</legend>-->
              <?php
              echo $this->session->flashdata('msg');
              ?>
              <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                  <!-- <label class="control-label col-lg-12">Materi & Jadwal Ujian:</label> -->
                  <div class="col-lg-12">
                    <textarea type="text" name="isi" class="form-control ckeditor" id="ckedtor" placeholder="Isi Materi & Jadwal Ujian" required><?php echo $v_materi->isi; ?></textarea>
                  </div>
                </div>
                <hr>
                <a href="panel_admin/verifikasi" class="btn btn-sm btn-danger"><b>KEMBALI</b></a>
                <button type="submit" name="btnupdate" class="btn btn-sm bg-primary-800" style="float:right;"><b>SIMPAN</b></button>
              </form>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
    <!-- /dashboard content -->
    <script type="text/javascript">
      CKEDITOR.replace('isi', {
        fullPage: true,
        removeButtons: 'Save',
        removePlugins: 'Save',
        toolbar: [{
            name: 'clipboard',
            items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']
          },
          {
            name: 'editing',
            items: ['Find', 'Replace']
          },
          {
            name: 'document',
            items: ['Source']
          },
          '/',
          {
            name: 'basicstyles',
            items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript']
          },
          {
            name: 'paragraph',
            items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
          },
          {
            name: 'links',
            items: ['Link', 'Unlink', 'Anchor']
          },
          {
            name: 'insert',
            items: ['Table', 'HorizontalRule', 'SpecialChar']
          },
          '/',
          {
            name: 'styles',
            items: ['Styles', 'Format', 'Font', 'FontSize', 'lineheight']
          },
          {
            name: 'colors',
            items: ['TextColor', 'BGColor']
          },
          {
            name: 'tools',
            items: ['Maximize', 'About', 'ShowBlocks']
          }
        ],
        extraPlugins: 'lineheight',
        line_height: "10px; 20px; 40px; 60px;"
      });
    </script>