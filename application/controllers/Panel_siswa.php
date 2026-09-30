<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panel_siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		if ($this->session->userdata('no_pendaftaran') == NULL) {
			redirect('');
		} else {
			$data = array(
				'user'		=> $this->siswa->base_biodata($this->session->userdata('no_pendaftaran')),
				'judul_web'	=> "HOME"
			);

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/dashboard', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function pengumuman()
	{
		if ($this->session->userdata('no_pendaftaran') == NULL) {
			redirect('');
		} else {
			$data = array(
				'user'		=> $this->siswa->base_biodata($this->session->userdata('no_pendaftaran')),
				'judul_web'	=> "PENGUMUMAN"
			);

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/pengumuman', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function biodata()
	{
		if ($this->session->userdata('no_pendaftaran') == NULL) {
			redirect('logcs');
		} else {
			$sess = $this->session->userdata('no_pendaftaran');
			$data = array(
				'user'		=> $this->siswa->base_biodata($sess),
				'judul_web'	=> "BIODATA"
			);

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/biodata', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function uploadfile()
	{
		if ($this->session->userdata('no_pendaftaran') == NULL) {
			redirect('logcs');
		} else {
			$sess = $this->session->userdata('no_pendaftaran');
			$data = array(
				'user'		=> $this->siswa->base_biodata($sess),
				'judul_web'	=> "UPLOAD BERKAS"
			);
			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/form_upload', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function simpanberkas()
	{
		$sess = $this->session->userdata('no_pendaftaran');
		$data = array(
			'user'		=> $this->siswa->base_biodata($sess),
			'judul_web'	=> "UPLOAD BERKAS"
		);
		$sql =  $this->db->get_where('tbl_siswa', "no_pendaftaran='$sess'")->row();
		$jenisfile			= $this->input->post('jenisfile');
		$config['upload_path']		= "./upload/file/";
		$config['allowed_types']	= "pdf";
		$config['max_size']			= 1024;
		$config['file_name']		= $sess . "-" . $jenisfile . "-" . sprintf("%06s", time()) . ".pdf";
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('berkasfile')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/form_upload', $error);
			$this->load->view('siswa/footer');
		} else {
			$fileBerkas = $config['file_name'];
			if ($jenisfile == 'ijazah' and $sql->file_ijazah != '') {
				unlink("./upload/file/$sql->file_ijazah");
			} elseif ($jenisfile == 'akte' and $sql->file_akte != '') {
				unlink("./upload/file/$sql->file_akte");
			} elseif ($jenisfile == 'kk' and $sql->file_kk != '') {
				unlink("./upload/file/$sql->file_kk");
			} elseif ($jenisfile == 'rapot' and $sql->file_rapot != '') {
				unlink("./upload/file/$sql->file_rapot");
			}
			$data = array('upload_data' => $this->upload->data());
			$acts = $this->siswa->updateupload($sess, $jenisfile, $fileBerkas);
			redirect('panel_siswa/biodata');
		}
	}

	public function editbiodata()
	{
		if ($this->session->userdata('no_pendaftaran') == NULL) {
			redirect('logcs');
		} else {
			$sess = $this->session->userdata('no_pendaftaran');
			$data = array(
				'user'				=> $this->siswa->base_biodata($sess),
				'siswa'				=> $this->siswa->base_biodata($sess),
				'judul_web'			=> "BIODATA - " . ucwords($this->siswa->base_biodata($sess)->nama_lengkap),
				'v_komp'			=> $this->db->order_by('id_komp', 'ASC')->get('tbl_komp')->result(),
				'v_pdd' 			=> $this->db->order_by('id_pdd', 'ASC')->get('tbl_pdd')->result(),
				'v_pekerjaan_ayah'	=> $this->db->where('ket_pekerjaan', 'ayah')->order_by('id_pekerjaan', 'ASC')->get('tbl_pekerjaan')->result(),
				'v_pekerjaan_ibu'	=> $this->db->where('ket_pekerjaan', 'ibu')->order_by('id_pekerjaan', 'ASC')->get('tbl_pekerjaan')->result(),
				'v_pekerjaan_wali'	=> $this->db->order_by('id_pekerjaan', 'ASC')->group_by('nama_pekerjaan')->get('tbl_pekerjaan')->result(),
				'v_penghasilan'		=> $this->db->order_by('id_penghasilan', 'ASC')->get('tbl_penghasilan')->result()
			);
			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/editbiodata', $data);
			$this->load->view('siswa/footer');
			if (isset($_POST['btnupdate'])) {
				$data = array(
					'id_siswa'				=> $this->input->post('old_user'),
					'no_pendaftaran'		=> $this->input->post('no_pendaftaran'),
					'nama_lengkap'			=> $this->input->post('nama_lengkap'),
					'nisn'					=> $this->input->post('nisn'),
					'nik'					=> $this->input->post('nik'),
					'nama_lengkap'			=> $this->input->post('nama_lengkap'),
					'jk'					=> $this->input->post('jk'),
					'tempat_lahir'			=> $this->input->post('tempat_lahir'),
					'tgl_lahir'				=> $this->input->post('tgl_lahir'),
					'agama'					=> $this->input->post('agama'),
					'status_keluarga'		=> $this->input->post('status_keluarga'),
					'anak_ke'				=> $this->input->post('anak_ke'),
					'jml_saudara'			=> $this->input->post('jml_saudara'),
					// 'hobi'					=> $this->input->post('hobi'),
					// 'cita'					=> $this->input->post('cita'),
					// 'paud'					=> $this->input->post('paud'),
					// 'tk'						=> $this->input->post('tk'),
					'no_hp_siswa'			=> $this->input->post('no_hp_siswa'),
					'jenis_tinggal'			=> $this->input->post('jenis_tinggal'),
					'alamat_siswa'			=> $this->input->post('alamat_siswa'),
					'desa'					=> $this->input->post('desa'),
					'kec'					=> $this->input->post('kec'),
					'kab'					=> $this->input->post('kab'),
					'prov'					=> $this->input->post('prov'),
					// 'kode_pos'				=> $this->input->post('kode_pos'),
					// 'jarak'					=> $this->input->post('jarak'),
					// 'trans'					=> $this->input->post('trans'),
					'no_kk'					=> $this->input->post('no_kk'),
					'kepala_keluarga'		=> $this->input->post('kepala_keluarga'),
					'nama_ayah'				=> $this->input->post('nama_ayah'),
					'th_lahir_ayah'			=> $this->input->post('th_lahir_ayah'),
					'status_ayah'			=> $this->input->post('status_ayah'),
					'nik_ayah'				=> $this->input->post('nik_ayah'),
					'pdd_ayah'				=> $this->input->post('pdd_ayah'),
					'pekerjaan_ayah'		=> $this->input->post('pekerjaan_ayah'),
					'nama_ibu'				=> $this->input->post('nama_ibu'),
					'th_lahir_ibu'			=> $this->input->post('th_lahir_ibu'),
					'status_ibu'			=> $this->input->post('status_ibu'),
					'nik_ibu'				=> $this->input->post('nik_ibu'),
					'pdd_ibu'				=> $this->input->post('pdd_ibu'),
					'pekerjaan_ibu'			=> $this->input->post('pekerjaan_ibu'),
					'nama_wali'				=> $this->input->post('nama_wali'),
					'th_lahir_wali'			=> $this->input->post('th_lahir_wali'),
					'nik_wali'				=> $this->input->post('nik_wali'),
					'pdd_wali'				=> $this->input->post('pdd_wali'),
					'pekerjaan_wali'		=> $this->input->post('pekerjaan_wali'),
					'penghasilan_ayah'		=> $this->input->post('penghasilan_ayah'),
					'penghasilan_ibu'		=> $this->input->post('penghasilan_ibu'),
					'penghasilan_wali'		=> $this->input->post('penghasilan_wali'),
					'no_kjp'				=> $this->input->post('no_kjp'),
					'no_pkh'				=> $this->input->post('no_pkh'),
					'no_kip'				=> $this->input->post('no_kip'),
					'no_hp_ortu'			=> $this->input->post('no_hp_ortu'),
					'nama_sekolah'			=> $this->input->post('nama_sekolah'),
					'jenjang_sekolah'		=> $this->input->post('jenjang_sekolah'),
					'status_sekolah'		=> $this->input->post('status_sekolah'),
					'npsn_sekolah'			=> $this->input->post('npsn_sekolah'),
					'lokasi_sekolah'		=> $this->input->post('lokasi_sekolah'),
					'komp_ahli'				=> $this->input->post('komp_ahli')

				);
				$acts = $this->siswa->edit_siswa('update', $data);
				$this->session->has_userdata('id_siswa');
				$this->session->set_userdata('id_siswa', $data['no_pendaftaran']);
				$this->session->set_flashdata('msg', $this->err->update_admin('no_pendaftaran'));
				redirect('panel_siswa/editbiodata/');
			}
		}
	}

	public function biolistdata()
	{
		if ($this->session->userdata('no_pendaftaran') == NULL) {
			redirect('logcs');
		} else {
			$sess = $this->session->userdata('no_pendaftaran');
			$data = array(
				'user'		=> $this->siswa->base_biodata($sess),
				'judul_web'	=> "DATA CALON SISWA"
			);

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/data', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function rekap_nilai()
	{
		if ($this->session->userdata('no_pendaftaran') == NULL) {
			redirect('logcs');
		}

		$sess 		= $this->session->userdata('no_pendaftaran');
		$base_bio 	= $this->siswa->base_biodata($sess);

		$data = array(
			'user'			=> $base_bio,
			'judul_web'		=> "Cetak Rekap Nilai " . ucwords($base_bio->nama_lengkap),
			'thn_ppdb'		=> $this->siswa->get_fy(),
			'nilai_rapor'	=> $this->siswa->get_print('study-report', $sess)->rata_rata_nilai,
			'rapor'			=> array(
				'sci'	=> $this->siswa->get_val('rapor', $sess, "Ilmu Pengetahuan Alam (IPA)"),
				'soc'	=> $this->siswa->get_val('rapor', $sess, "Ilmu Pengetahuan Sosial (IPS)"),
				'mat'	=> $this->siswa->get_val('rapor', $sess, "Matematika"),
				'ind'	=> $this->siswa->get_val('rapor', $sess, "Bahasa Indonesia"),
				'eng'	=> $this->siswa->get_val('rapor', $sess, "Bahasa Inggris"),
				'rlg'	=> $this->siswa->get_val('rapor', $sess, "Pendidikan Agama"),
				'nat'	=> $this->siswa->get_val('rapor', $sess, "PKN")
			),
			'nilai_usbn'	=> $this->siswa->get_print('schtest-val', $sess)->nilai_usbn,
			'usbn'			=> array(
				'sci'	=> $this->siswa->get_val('usbn', $sess, "Ilmu Pengetahuan Alam (IPA)"),
				'soc'	=> $this->siswa->get_val('usbn', $sess, "Ilmu Pengetahuan Sosial (IPS)"),
				'mat'	=> $this->siswa->get_val('usbn', $sess, "Matematika"),
				'ind'	=> $this->siswa->get_val('usbn', $sess, "Bahasa Indonesia"),
				'eng'	=> $this->siswa->get_val('usbn', $sess, "Bahasa Inggris"),
				'rlg'	=> $this->siswa->get_val('usbn', $sess, "Pendidikan Agama"),
				'nat'	=> $this->siswa->get_val('usbn', $sess, "PKN")
			),
			'nilai_unbk'	=> $this->siswa->get_print('nattest-val', $sess)->nilai_unbk,
			'unbk'			=> array(
				'sci'	=> $this->siswa->get_val('unbk', $sess, "Ilmu Pengetahuan Alam (IPA)"),
				'mat'	=> $this->siswa->get_val('unbk', $sess, "Matematika"),
				'ind'	=> $this->siswa->get_val('unbk', $sess, "Bahasa Indonesia"),
				'eng'	=> $this->siswa->get_val('unbk', $sess, "Bahasa Inggris")
			),
		);

		$this->load->view('siswa/rekap_nilai', $data);
	}

	public function cetak()
	{
		if ($this->session->userdata('no_pendaftaran') == NULL) {
			redirect('logcs');
		}
		$sess 		= $this->session->userdata('no_pendaftaran');
		$base_bio 	= $this->siswa->base_biodata($sess);
		$data = array(
			'user'			=> $base_bio,
			'judul_web'		=> ucwords($base_bio->no_pendaftaran) . '-' . ucwords($base_bio->nama_lengkap),
			'thn_ppdb'		=> date('Y', strtotime($base_bio->tgl_siswa))
		);

		$this->load->view('siswa/cetak', $data);
	}

	public function cetak_lulus()
	{
		if ($this->session->userdata('no_pendaftaran') == NULL) {
			redirect('logcs');
		}

		$sess 		= $this->session->userdata('no_pendaftaran');
		$base_bio 	= $this->siswa->base_biodata($sess);

		$data = array(
			'user'			=> $base_bio,
			'judul_web'		=> ucwords($base_bio->no_pendaftaran) . '-' . ucwords($base_bio->nama_lengkap),
			'thn_ppdb'		=> date('Y', strtotime($base_bio->tgl_siswa)),
			'v_ket'		=> $this->siswa->get_print('announcement')
		);

		$this->load->view('siswa/cetak_lulus', $data);
	}

	public function logout()
	{
		if ($this->session->userdata('no_pendaftaran') != '') {
			$this->session->sess_destroy();
		}
		redirect('');
	}
}
