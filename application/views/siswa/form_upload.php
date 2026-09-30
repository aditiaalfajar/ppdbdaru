<?php
defined('BASEPATH') or exit('No direct script access allowed');
$id = $this->db->get('tbl_user')->row_array();
error_reporting(0);
$user = $user; ?>
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Basic datatable -->
            <div class="col-md-6">
                <?php echo form_open_multipart('panel_siswa/simpanberkas') ?>
                <div class="panel">
                    <div class="panel-heading bg-orange-400">
                        <h7 class="panel-title"><i class="glyphicon glyphicon-stats"></i>&nbsp; <b>UPLOAD BERKAS PPDB Online</b></h7>
                    </div>
                    <div class="panel-body">
                        <?php
                        echo $this->session->flashdata('msg');
                        ?>
                        <?php echo $error; ?>
                        <fieldset class="content-group text-bold small">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-bold small" style="margin-top: 10px; text-align: left;">JENIS FILE BERKAS :</label>
                                <div class="col-sm-8">
                                    <input name="old_user" readonly type="hidden" class="form-control" value="<?php echo $user->id_siswa; ?>">
                                    <select class="form-control class" name="jenisfile" required>
                                        <option value="">-- Pilih jenis berkas --</option>
                                        <?php
                                        $sqlList = array(
                                            'ijazah'    => "1. Ijazah",
                                            'akte'      => "2. Akte Kelahiran",
                                            'kk'        => "3. Kartu Keluarga",
                                            'rapot'     => "4. Rapot 1-5"
                                        );
                                        foreach ($sqlList as $id_tp => $tp) {
                                            echo "<option value='$id_tp'>$tp</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-bold small" style="margin-top: 10px; text-align: left;">UPLOAD BERKAS:</label>
                                <div class="col-sm-8">
                                    <input name="berkasfile" type="file" class="form-control" required>
                                </div>
                            </div>
                        </fieldset>
                        <hr style="margin-top:10px;">
                        <p class="text-right"><input type="submit" value="UPLOAD BERKAS" class="btn btn-primary text-bold"></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading bg-orange-400">
                        <h7 class="panel-title"><i class="glyphicon glyphicon-stats"></i>&nbsp; <b>DATA CALON SISWA</b></h7>
                    </div>
                    <hr style="margin:0px;">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-xs table-bordered table-striped" width="100%">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-center" width="5%">No.</th>
                                        <th class="text-center">Jenis</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Ijazah</td>
                                        <td class="text-center">
                                            <?php if ($user->file_ijazah == NULL) { ?>
                                                <label class="label label-warning" style="padding-top: 5px;">Belum diverifikasi</label>
                                            <?php } else { ?>
                                                <label class="label label-success" style="margin-top: 5px;">Terverifikasi</label>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">Akte Kelahiran</td>
                                        <td class="text-center">
                                            <?php if ($user->file_ijazah == NULL) { ?>
                                                <label class="label label-warning" style="padding-top: 5px;">Belum diverifikasi</label>
                                            <?php } else { ?>
                                                <label class="label label-success" style="margin-top: 5px;">Terverifikasi</label>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">Kartu Keluarga</td>
                                        <td class="text-center">
                                            <?php if ($user->file_ijazah == NULL) { ?>
                                                <label class="label label-warning" style="padding-top: 5px;">Belum diverifikasi</label>
                                            <?php } else { ?>
                                                <label class="label label-success" style="margin-top: 5px;">Terverifikasi</label>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">Rapot kelas 1-6</td>
                                        <td class="text-center">
                                            <?php if ($user->file_ijazah == NULL) { ?>
                                                <label class="label label-warning" style="padding-top: 5px;">Belum diverifikasi</label>
                                            <?php } else { ?>
                                                <label class="label label-success" style="margin-top: 5px;">Terverifikasi</label>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>