<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{

	function base_biodata($sess)
	{
		return $this->db->get_where('tbl_siswa', "no_pendaftaran='$sess'")->row();
	}

	function get_fy()
	{
		return $this->db->get_where('tbl_web', "id_web=1")->row()->tapel;
	}

	function get_print($menu = '', $data = '')
	{
		switch ($menu) {
			case 'passed':
				return $this->db->like('tgl_siswa', date('Y'), 'after')->get_where('tbl_siswa', "no_pendaftaran='$data'")->row();
				break;

			case 'announcement':
				return $this->db->get_where('tbl_pengumuman', "id_pengumuman='1'")->row();
				break;

			default:
				# code...
				break;
		}
	}

	function get_val($type, $sess, $subject)
	{
		switch ($type) {
			default:
				# code...
				break;
		}
	}

	function statistik_data()
	{
	}
	function updateupload($id = '', $jenis = '', $file = '')
	{
		if ($jenis == 'ijazah') {
			// $file = $id . "_" . $jenis . ".pdf";
			$save = $this->db->query("UPDATE tbl_siswa SET file_ijazah='$file' WHERE no_pendaftaran = '$id'");
			return $save;
		} elseif ($jenis == 'akte') {
			// $file = $id . "_" . $jenis . ".pdf";
			$save = $this->db->query("UPDATE tbl_siswa SET file_akte='$file' WHERE no_pendaftaran = '$id'");
			return $save;
		} elseif ($jenis == 'kk') {
			// $file = $id . "_" . $jenis . ".pdf";
			$save = $this->db->query("UPDATE tbl_siswa SET file_kk='$file' WHERE no_pendaftaran = '$id'");
			return $save;
		} elseif ($jenis == 'rapot') {
			// $file = $id . "_" . $jenis . ".pdf";
			$save = $this->db->query("UPDATE tbl_siswa SET file_rapot='$file' WHERE no_pendaftaran = '$id'");
			return $save;
		}
	}
	function edit_siswa($menu = '', $data = '')
	{
		switch ($menu) {
			case 'update':
				$old_user = $data['id_siswa'];
				$data = array(
					'no_pendaftaran'		=> $data['no_pendaftaran'],
					'nisn'					=> $data['nisn'],
					'nik'					=> $data['nik'],
					'nama_lengkap'			=> $data['nama_lengkap'],
					'jk'					=> $data['jk'],
					'tempat_lahir'			=> $data['tempat_lahir'],
					'tgl_lahir'				=> $data['tgl_lahir'],
					'agama'					=> $data['agama'],
					'status_keluarga'		=> $data['status_keluarga'],
					'anak_ke'				=> $data['anak_ke'],
					'jml_saudara'			=> $data['jml_saudara'],
					// 'hobi'				=> $data['hobi'],
					// 'cita'				=> $data['cita'],
					// 'paud'				=> $data['paud'],
					// 'tk'					=> $data['tk'],
					'no_hp_siswa'			=> $data['no_hp_siswa'],
					'jenis_tinggal'			=> $data['jenis_tinggal'],
					'alamat_siswa'			=> $data['alamat_siswa'],
					'desa'					=> $data['desa'],
					'kec'					=> $data['kec'],
					'kab'					=> $data['kab'],
					'prov'					=> $data['prov'],
					// 'kode_pos'			=> $data['kode_pos'],
					// 'jarak'				=> $data['jarak'],
					// 'trans'				=> $data['trans'],
					'no_kk'					=> $data['no_kk'],
					'kepala_keluarga'		=> $data['kepala_keluarga'],
					'nama_ayah'				=> $data['nama_ayah'],
					'th_lahir_ayah'			=> $data['th_lahir_ayah'],
					'status_ayah'			=> $data['status_ayah'],
					'nik_ayah'				=> $data['nik_ayah'],
					'pdd_ayah'				=> $data['pdd_ayah'],
					'pekerjaan_ayah'		=> $data['pekerjaan_ayah'],
					'nama_ibu'				=> $data['nama_ibu'],
					'th_lahir_ibu'			=> $data['th_lahir_ibu'],
					'status_ibu'			=> $data['status_ibu'],
					'nik_ibu'				=> $data['nik_ibu'],
					'pdd_ibu'				=> $data['pdd_ibu'],
					'pekerjaan_ibu'			=> $data['pekerjaan_ibu'],
					'nama_wali'				=> $data['nama_wali'],
					'th_lahir_wali'			=> $data['th_lahir_wali'],
					'nik_wali'				=> $data['nik_wali'],
					'pdd_wali'				=> $data['pdd_wali'],
					'pekerjaan_wali'		=> $data['pekerjaan_wali'],
					'penghasilan_ayah'		=> $data['penghasilan_ayah'],
					'penghasilan_ibu'		=> $data['penghasilan_ibu'],
					'penghasilan_wali'		=> $data['penghasilan_wali'],
					'no_kjp'				=> $data['no_kjp'],
					'no_pkh'				=> $data['no_pkh'],
					'no_kip'				=> $data['no_kip'],
					'no_hp_ortu'			=> $data['no_hp_ortu'],
					'nama_sekolah'			=> $data['nama_sekolah'],
					'jenjang_sekolah'		=> $data['jenjang_sekolah'],
					'status_sekolah'		=> $data['status_sekolah'],
					'npsn_sekolah'			=> $data['npsn_sekolah'],
					'lokasi_sekolah'		=> $data['lokasi_sekolah'],
					'komp_ahli'				=> $data['komp_ahli']
				);
				return $this->db->update('tbl_siswa', $data, array('id_siswa' => $old_user));
				break;
			default:
				# code...
				break;
		}
	}
}
