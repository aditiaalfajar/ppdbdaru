<?php
defined('BASEPATH') or exit('No direct script access allowed');

$id = $this->db->get('tbl_user')->row_array();
?>
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
            <div class="col-md-7">
                <div class="panel">
                    <div class="panel-heading bg-primary-600">
                        <h7 class="panel-title"><i class="glyphicon glyphicon-user"></i>&nbsp; <b>IDENTITAS DIRI SISWA</b></h7>
                    </div>
                    <div class="panel-body">
                        <table class="table table-xs table-bordered table-striped">
                            <tr>
                                <th colspan="2" class="text-bold bg-orange-400" style="padding:5px;">1. BIODATA SISWA</th>
                            </tr>
                            <tr>
                                <th>No. Pendaftaran</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->no_pendaftaran; ?></td>
                            </tr>
                            <tr>
                                <th>NISN</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->nisn; ?></td>
                            </tr>
                            <tr>
                                <th>NIK</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->nik; ?></td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <!-- <th>:</th> -->
                                <td><?php echo ucwords($siswa->nama_lengkap); ?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->jk; ?></td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->tempat_lahir; ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $this->lib_data->tgl_id($siswa->tgl_lahir); ?></td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->agama; ?></td>
                            </tr>
                            <tr>
                                <th>Status anak</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->status_keluarga; ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->alamat_siswa; ?> , <?php echo $siswa->desa; ?> <?php echo $siswa->kec; ?> <?php echo $siswa->kab; ?> <?php echo $siswa->kode_pos; ?></td>
                            </tr>
                            <tr>
                                <th>No. Handphone</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->no_hp_siswa; ?></td>
                            </tr>
                            <!-- </table> -->
                            <!-- <table class="table table-xs table-bordered table-striped"> -->
                            <!-- DATA SEKOLAH SISWA -->
                            <tr>
                                <th colspan="3" class="text-bold text-center bg-orange-400" style="padding:5px;">2. DATA SEKOLAH</th>
                            </tr>
                            <tr>
                                <th>Nama Sekolah</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->nama_sekolah; ?></td>
                            </tr>
                            <tr>
                                <th>NPSN Sekolah</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->npsn_sekolah; ?></td>
                            </tr>
                            <tr>
                                <th>Status Sekolah</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->status_sekolah; ?></td>
                            </tr>
                            <!-- DATA KARTU SISWA -->
                            <tr>
                                <th colspan="3" class="text-bold bg-orange-400" style="padding:5px;">3. BEASISWA/BANTUAN</th>
                            </tr>
                            <tr>
                                <th width="30%">No. KJP</th>
                                <!-- <th width="1%">:</th> -->
                                <td><?php echo $siswa->no_kjp; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">No. PKH</th>
                                <!-- <th width="1%">:</th> -->
                                <td><?php echo $siswa->no_pkh; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">No. KIP</th>
                                <!-- <th width="1%">:</th> -->
                                <td><?php echo $siswa->no_kip; ?></td>
                            </tr>
                        </table>
                        <table class="table table-xs table-bordered table-striped">
                            <!-- BIODATA AYAH SISWA -->
                            <tr>
                                <th colspan="2" class="text-bold bg-info" style="padding:5px;">4. BIODATA AYAH SISWA</th>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <!-- <th>:</th> -->
                                <td><?php echo ucwords($siswa->nama_ayah); ?></td>
                            </tr>
                            <tr>
                                <th>NIK Ayah</th>
                                <!-- <th>:</th> -->
                                <td><?php echo ucwords($siswa->nik_ayah); ?></td>
                            </tr>
                            <tr>
                                <th>Pendidikan</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->pdd_ayah; ?></td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->pekerjaan_ayah; ?></td>
                            </tr>
                            <tr>
                                <th>Penghasilan</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->penghasilan_ayah; ?></td>
                            </tr>
                            <!-- BIODATA IBU SISWA -->
                            <tr>
                                <th colspan="2" class="text-bold bg-info" style="padding:5px;">5. BIODATA IBU SISWA</th>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <!-- <th>:</th> -->
                                <td><?php echo ucwords($siswa->nama_ibu); ?></td>
                            </tr>
                            <tr>
                                <th>NIK Ibu</th>
                                <!-- <th>:</th> -->
                                <td><?php echo ucwords($siswa->nik_ibu); ?></td>
                            </tr>
                            <tr>
                                <th>Pendidikan</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->pdd_ibu; ?></td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->pekerjaan_ibu; ?></td>
                            </tr>
                            <tr>
                                <th>Penghasilan</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->penghasilan_ibu; ?></td>
                            </tr>
                            <!-- DATA WALI SISWA -->
                            <tr>
                                <th colspan="2" class="text-bold bg-info" style="padding:5px;">6. DATA WALI SISWA</th>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <!-- <th>:</th> -->
                                <td><?php echo ucwords($siswa->nama_wali); ?></td>
                            </tr>
                            <tr>
                                <th>NIK Wali</th>
                                <!-- <th>:</th> -->
                                <td><?php echo ucwords($siswa->nik_wali); ?></td>
                            </tr>
                            <tr>
                                <th>Pendidikan</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->pdd_wali; ?></td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->pekerjaan_wali; ?></td>
                            </tr>
                            <tr>
                                <th>Penghasilan</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->penghasilan_wali; ?></td>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-bold bg-info" style="padding:5px;">7. PENDAFTARAN</th>
                            </tr>
                            <tr>
                                <th>Tanggal Register</th>
                                <!-- <th>:</th> -->
                                <td><?php echo $siswa->tgl_siswa; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="panel">
                    <div class="panel-heading bg-primary-600">
                        <h7 class="panel-title"><i class="glyphicon glyphicon-cloud-upload"></i>&nbsp; <b>LAMPIRAN BERKAS</b></h7>
                    </div>
                    <div class="panel-body">
                        <table class="table table-xs table-bordered table-striped" width="100%">
                            <thead class="bg-orange-400">
                                <tr>
                                    <th class="text-center" width="5%" style="padding:5px;">No.</th>
                                    <th class="text-left">Jenis</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-left">Ijazah</td>
                                    <td class="text-center">
                                    <?php if ($siswa->file_ijazah == NULL) { ?>
                                        <label class="label label-danger" style="margin-top: 5px;">
                                         <i class="icon-cross3"></i> belum</label>
                                         <?php } else { ?>
                                            <label class="label label-success" style="margin-top: 5px;">
                                            <i class="icon-checkmark2"></i>
                                            <a href="<?php echo cek_file($siswa->file_ijazah); ?>"
                                             target="_blank"
                                             rel="noopener noreferrer"
                                             class="text-white">sudah</a></label>
                                             <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-left">Akte Kelahiran</td>
                                    <td class="text-center">
                                    <?php if ($siswa->file_akte == NULL) { ?>
                                        <label class="label label-danger" style="margin-top: 5px;">
                                         <i class="icon-cross3"></i> belum</label>
                                         <?php } else { ?>
                                            <label class="label label-success" style="margin-top: 5px;">
                                            <i class="icon-checkmark2"></i>
                                            <a href="<?php echo cek_file($siswa->file_akte); ?>"
                                             target="_blank"
                                             rel="noopener noreferrer"
                                             class="text-white">sudah</a></label>
                                             <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-left">Kartu Keluarga</td>
                                    <td class="text-center">
                                        <?php if ($siswa->file_kk == NULL) { ?>
                                        <label class="label label-danger" style="margin-top: 5px;">
                                         <i class="icon-cross3"></i> belum</label>
                                         <?php } else { ?>
                                            <label class="label label-success" style="margin-top: 5px;">
                                            <i class="icon-checkmark2"></i>
                                            <a href="<?php echo cek_file($siswa->file_kk); ?>"
                                             target="_blank"
                                             rel="noopener noreferrer"
                                             class="text-white">sudah</a></label>
                                             <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="text-left">Rapot kelas 1-6</td>
                                    <td class="text-center">
                                    <?php if ($siswa->file_rapot == NULL) { ?>
                                        <label class="label label-danger" style="margin-top: 5px;">
                                         <i class="icon-cross3"></i> belum</label>
                                         <?php } else { ?>
                                            <label class="label label-success" style="margin-top: 5px;">
                                            <i class="icon-checkmark2"></i>
                                            <a href="<?php echo cek_file($siswa->file_rapot); ?>"
                                             target="_blank"
                                             rel="noopener noreferrer"
                                             class="text-white">sudah</a></label>
                                             <?php } ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <?php if ($siswa->status_verifikasi == 0) { ?>
                            <a href="panel_admin/verifikasi/ver/<?php echo $siswa->no_pendaftaran; ?>" class="btn btn-success btn-xs text-bold" title="Verifikasi" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-checkmark2"></i> Verifikasi Berkas</a>
                        <?php } else { ?>
                            <a href="panel_admin/verifikasi/ver/<?php echo $siswa->no_pendaftaran; ?>" class="btn btn-danger btn-xs text-bold" title="Batal Verifikasi" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-cross3"></i>Batalkan Verifikasi Berkas</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /dashboard content -->