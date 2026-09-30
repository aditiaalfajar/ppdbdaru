<?php
defined('BASEPATH') or exit('No direct script access allowed');
$id = $this->db->get('tbl_user')->row_array();
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Basic datatable -->
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="panel">
                    <div class="panel-heading bg-orange-400">
                        <h7 class="panel-title"><i class="glyphicon glyphicon-stats"></i>&nbsp; <b>EDIT DATA PENDAFTARAN</b></h7>
                    </div>
                    <div class="panel-body">
                        <?php
                        echo $this->session->flashdata('msg');
                        ?>
                        <ul class="nav nav-pills text-center text-bold">
                            <li class="active"><a data-toggle="tab" href="#home">PROFIL</a></li>
                            <li><a data-toggle="tab" href="#menu1">SEKOLAH</a></li>
                            <li><a data-toggle="tab" href="#menu2">ORANG TUA</a></li>
                            <li><a data-toggle="tab" href="#menu3">WALI</a></li>
                        </ul>
                        <hr>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <fieldset class="content-group text-bold small">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-bold" style="margin-top: 10px; text-align: left;">No. Pendaftaran :</label>
                                        <div class="col-sm-4">
                                            <input name="no_pendaftaran" readonly type="text" class="form-control" value="<?php echo $siswa->no_pendaftaran; ?>">
                                            <input name="old_user" readonly type="hidden" class="form-control" value="<?php echo $siswa->id_siswa; ?>">
                                        </div>
                                        <label class="col-sm-2 col-form-label text-bold" style="margin-top: 10px; text-align: left;">NIK Siswa :</label>
                                        <div class="col-sm-4">
                                            <input name="nik" type="number" class="form-control" value="<?php echo $siswa->nik; ?>" maxlength="16">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-bold" style="margin-top: 10px; text-align: left;">NISN :</label>
                                        <div class="col-sm-4">
                                            <input name="nisn" type="number" class="form-control" value="<?php echo $siswa->nisn; ?>" maxlength="12">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label " style=" margin-top: 10px; text-align: left;">Nama Lengkap :</label>
                                        <div class="col-sm-4">
                                            <input name="nama_lengkap" type="text" class="form-control" placeholder="" value="<?php echo $siswa->nama_lengkap; ?>">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Jenis Kelamin :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="jk">
                                                <option value="">Pilih salah satu</option>
                                                <?php
                                                $sqlJK = array(
                                                    "Laki-Laki",
                                                    "Perempuan"
                                                );
                                                foreach ($sqlJK as $jk) {
                                                    if ($jk == $siswa->jk) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    }
                                                    echo "<option value='$jk' $selected>$jk</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Tempat Lahir :</label>
                                        <div class="col-sm-4">
                                            <input name="tempat_lahir" type="text" class="form-control" value="<?php echo $siswa->tempat_lahir; ?>">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Tanggal Lahir :</label>
                                        <div class="col-sm-4">
                                            <input name="tgl_lahir" type="text" class="form-control" value="<?php echo $siswa->tgl_lahir; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Agama :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="agama">
                                                <option value="">Pilih salah satu</option>
                                                <?php
                                                $sqlList = array(
                                                    "Islam",
                                                    "Kristen",
                                                    "Katolik",
                                                    "Hindu",
                                                    "Budha",
                                                    "Lainnya"
                                                );
                                                foreach ($sqlList as $agm) {
                                                    if ($agm == $siswa->agama) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    }
                                                    echo "<option value='$agm' $selected>$agm</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Status Anak :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="status_keluarga">
                                                <option value="">Pilih salah satu</option>
                                                <?php
                                                $sqlList = array(
                                                    "Anak Kandung",
                                                    "Anak Tiri",
                                                    "Anak Angkat"
                                                );
                                                foreach ($sqlList as $sk) {
                                                    if ($sk == $siswa->status_keluarga) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    }
                                                    echo "<option value='$sk' $selected>$sk</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Anak Ke :</label>
                                        <div class="col-sm-4">
                                            <input name="anak_ke" type="number" class="form-control" value="<?php echo $siswa->anak_ke; ?>" maxlength="2">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Jumlah Saudara :</label>
                                        <div class="col-sm-4">
                                            <input name="jml_saudara" type="number" class="form-control" value="<?php echo $siswa->jml_saudara; ?>" maxlength="2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Tempat Tinggal :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="jenis_tinggal">
                                                <option value="">Pilih salah satu</option>
                                                <?php
                                                $sqlList = array(
                                                    1 => "Tinggal dengan orang tua/wali",
                                                    2 => "Ikut saudara/kerabat",
                                                    3 => "Asrama Madrasah",
                                                    4 => "Asrama Pesantren",
                                                    5 => "Kontrka/Kos"
                                                );
                                                foreach ($sqlList as $id_tp => $tp) {
                                                    if ($id_tp == $siswa->jenis_tinggal) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    }
                                                    echo "<option value='$id_tp' $selected>$tp</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Telp. Siswa :</label>
                                        <div class="col-sm-4">
                                            <input name="no_hp_siswa" type="text" class="form-control" value="<?php echo $siswa->no_hp_siswa; ?>" maxlength="13">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Alamat Siswa :</label>
                                        <div class="col-sm-10">
                                            <input name="alamat_siswa" type="text" class="form-control" value="<?php echo $siswa->alamat_siswa; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Desa :</label>
                                        <div class="col-sm-4">
                                            <input name="desa" type="text" class="form-control" value="<?php echo $siswa->desa; ?>">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Kecamatan :</label>
                                        <div class="col-sm-4">
                                            <input name="kec" type="text" class="form-control" value="<?php echo $siswa->kec; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Kabupaten :</label>
                                        <div class="col-sm-4">
                                            <input name="kab" type="text" class="form-control" value="<?php echo $siswa->kab; ?>">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Provinsi :</label>
                                        <div class="col-sm-4">
                                            <input name="prov" type="text" class="form-control" value="<?php echo $siswa->prov; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">No. KK :</label>
                                        <div class="col-sm-4">
                                            <input name="no_kk" type="number" class="form-control" value="<?php echo $siswa->no_kk; ?>" maxlength="16">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Kepala Keluarga :</label>
                                        <div class="col-sm-4">
                                            <input name="kepala_keluarga" type="text" class="form-control" value="<?php echo $siswa->kepala_keluarga; ?>">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <h5><b>DATA SEKOLAH ASAL</b></h5>
                                <fieldset class="content-group text-bold small">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Asal Sekolah :</label>
                                        <div class="col-sm-4">
                                            <input name="nama_sekolah" type="text" class="form-control" value="<?php echo $siswa->nama_sekolah; ?>">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">NPSN :</label>
                                        <div class="col-sm-4">
                                            <input name="npsn_sekolah" type="number" class="form-control" value="<?php echo $siswa->npsn_sekolah; ?>" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Status :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="status_sekolah">
                                                <option value="">Pilih salah satu</option>
                                                <?php
                                                $sqlList = array(
                                                    "NEGERI",
                                                    "SWASTA"
                                                );
                                                foreach ($sqlList as $status_sekolah) {
                                                    if ($status_sekolah == $siswa->status_sekolah) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    }
                                                    echo "<option value='$status_sekolah' $selected>$status_sekolah</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Jenjang :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="jenjang_sekolah">
                                                <option value="">Pilih salah satu</option>
                                                <?php
                                                $sqlList = array(
                                                   1 => "SD",
2 => "MI",
3 => "SD Terbuka",
4 => "SLB-SD",
5 => "Paket A"
                                                );
                                                foreach ($sqlList as $id_jenjang_sekolah => $jenjang_sekolah) {
                                                    if ($id_jenjang_sekolah == $siswa->jenjang_sekolah) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    }
                                                    echo "<option value='$id_jenjang_sekolah' $selected>$jenjang_sekolah</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Lokasi :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="lokasi_sekolah">
                                                <option value="">Pilih salah satu</option>
                                                <?php
                                                $sqlList = array(
                                                    1 => "Dalam Kabupaten/Kota",
                                                    2 => "Dalam Provinsi",
                                                    3 => "Luar Provinsi",
                                                    4 => "Luar Negeri"
                                                );
                                                foreach ($sqlList as $id_lokasi_sekolah => $lokasi_sekolah) {
                                                    if ($id_lokasi_sekolah == $siswa->lokasi_sekolah) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    }
                                                    echo "<option value='$id_lokasi_sekolah' $selected>$lokasi_sekolah</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <h5><b>BANTUAN & BEASISWA</b></h5>
                                    <!-- bantuan & beasiswa -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">PELAJARAN FAVORIT :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="komp_ahli">
                                                <option value="">Pilih salah satu</option>
                                                <?php
                                                $sqlList = array(
                                                    "IPA",
                                                    "IPS",
                                                    "UMUM",
                                                    "LAINNYA"
                                                );
                                                foreach ($sqlList as $komp_ahli) {
                                                    if ($komp_ahli == $siswa->komp_ahli) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    }
                                                    echo "<option value='$komp_ahli' $selected>$komp_ahli</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Kjp :</label>
                                        <div class="col-sm-4">
                                            <input name="no_kjp" type="text" class="form-control" value="<?php echo $siswa->no_kjp; ?>" maxlength="16">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">PKH :</label>
                                        <div class="col-sm-4">
                                            <input name="no_pkh" type="text" class="form-control" value="<?php echo $siswa->no_pkh; ?>" maxlength="16">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">KIP :</label>
                                        <div class="col-sm-4">
                                            <input name="no_kip" type="text" class="form-control" value="<?php echo $siswa->no_kip; ?>" maxlength="16">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <h5><b>DATA AYAH</b></h5>
                                <fieldset class="content-group text-bold small">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Nama Ayah :</label>
                                        <div class="col-sm-4">
                                            <input name="nama_ayah" type="text" class="form-control" value="<?php echo $siswa->nama_ayah; ?>">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">NIK Ayah :</label>
                                        <div class="col-sm-4">
                                            <input name="nik_ayah" type="text" class="form-control" value="<?php echo $siswa->nik_ayah; ?>" maxlength="16">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Tahun Lahir :</label>
                                        <div class="col-sm-4">
                                            <input name="th_lahir_ayah" type="number" class="form-control" value="<?php echo $siswa->th_lahir_ayah; ?>">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Status Ayah :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="status_ayah">
                                                <option value="">Pilih salah satu</option>
                                                <?php
                                                $sqlList = array(
                                                    1 => "Masih Hidup",
                                                    2 => "Sudah Meninggal",
                                                    3 => "Tidak Diketahui"
                                                );
                                                foreach ($sqlList as $id_sa => $sa) {
                                                    if ($id_sa == $siswa->status_ayah) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    }
                                                    echo "<option value='$id_sa' $selected>$sa</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Pekerjaan :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="pekerjaan_ayah">
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($v_pekerjaan_ayah as $pa) :
                                                    if ($pa->nama_pekerjaan == $siswa->pekerjaan_ayah) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    } ?>
                                                    <option value="<?php echo $pa->nama_pekerjaan; ?>" <?php echo $selected; ?>><?php echo $pa->nama_pekerjaan; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Penghasilan :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="penghasilan_ayah">
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($v_penghasilan as $ua) :
                                                    if ($ua->nama_penghasilan == $siswa->penghasilan_ayah) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    } ?>
                                                    <option value="<?php echo $ua->nama_penghasilan; ?>" <?php echo $selected; ?>><?php echo $ua->nama_penghasilan; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Pendidikan :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="pdd_ayah">
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($v_pdd as $pdd) :
                                                    if ($pdd->nama_pdd == $siswa->pdd_ayah) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    } ?>
                                                    <option value="<?php echo $pdd->nama_pdd; ?>" <?php echo $selected; ?>><?php echo $pdd->nama_pdd; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <h5><b>DATA IBU</b></h5>
                                    <!-- biodata ibu -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Nama Ibu :</label>
                                        <div class="col-sm-4">
                                            <input name="nama_ibu" type="text" class="form-control" value="<?php echo $siswa->nama_ibu; ?>">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">NIK Ibu :</label>
                                        <div class="col-sm-4">
                                            <input name="nik_ibu" type="text" class="form-control" value="<?php echo $siswa->nik_ibu; ?>" maxlength="16">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Tahun Lahir :</label>
                                        <div class="col-sm-4">
                                            <input name="th_lahir_ibu" type="number" class="form-control" value="<?php echo $siswa->th_lahir_ibu; ?>">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Status Ibu :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="status_ibu">
                                                <option value="">Pilih salah satu</option>
                                                <?php
                                                $sqlList = array(
                                                    1 => "Masih Hidup",
                                                    2 => "Sudah Meninggal",
                                                    3 => "Tidak Diketahui"
                                                );
                                                foreach ($sqlList as $id_sa => $sa) {
                                                    if ($id_sa == $siswa->status_ibu) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    }
                                                    echo "<option value='$id_sa' $selected>$sa</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Pekerjaan :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="pekerjaan_ibu">
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($v_pekerjaan_ayah as $pi) :
                                                    if ($pi->nama_pekerjaan == $siswa->pekerjaan_ibu) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    } ?>
                                                    <option value="<?php echo $pi->nama_pekerjaan; ?>" <?php echo $selected; ?>><?php echo $pi->nama_pekerjaan; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Penghasilan :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="penghasilan_ibu">
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($v_penghasilan as $ua) :
                                                    if ($ua->nama_penghasilan == $siswa->penghasilan_ibu) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    } ?>
                                                    <option value="<?php echo $ua->nama_penghasilan; ?>" <?php echo $selected; ?>><?php echo $ua->nama_penghasilan; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Pendidikan :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="pdd_ibu">
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($v_pdd as $pdd) :
                                                    if ($pdd->nama_pdd == $siswa->pdd_ibu) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    } ?>
                                                    <option value="<?php echo $pdd->nama_pdd; ?>" <?php echo $selected; ?>><?php echo $pdd->nama_pdd; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <!-- biodata wali -->
                                <fieldset class="content-group text-bold small">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Nama Wali :</label>
                                        <div class="col-sm-4">
                                            <input name="nama_wali" type="text" class="form-control" value="<?php echo $siswa->nama_wali; ?>">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">NIK Wali :</label>
                                        <div class="col-sm-4">
                                            <input name="nik_wali" type="number" class="form-control" value="<?php echo $siswa->nik_wali; ?>" maxlength="16">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Tahun Lahir :</label>
                                        <div class="col-sm-4">
                                            <input name="th_lahir_wali" type="number" class="form-control" value="<?php echo $siswa->th_lahir_wali; ?>">
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Pendidikan :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="pdd_wali">
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($v_pdd as $pdd) :
                                                    if ($pdd->nama_pdd == $siswa->pdd_wali) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    } ?>
                                                    <option value="<?php echo $pdd->nama_pdd; ?>" <?php echo $selected; ?>><?php echo $pdd->nama_pdd; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Pekerjaan :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="pekerjaan_wali">
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($v_pekerjaan_ayah as $pi) :
                                                    if ($pi->nama_pekerjaan == $siswa->pekerjaan_wali) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    } ?>
                                                    <option value="<?php echo $pi->nama_pekerjaan; ?>" <?php echo $selected; ?>><?php echo $pi->nama_pekerjaan; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Penghasilan :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control class" name="penghasilan_wali">
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($v_penghasilan as $ua) :
                                                    if ($ua->nama_penghasilan == $siswa->penghasilan_wali) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = '';
                                                    } ?>
                                                    <option value="<?php echo $ua->nama_penghasilan; ?>" <?php echo $selected; ?>><?php echo $ua->nama_penghasilan; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" style="margin-top: 10px; text-align: left;">Telpon Wali/Ortu :</label>
                                        <div class="col-sm-4">
                                            <input name="no_hp_ortu" type="number" class="form-control" value="<?php echo $siswa->no_hp_ortu; ?>" maxlength="13">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <hr style="margin-top:10px;">
                        <center><button type="submit" name="btnupdate" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i><strong>&nbsp; Update Data</strong></button></center>
            </form>
        </div>
    </div>
</div>