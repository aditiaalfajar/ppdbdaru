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
            <h7 class="panel-title"><i class="glyphicon glyphicon-stats"></i>&nbsp; <b>VERIFIKASI KELULUSAN</b></h7>
          </div>
        </div>
        <hr style="margin:0px;">
        <div class="panel-heading">
          <a href="panel_admin/edit_ket" class="btn bg-orange-400"><b>EDIT KETERANGAN LULUS</b></a>
          <div class="col-md-3" style="float:right; margin-right:-10px;">
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
            <br>
          </div>
        </div>
        <hr style="margin:0px;">
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table datatable-basic table-sm table-bordered table-striped" width="100%">
              <thead class="bg-orange-600">
                <tr>
                  <th width="5%">No.</th>
                  <th>Status</th>
                  <th>No. Pendaftaran</th>
                  <th>NISN</th>
                  <th>Nama Lengkap</th>
                  <th class="text-left">Tindakan</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($v_siswa->result() as $baris) { ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td class="text-left">
                      <?php if ($baris->status_pendaftaran == 'lulus') { ?>
                        <label class="label label-success">Lulus</label>
                      <?php } elseif ($baris->status_pendaftaran == 'tidak lulus') { ?>
                        <label class="label label-danger">Tidak Lulus</label>
                      <?php } else { ?>
                        <label class="label label-warning">Proses</label>
                      <?php } ?>
                    </td>
                    <td><?php echo $baris->no_pendaftaran; ?></td>
                    <td><?php echo $baris->nisn; ?></td>
                    <td><?php echo $baris->nama_lengkap; ?></td>

                    <td align="center">
                      <?php if ($baris->status_pendaftaran == '') { ?>
                        <a href="panel_admin/set_pengumuman/tdk_lulus/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-danger btn-xs" title="Tidak Lulus" onclick="return confirm('Apakah Anda yakin?')"><i class="glyphicon glyphicon-remove-circle"></i></a>
                        <a href="panel_admin/set_pengumuman/lulus/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-success btn-xs" title="Lulus" onclick="return confirm('Apakah Anda yakin?')"><i class="glyphicon glyphicon-ok-circle"></i></a>
                      <?php } else { ?>
                        <a href="panel_admin/set_pengumuman/batal/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-warning btn-xs" title="Batalkan" onclick="return confirm('Apakah Anda yakin?')"><i class="glyphicon glyphicon-ok-circle"></i></a>
                      <?php } ?>
                    </td>
                    <td align="center">
                      <a href="panel_admin/ubah_siswa/<?php echo $baris->no_pendaftaran ?>" class="btn btn-primary btn-xs" title="Edit Data"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="panel_admin/delete/<?php echo $baris->id_siswa ?>" class="btn btn-danger btn-xs" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>

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
        window.location = "panel_admin/set_pengumuman/thn/" + thn;
      }
      $('[name="thn"]').select2({
        placeholder: "- Tahun -"
      });
    </script>