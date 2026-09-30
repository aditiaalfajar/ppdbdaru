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
            <h7 class="panel-title"><i class="glyphicon glyphicon-stats"></i>&nbsp; <b>VERIFIKASI DATA</b></h7>
          </div>
        </div>
        <hr style="margin:0px;">
        <div class="panel-heading">
         <!-- <a href="panel_admin/edit_materi" class="btn bg-orange-400"><b>MATERI & JADWAL UJIAN</b></a>
          <div class="col-md-3" style="float: right; margin-right:-10px;">-->
            
          
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-calendar22"></i></div>
              <select class="form-control" name="thn" onchange="thn()">
                <?php for ($i = date('Y'); $i >= 2020; $i--) { ?>
                  <option value="<?php echo $i; ?>" <?php if ($v_thn == $i) {
                                                      echo "selected";
                                                    } ?>>Tahun <?php echo $i; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <hr style="margin:0px;">
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table datatable-basic table-sm table-bordered table-striped" width="100%">
              <thead class="bg-primary">
                <tr>
                  <th style="width: 1%;">No</th>
                  <th class="text-center">Verifikasi</th>
                  <th>Pendaftaran</th>
                  <th>Nama Lengkap</th>
                  <th>NISN</th>
                  <th>Waktu</th>
                  <th class="text-center" width="180">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($v_siswa->result() as $baris) { ?>
                  <tr>
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td align="center">
                    <?php if ($baris->status_verifikasi == 'Terverifikasi') { ?>
    <label class="label label-success">Terverifikasi</label>
<?php } else { ?>
    <label class="label label-warning">Belum diverifikasi</label>
<?php } ?>
                    </td>
                    <td><?php echo $baris->no_pendaftaran; ?></td>
                    <td><?php echo $baris->nama_lengkap; ?></td>
                    <td><?php echo $baris->nisn; ?></td>
                    <td><?php echo $baris->tgl_siswa; ?></td>

                    <td align="center">
                      <?php if ($baris->status_verifikasi == 0) { ?>
                        <a href="panel_admin/verifikasi/cek/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-success btn-xs" title="Verifikasi" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-checkmark2"></i></a>
                      <?php } else { ?>
                        <a href="panel_admin/verifikasi/cek/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-danger btn-xs" title="Batal Verifikasi" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-cross3"></i></a>
                      <?php } ?>
                      <a href="panel_admin/biodata/<?php echo $baris->no_pendaftaran ?>" class="btn bg-orange-400 btn-xs" title="Lihat Data"><i class="icon-eye"></i></a>
                      <!--<a href="panel_admin/verifikasi_cetak/<?php echo $baris->no_pendaftaran; ?>" class="btn bg-primary-800 btn-xs" title="Cetak Verifikasi" target="_blank"><i class="icon-printer"></i></a>
                      -->
                     </td>
                  </tr>
                <?php
                } ?>
              </tbody>
            </table>
          </div>
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