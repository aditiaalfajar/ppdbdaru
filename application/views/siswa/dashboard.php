<?php
$cek    = $user;
$id_user = $cek->id_siswa;
$nama    = $cek->nama_lengkap;
$tgl = date('m-Y');
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$user = $this->db->get('tbl_user')->row_array();
?>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h7 class="panel-title">
              <i class="glyphicon glyphicon-home"></i>&nbsp; DASHBOARD <b>PPBD Online</b>
            </h7>
          </div>
          <div class="panel-body">
            <left>Selamat Datang <strong><?php echo ucwords($nama); ?></strong> di Sistem PPBD Online</left> <b><?php echo $user['nama_lengkap']; ?></b> | Tahun Pelajaran <b><?php echo $user['th_pelajaran']; ?></b>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel">
          <div class="panel-heading bg-orange-400">
            <h7 class="panel-title">
              <i class="glyphicon glyphicon-stats"></i>&nbsp; <b>QUICK ACCESS</b>
            </h7>
          </div>
          <div class="panel-body" style="margin-bottom: -20px;">
            <!-- Quick stats boxes -->
            <div class="row">
              <div class="col-sm-4">
                <!-- Current server load -->
                <center>
                  <a href="panel_siswa/biodata">
                    <div class="panel bg-primary-800">
                      <div class="panel-body">
                        <div class="heading-elements">
                          <span class="heading-text"></span>
                        </div>
                        <h1 class="no-margin">
                          <i class="icon-file-check2" style="font-size:30px;"></i>
                        </h1>
                        <b>BIODATA & UPLOAD DOKUMENT</b>
                      </div>
                    </div>
                  </a>
                </center>
                <!-- /current server load -->
              </div>
              <div class="col-sm-4">
                <!-- Current server load -->
                <center>
                  <a href="panel_siswa/cetak" target="_blank">
                    <div class="panel bg-primary-600">
                      <div class="panel-body">
                        <div class="heading-elements">
                          <span class="heading-text"></span>
                        </div>
                        <h1 class="no-margin">
                          <i class="icon-printer2" style="font-size:30px;"></i>
                        </h1>
                        <b>PENDAFTARAN</b>
                      </div>
                    </div>
                  </a>
                </center>
                <!-- /current server load -->
              </div>
              <div class="col-sm-4">
                <center>
                  <a href="files/panduan_ppdb_online.pdf" target="_blank">
                    <div class="panel bg-primary-400">
                      <div class="panel-body">
                        <div class="heading-elements">
                          <span class="heading-text"></span>
                        </div>
                        <h1 class="no-margin">
                          <i class="icon-file-download2" style="font-size:30px;"></i>
                        </h1>
                        <b>PANDUAN</b>
                      </div>
                    </div>
                  </a>
                </center>
              </div>
            </div>
            <!-- /quick stats boxes -->
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <?php if ($cek->status_pendaftaran == 'lulus') { ?>
          <div class="panel">
            <div class="panel-heading bg-orange-400">
              <h7 class="panel-title">
                <i class="glyphicon glyphicon-bullhorn"></i>&nbsp; <b>INFO PENGUMUMAN</b>
                
              </h7>
            </div>
            <div class="panel-body">
              <blockquote class="small text-bold h4">
                Selamat! Atas nama <b><?php echo $nama; ?></b> dinyatakan:<br>
                <span class="label label-success"><i class="icon-checkmark2"></i> Lulus Verifikasi & Seleksi</span>
                <br>Penerimaan Peserta Didik Baru (PPDB) - <b><?php echo $user['nama_lengkap']; ?></b> | <b><?php echo $user['th_pelajaran']; ?></b>
                <br>Silahkan cetak surat pengumuman ini sebagai bukti lulus seleksi.
                <hr>
                <a href="panel_siswa/cetak_lulus" class="btn btn-success btn-lg" target="_blank"><i class="icon-printer4"></i>&nbsp; Cetak Bukti Lulus</a>
              </blockquote>
            </div>
          </div>
        <?php } elseif ($cek->status_pendaftaran == 'tidak lulus') { ?>
          <div class="panel">
            <div class="panel-heading bg-orange-400">
              <h7 class="panel-title">
                <i class="glyphicon glyphicon-bullhorn"></i>&nbsp; <b>INFO PENGUMUMAN</b>
              </h7>
            </div>
            <div class="panel-body" style="color:red">
              <blockquote class="small text-bold h4">
                Semangat & Terus Berjuang! Atas nama <b><?php echo $nama; ?></b> dinyatakan:
                <br><span class="label label-danger"><i class="icon-cross3"></i> Belum Lulus Verifikasi & Seleksi</span>
                <br>Penerimaan Peserta Didik Baru (PPDB) - <b><?php echo $user['nama_lengkap']; ?></b> | <b><?php echo $user['th_pelajaran']; ?></b>
              </blockquote>
            </div>
          </div>
        <?php } else { ?>
          <div class="panel">
            <div class="panel-heading bg-orange-400">
              <h7 class="panel-title">
                <i class="glyphicon glyphicon-bullhorn"></i>&nbsp; <b>INFO PENGUMUMAN</b>
              </h7>
            </div>
            <div class="panel-body">
              <blockquote class="small text-bold h4">
                Belum ada pengumuman dari Panitia PPDB Online<?php echo $user['nama_lengkap']; ?>
              Pengumuman hasil seleksi akan ditampilkan paing lambat pada tanggal <b>5 Juli 2026</b>.<br><br>
Sambil menunggu pengumuman, calon peserta didik atau siswa diharapkan memastikan kembali kelengkapan dan kebenaran data yang telah diinput. Apabila terdapat kesalahan data atau mengalami kendala selama proses pendaftaran, silakan menghubungi panitia PPDB memalui kontak berikut : <br><br>

  <?php
$nomor = preg_replace('/[^0-9]/', '', $user['telp']);

if (substr($nomor, 0, 1) == '0') {
    $nomor = '62' . substr($nomor, 1);
}
?>

<a href="https://wa.me/<?php echo $nomor; ?>? text=halo"
   target="_blank"
   class="btn btn-success">
    <i class="fa fa-whatsapp"></i>
    <?php echo $user['telp']; ?>
</a>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
    <!-- /dashboard content -->