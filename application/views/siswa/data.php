<?php
defined('BASEPATH') or exit('No direct script access allowed');
$id = $this->db->get('tbl_user')->row_array();
?>
<?php
error_reporting(0);
$user = $user; ?>
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
            <div class="panel">
                <div class="panel-heading bg-orange-400">
                    <h7 class="panel-title"><i class="glyphicon glyphicon-align-justify"></i>&nbsp; <b>DATA PENDAFTARAN SISWA</b></h7>
                </div>
                <hr style="margin:0px;">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-striped" width="100%">
                            <thead class="bg-primary">
                                <tr>
                                    <th>No.</th>
                                    <th class="text-center">Verifikasi</th>
                                    <th>No. Pendaftaran</th>
                                    <th>NISN</th>
                                    <th>Nama Lengkap</th>
                                    <th class="text-center">Kelulusan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td align="center">
                                        <?php if ($user->status_verifikasi == 0) { ?>
                                            <label class="label label-success">Terverifikasi</label>
                                        <?php } else { ?>
                                            <label class="label label-warning">Belum diverifikasi</label>
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $user->no_pendaftaran; ?></td>
                                    <td><?php echo $user->nisn; ?></td>
                                    <td><?php echo $user->nama_lengkap; ?></td>
                                    <td class="text-center">
                                        <?php if ($user->status_pendaftaran == 'lulus') { ?>
                                            <label class="label label-success">Lulus</label>
                                        <?php } elseif ($user->status_pendaftaran == 'tidak lulus') { ?>
                                            <label class="label label-danger">Tidak Lulus</label>
                                        <?php } else { ?>
                                            <label class="label label-warning">Proses</label>
                                        <?php } ?>
                                    </td>
                                    <td align="center">
                                        <a href="panel_siswa/biodata" class="btn bg-orange-400 btn-xs" title="Detail"><i class="glyphicon glyphicon-eye-open"></i></a>
                                        <a href="panel_siswa/editbiodata" class="btn bg-primary-800 btn-xs" title="Edit Data"><i class="glyphicon glyphicon-edit"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-striped" width="100%">
                            <thead class="bg-primary">
                                <tr>
                                    <th class="text-center">Jenis Berkas</th>
                                    <th class="text-center">Ijazah</th>
                                    <th class="text-center">Akte Kelahiran</th>
                                    <th class="text-center">Kartu Keluarga</th>
                                    <th class="text-center">Rapot</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">Status</td>
                                    <td class="text-center">
                                        <?php if ($user->file_ijazah == NULL) { ?>
                                            <label class="label label-danger" style="margin-top: 5px;"><i class="icon-cross3"></i> belum upload</label>
                                        <?php } else { ?>
                                            <label class="label label-success" style="margin-top: 5px;"><i class="icon-checkmark2"></i> sudah upload</label>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($user->file_akte == NULL) { ?>
                                            <label class="label label-danger" style="margin-top: 5px;"><i class="icon-cross3"></i> belum upload</label>
                                        <?php } else { ?>
                                            <label class="label label-success" style="margin-top: 5px;"><i class="icon-checkmark2"></i> sudah upload</label>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($user->file_kk == NULL) { ?>
                                            <label class="label label-danger" style="margin-top: 5px;"><i class="icon-cross3"></i> belum upload</label>
                                        <?php } else { ?>
                                            <label class="label label-success" style="margin-top: 5px;"><i class="icon-checkmark2"></i> sudah upload</label>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($user->file_rapot == NULL) { ?>
                                            <label class="label label-danger" style="margin-top: 5px;"><i class="icon-cross3"></i> belum upload</label>
                                        <?php } else { ?>
                                            <label class="label label-success" style="margin-top: 5px;"><i class="icon-checkmark2"></i> sudah upload</label>
                                        <?php } ?>
                                    </td>
                                </tr>
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