<?php
$cek      = $user;
$id_user  = $cek->id_user;
$nama     = $cek->nama_lengkap;
$level    = $cek->level;
$tgl      = date('m-Y');
?>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <!-- Dashboard content -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel">
          <div class="panel-heading bg-primary-800">
            <h7 class="panel-title">
              <i class="glyphicon glyphicon-home"></i>&nbsp; DASHBOARD <b>PPBD Online</b>
            </h7>
          </div>
          <div class="panel-body">
            <left>Selamat Datang <strong><?php echo ucwords($nama); ?></strong> di Sistem PPBD Online</left>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="panel">
          <div class="panel-heading bg-primary-600">
            <h7 class="panel-title">
              <i class="glyphicon glyphicon-stats"></i>&nbsp; <b>QUICK ACCESS</b>
            </h7>
          </div>
          <div class="panel-body" style="margin-bottom: -20px;">
            <!-- Quick stats boxes -->
            <div class="row">
              <div class="col-lg-3">
                <!-- Current server load -->
                <div class="panel bg-orange-400">
                  <div class="panel-body">
                    <div class="heading-elements">
                      <span class="heading-text"></span>
                    </div>
                    <h3 class="no-margin text-bold">
                      <?php
                      $thn_ini = date('Y');
                      $this->db->like('tgl_siswa', $thn_ini, 'after');
                      echo number_format($this->db->get('tbl_siswa')->num_rows(), 0, ",", "."); ?>
                    </h3>
                    <strong>PENDAFTAR</strong>
                  </div>
                </div>
                <!-- /current server load -->
              </div>
              <div class="col-lg-3">
                <!-- Current server load -->
                <div class="panel bg-info-400">
                  <div class="panel-body">
                    <div class="heading-elements">
                      <span class="heading-text"></span>
                    </div>
                    <h3 class="no-margin text-bold">
                      <?php
                      $this->db->like('tgl_siswa', $thn_ini, 'after');
                      echo number_format($this->db->get_where('tbl_siswa', "status_verifikasi='1'")->num_rows(), 0, ",", ".");  ?>
                    </h3>
                    <strong>LOLOS VERIFIKASI</strong>
                  </div>
                </div>
                <!-- /current server load -->
              </div>
              <div class="col-lg-3">
                <!-- Current server load -->
                <div class="panel bg-success-600">
                  <div class="panel-body">
                    <div class="heading-elements">
                      <span class="heading-text"></span>
                    </div>
                    <h3 class="no-margin text-bold">
                      <?php
                      $this->db->like('tgl_siswa', $thn_ini, 'after');
                      echo number_format($this->db->get_where('tbl_siswa', "status_pendaftaran='lulus'")->num_rows(), 0, ",", ".");  ?>
                    </h3>
                    <strong> LULUS PPDB</strong>
                  </div>
                </div>
                <!-- /current server load -->
              </div>

              <div class="col-lg-3">
                <!-- Current server load -->
                <div class="panel bg-danger-400">
                  <div class="panel-body">
                    <div class="heading-elements">
                      <span class="heading-text"></span>
                    </div>
                    <h3 class="no-margin text-bold">
                      <?php
                      $this->db->like('tgl_siswa', $thn_ini, 'after');
                      echo number_format($this->db->get_where('tbl_siswa', "status_pendaftaran='tidak lulus'")->num_rows(), 0, ",", ".");  ?>
                    </h3>
                    <strong>TIDAK LULUS PPDB</strong>
                  </div>
                </div>
                <!-- /current server load -->
              </div>
            </div>
          </div>
        </div>
        <!-- /quick stats boxes -->
      </div>
      <div class="col-lg-12">
        <div class="panel">
          <div class="panel-heading bg-primary-400">
            <h7 class="panel-title">
              <i class="glyphicon glyphicon-flash"></i>&nbsp; <b>STATUS PENDAFTARAN</b>
            </h7>
          </div>
          <div class="panel-body" style="margin-bottom: -20px;">
            <?php if ($web_ppdb->status_ppdb == 'buka') { ?>
              <div class="alert alert-success alert-dismissible" role="alert">
                <form action="" method="post">
                  <button type="submit" name="btnnonaktif" class="btn btn-success" onclick="return confirm('Anda yakin akan menutup pendaftaran PPDB tahun ini?')"><i class="icon-laptop"></i> Tutup Pendaftaran PPDB Online!</button>
                  <strong>&nbsp; Status Pendaftaran PPDB Online</strong> masih dibuka. Terakhir diubah <?php echo date('d-m-Y H:i:s', strtotime($web_ppdb->tgl_diubah)); ?>.
                </form>
              </div>
            <?php } else { ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <form action="" method="post">
                  <button type="submit" name="btnaktif" class="btn btn-danger" onclick="return confirm('Anda yakin akan membuka pendaftaran PPDB tahun ini?')"><i class="icon-laptop"></i> Buka Pendaftaran PPDB Online!</button>
                  <strong>&nbsp; Status Pendaftaran PPDB Online</strong> masih ditutup. Terakhir diubah <?php echo date('d-m-Y H:i:s', strtotime($web_ppdb->tgl_diubah)); ?>.
                </form>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- /dashboard content -->