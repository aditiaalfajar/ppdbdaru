<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <?php
    echo $this->session->flashdata('msg');
    ?>
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel panel-primary" style="margin-bottom: 0;">
          <div class="panel-heading">
            <h7 class="panel-title"><i class="glyphicon glyphicon-stats"></i>&nbsp; <b>EXPORT DATA SISWA</b></h7>
          </div>
        </div>
        <div class="panel-heading">
          <left><a href="<?php echo base_url("index.php/siswa/export"); ?>" class="btn btn-danger"><b>KLIK DI SINI UNTUK MELAKUKAN EXPORT DATA</b></a></center>
        </div>

      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
    <script type="text/javascript">
      function thn() {
        var thn = $('[name="thn"]').val();
        window.location = "panel_admin/verifikasi/thn/" + thn;
      }

      $('[name="thn"]').select2({
        placeholder: "- Tahun -"
      });
    </script>