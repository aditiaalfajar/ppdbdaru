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
      <div class="col-md-7">
        <div class="panel">
          <div class="panel-heading bg-orange-400">
            <h7 class="panel-title"><i class="glyphicon glyphicon-user"></i>&nbsp; <b>IDENTITAS DIRI SISWA</b></h7>
          </div>
          <div class="panel-body">
            <table class=" table table-xs table-bordered table-striped">
              <tr>
                <th colspan="2" class="text-bold bg-primary" style="padding:5px;">1. BIODATA SISWA</th>
              </tr>
              <tr>
                <th>No. Pendaftaran</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->no_pendaftaran; ?></td>
              </tr>
              <tr>
                <th>NISN</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->nisn; ?></td>
              </tr>
              <tr>
                <th>NIK</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->nik; ?></td>
              </tr>
              <tr>
                <th>Nama Lengkap</th>
                <!-- <th>:</th> -->
                <td><?php echo ucwords($user->nama_lengkap); ?></td>
              </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->jk; ?></td>
              </tr>
              <tr>
                <th>Tempat Lahir</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->tempat_lahir; ?></td>
              </tr>
              <tr>
                <th>Tanggal Lahir</th>
                <!-- <th>:</th> -->
                <td><?php echo $this->lib_data->tgl_id($user->tgl_lahir); ?></td>
              </tr>
              <tr>
                <th>Agama</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->agama; ?></td>
              </tr>
              <tr>
                <th>Status anak</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->status_keluarga; ?></td>
              </tr>
              <tr>
                <th>Alamat</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->alamat_siswa; ?> , <?php echo $user->desa; ?> <?php echo $user->kec; ?> <?php echo $user->kab; ?> <?php echo $user->kode_pos; ?></td>
              </tr>
              <tr>
                <th>No. Handphone</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->no_hp_siswa; ?></td>
              </tr>
              <!-- </table> -->
              <!-- <table class="table table-xs table-bordered table-striped"> -->
              <!-- DATA SEKOLAH SISWA -->
              <tr>
                <th colspan="3" class="text-bold bg-primary" style="padding:5px;">2. DATA SEKOLAH</th>
              </tr>
              <tr>
                <th>Nama Sekolah</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->nama_sekolah; ?></td>
              </tr>
              <tr>
                <th>NPSN Sekolah</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->npsn_sekolah; ?></td>
              </tr>
              <tr>
                <th>Status Sekolah</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->status_sekolah; ?></td>
              </tr>
              <!-- DATA KARTU SISWA -->
              <tr>
                <th colspan="3" class="text-bold bg-primary" style="padding:5px;">3. BEASISWA/BANTUAN</th>
              </tr>
              <tr>
                <th width="30%">No. Kjp</th>
                <!-- <th width="1%">:</th> -->
                <td><?php echo $user->no_kjp; ?></td>
              </tr>
              <tr>
                <th width="30%">No. PKH</th>
                <!-- <th width="1%">:</th> -->
                <td><?php echo $user->no_pkh; ?></td>
              </tr>
              <tr>
                <th width="30%">No. KIP</th>
                <!-- <th width="1%">:</th> -->
                <td><?php echo $user->no_kip; ?></td>
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
                <td><?php echo ucwords($user->nama_ayah); ?></td>
              </tr>
              <tr>
                <th>NIK Ayah</th>
                <!-- <th>:</th> -->
                <td><?php echo ucwords($user->nik_ayah); ?></td>
              </tr>
              <tr>
                <th>Pendidikan</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->pdd_ayah; ?></td>
              </tr>
              <tr>
                <th>Pekerjaan</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->pekerjaan_ayah; ?></td>
              </tr>
              <tr>
                <th>Penghasilan</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->penghasilan_ayah; ?></td>
              </tr>
              <!-- BIODATA IBU SISWA -->
              <tr>
                <th colspan="2" class="text-bold bg-info" style="padding:5px;">5. BIODATA IBU SISWA</th>
              </tr>
              <tr>
                <th>Nama Lengkap</th>
                <!-- <th>:</th> -->
                <td><?php echo ucwords($user->nama_ibu); ?></td>
              </tr>
              <tr>
                <th>NIK Ibu</th>
                <!-- <th>:</th> -->
                <td><?php echo ucwords($user->nik_ibu); ?></td>
              </tr>
              <tr>
                <th>Pendidikan</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->pdd_ibu; ?></td>
              </tr>
              <tr>
                <th>Pekerjaan</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->pekerjaan_ibu; ?></td>
              </tr>
              <tr>
                <th>Penghasilan</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->penghasilan_ibu; ?></td>
              </tr>
              <!-- DATA WALI SISWA -->
              <tr>
                <th colspan="2" class="text-bold bg-info" style="padding:5px;">6. DATA WALI SISWA</th>
              </tr>
              <tr>
                <th>Nama Lengkap</th>
                <!-- <th>:</th> -->
                <td><?php echo ucwords($user->nama_wali); ?></td>
              </tr>
              <tr>
                <th>NIK Wali</th>
                <!-- <th>:</th> -->
                <td><?php echo ucwords($user->nik_wali); ?></td>
              </tr>
              <tr>
                <th>Pendidikan</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->pdd_wali; ?></td>
              </tr>
              <tr>
                <th>Pekerjaan</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->pekerjaan_wali; ?></td>
              </tr>
              <tr>
                <th>Penghasilan</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->penghasilan_wali; ?></td>
              </tr>
              <tr>
                <th colspan="2" class="text-bold bg-info" style="padding:5px;">7. PENDAFTARAN</th>
              </tr>
              <tr>
                <th>Tanggal Register</th>
                <!-- <th>:</th> -->
                <td><?php echo $user->tgl_siswa; ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <?php echo form_open_multipart('panel_siswa/simpanberkas') ?>
        <div class="panel">
          <div class="panel-heading bg-orange-400">
            <h7 class="panel-title"><i class="glyphicon glyphicon-cloud-upload"></i>&nbsp; <b>UPLOAD BERKAS</b></h7>
          </div>
          <div class="panel-body">
            <table class="table table-xs table-bordered table-striped" width="100%">
              <thead class="bg-primary">
                <tr>
                  <th class="text-center" width="5%" style="padding:5px;">No.</th>
                  <span>Format File wajib PDf dengan ukuran Maksimal 2 mb</span>
                  <th class="text-left">Jenis</th>
                  <th class="text-center">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td class="text-left">Ijazah</td>
                  <td class="text-center">
                    <?php if ($user->file_ijazah == NULL) { ?> 
                      <label class="label label-danger" style="margin-top: 5px;"><i class="icon-cross3"></i> belum</label>
                    <?php } else { ?>
                      <label class="label label-success" style="margin-top: 5px;">
                        <i class="icon-checkmark2"></i>
                       <a href="<?php echo cek_file($user->file_ijazah); ?>"
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
                    <?php if ($user->file_akte == NULL) { ?>
                      <label class="label label-danger" style="margin-top: 5px;"><i class="icon-cross3"></i> belum</label>
                      <?php } else { ?>
                       <a href="<?php echo cek_file($user->file_akte); ?>"
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="label label-success"
                       style="margin-top:5px; display:inline-block;">
                       <i class="icon-checkmark2"></i> sudah</a>
                       <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">3</td>
                  <td class="text-left">Kartu Keluarga</td>
                  <td class="text-center">
                    <?php if ($user->file_kk == NULL) { ?>
                      <label class="label label-danger" style="margin-top: 5px;"><i class="icon-cross3"></i> belum</label>
                    <?php } else { ?>
                      <label class="label label-success" style="margin-top: 5px;">
                                            <i class="icon-checkmark2"></i>
                                            <a href="<?php echo cek_file($user->file_kk); ?>"
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
                    <?php if ($user->file_rapot == NULL) { ?>
                      <label class="label label-danger" style="margin-top: 5px;"><i class="icon-cross3"></i> belum</label>
                    <?php } else { ?>
                       <label class="label label-success" style="margin-top: 5px;">
                                            <i class="icon-checkmark2"></i>
                                           <a href="<?php echo cek_file($user->file_rapot); ?>"
                                             target="_blank"
                                             rel="noopener noreferrer"
                                             class="text-white">sudah </a></label>
                    <?php } ?>
                  </td>
                </tr>
              </tbody>
            </table>
            <hr>
         <!-- <?php // echo $this->session->flashdata('msg'); ?> -->
            <fieldset class="content-group text-bold small">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-bold small" style="margin-top: 10px; text-align: left;">JENIS FILE</label>
                <div class="col-sm-9">
                  <input name="old_user" readonly type="hidden" class="form-control" value="<?php echo $user->id_siswa; ?>">
                  <select class="form-control class" name="jenisfile" required>
                    <option value="">-- Pilih jenis berkas --</option>
                    <?php
                    $sqlList = array(
                      'ijazah'    => "1. Ijazah",
                      'akte'      => "2. Akte Kelahiran",
                      'kk'        => "3. Kartu Keluarga",
                      'rapot'     => "4. Rapot kelas 1-6"
                    );
                    foreach ($sqlList as $id_tp => $tp) {
                      echo "<option value='$id_tp'>$tp</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-bold small" style="margin-top: 10px; text-align: left;">UPLOAD</label>
                <div class="col-sm-9">
                  <input name="berkasfile" type="file" class="form-control" required>
                </div>
              </div>
            </fieldset>
            <hr style="margin-top:10px;">
            <center><input type="submit" value="UPLOAD BERKAS" class="btn btn-primary text-bold"></center>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /dashboard content -->