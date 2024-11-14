<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_register');
		$this->load->model('m_admin');
	}
	public function plc_univ()
	{
		if ($this->session->userdata('DN_REG', true)) {
			redirect(base_url('register/thx_page'));
		} else {
			$this->load->view('templates/head_regis');
			$this->load->view('register/registrasi_plc_univ');
			$this->load->view('templates/footer');
		}
	}
	public function plc_smk()
	{
		if ($this->session->userdata('DN_REG', true)) {
			redirect(base_url('register/thx_page'));
		} else {
			$this->load->view('templates/head_regis');
			$this->load->view('register/registrasi_plc_smk');
			$this->load->view('templates/footer');
		}
	}
	public function lf()
	{
		if ($this->session->userdata('DN_REG', true)) {
			redirect(base_url('register/thx_page'));
		} else {
			$this->load->view('templates/head_regis');
			$this->load->view('register/registrasi_lf');
			$this->load->view('templates/footer');
		}
	}
	public function kti()
	{
		if ($this->session->userdata('DN_REG', true)) {
			redirect(base_url('register/thx_page'));
		} else {
			$this->load->view('templates/head_regis');
			$this->load->view('register/registrasi_kti');
			$this->load->view('templates/footer');
		}
	}
	public function poster()
	{
		if ($this->session->userdata('DN_REG', true)) {
			redirect(base_url('register/thx_page'));
		} else {
			$this->load->view('templates/head_regis');
			$this->load->view('register/registrasi_poster');
			$this->load->view('templates/footer');
		}
	}
	public function update_plc_univ($id_pendaftaran)
	{
		$data['registrasi'] = $this->m_admin->get_data_pendaftar($id_pendaftaran);
		if ($this->session->userdata('DN_REG', true)) {
			redirect(base_url('register/thx_page'));
		} else {
			$this->load->view('templates/head_regis');
			$this->load->view('register_ulang/registrasi_ulang_plc_univ', $data);
			$this->load->view('templates/footer');
		}
	}
	public function update_plc_smk($id_pendaftaran)
	{
		$data['registrasi'] = $this->m_admin->get_data_pendaftar($id_pendaftaran);
		if ($this->session->userdata('DN_REG', true)) {
			redirect(base_url('register/thx_page'));
		} else {
			$this->load->view('templates/head_regis');
			$this->load->view('register_ulang/registrasi_ulang_plc_smk', $data);
			$this->load->view('templates/footer');
		}
	}
	public function update_lf($id_pendaftaran)
	{
		$data['registrasi'] = $this->m_admin->get_data_pendaftar($id_pendaftaran);
		if ($this->session->userdata('DN_REG', true)) {
			redirect(base_url('register/thx_page'));
		} else {
			$this->load->view('templates/head_regis');
			$this->load->view('register_ulang/registrasi_ulang_lf', $data);
			$this->load->view('templates/footer');
		}
	}
	public function update_kti($id_pendaftaran)
	{
		$data['registrasi'] = $this->m_admin->get_data_pendaftar($id_pendaftaran);
		if ($this->session->userdata('DN_REG', true)) {
			redirect(base_url('register/thx_page'));
		} else {
			$this->load->view('templates/head_regis');
			$this->load->view('register_ulang/registrasi_ulang_kti', $data);
			$this->load->view('templates/footer');
		}
	}
	public function update_poster($id_pendaftaran)
	{
		$data['registrasi'] = $this->m_admin->get_data_pendaftar($id_pendaftaran);
		if ($this->session->userdata('DN_REG', true)) {
			redirect(base_url('register/thx_page'));
		} else {
			$this->load->view('templates/head_regis');
			$this->load->view('register_ulang/registrasi_ulang_poster', $data);
			$this->load->view('templates/footer');
		}
	}
	public function thx_page()
	{
		$this->session->set_userdata('DN_REG', false);
		$this->load->view('templates/head');
		$this->load->view('user/grup');
		$this->load->view('templates/footer');
	}
	public function update_success_lomba()
	{
		$id_pendaftar = $this->input->post('id');
		$update = $this->m_admin->update_pendaftar_lomba($id_pendaftar);
		if (!$update) {
			$this->session->set_flashdata('success', 'Berkas telah dikonfirmasi');
			redirect('admin');
			exit;
		} else {
			$this->session->set_flashdata('error', '<pre>' . var_dump($this->input->post('id_pendaftaran')) . '</pre>');
			redirect('admin');
			exit;
		}
	}
	public function update_error_lomba()
	{
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		$update = $this->m_admin->update_pendaftar_reject_lomba($id_pendaftaran);
		$data = $this->m_admin->get_data_pendaftar($id_pendaftaran);
		$email = $data['email'];
		$kategori_lomba = $data['kategori_lomba'];
		$pesan = $this->input->post('pesan');
		if (!$update) {
			$this->send_email_reject($email, $id_pendaftaran, $kategori_lomba, $pesan);
			redirect('admin');
		} else {
			$this->session->set_flashdata('error', 'Update data gagal');
			redirect('admin');
		}
	}
	public function update_success_bendahara($id_pendaftaran)
	{
		$update = $this->m_admin->update_pendaftar($id_pendaftaran);
		$data = $this->m_admin->get_data_pendaftar($id_pendaftaran);
		$email = $data['email'];
		$kategori_lomba = $data['kategori_lomba'];
		if (!$update) {
			$this->send_email_konfirm($email, $kategori_lomba);
			redirect('admin/bendahara');
			exit;
		} else {
			$this->session->set_flashdata('error', 'Berkas tidak dikonfirmasi');
			redirect('admin/bendahara');
		}
	}
	public function update_error_bendahara($id_pendaftaran)
	{
		$update = $this->m_admin->update_pendaftar_reject($id_pendaftaran);
		$data = $this->m_admin->get_data_pendaftar($id_pendaftaran);
		$pesan = 'Ganti foto bukti pembayaran yang valid';
		$email = $data['email'];
		$kategori_lomba = $data['kategori_lomba'];
		if (!$update) {
			$this->send_email_reject($email, $id_pendaftaran, $kategori_lomba, $pesan);
			redirect('admin/bendahara');
			exit;
		} else {
			$this->session->set_flashdata('error', 'Berkas tidak dikonfirmasi');
			redirect('admin/bendahara');
		}
	}
	public function send_email_konfirm($email, $kategori_lomba)
	{
		$to = $email;
		$subject = 'Konfirmasi Pendaftaran';
		if ($kategori_lomba == 'PLC UNIV') {
			$link_group = 'https://chat.whatsapp.com/EcjkYuuvCBLBvWwLD3gtAS';
		} else if ($kategori_lomba == 'PLC SMK') {
			$link_group = 'https://chat.whatsapp.com/LOxaA1tgzrv5hNMTT0BySL';
		} else if ($kategori_lomba == 'LINE FOLLOWER') {
			$link_group = 'https://chat.whatsapp.com/GrUrx3fovCt1GhL620GFW9';
		} else if ($kategori_lomba == 'KTI') {
			$link_group = 'https://chat.whatsapp.com/FHRDBX60Z3e5hcGE5E4t2O';
		} else {
			$link_group = 'https://chat.whatsapp.com/IG0cUTOMMHJ3wShyta6mV9';
		}
		$message = 'Pendaftaran Anda telah dikonfirmasi. Klik link berikut untuk masuk grup WA yang telah kami sediakan: ' . htmlspecialchars(html_entity_decode($link_group), ENT_QUOTES, 'UTF-8');
		$result = $this->m_register->sendConfirmationEmail($to, $subject, $message);
		if ($result) {
			$this->session->set_flashdata('success', 'Email dan Data konfirmasi berhasil dikirim');
			redirect('admin/bendahara');
		} else {
			$this->session->set_flashdata('error', 'Email gagal terkirim :' . '<br>' . $this->email->print_debugger());
			redirect('admin/bendahara');
		}
	}
	public function send_email_reject($email, $id_pendaftaran, $kategori_lomba, $pesan)
	{
		$to = $email;
		$subject = 'Reject Pendaftaran';
		$link_group = '';
		if ($kategori_lomba == 'PLC UNIV') {
			$link_group = base_url('register/update_plc_univ/' . $id_pendaftaran);
		} else if ($kategori_lomba == 'PLC SMK') {
			$link_group = base_url('register/update_plc_smk/' . $id_pendaftaran);
		} else if ($kategori_lomba == 'LINE FOLLOWER') {
			$link_group = base_url('register/update_lf/' . $id_pendaftaran);
		} else if ($kategori_lomba == 'KTI') {
			$link_group = base_url('register/update_kti/' . $id_pendaftaran);
		} else {
			$link_group = base_url('register/update_poster/' . $id_pendaftaran);
		}
		$message = $pesan . ': ' . htmlspecialchars($link_group, ENT_QUOTES, 'UTF-8');
		if ($this->m_register->sendConfirmationEmail($to, $subject, $message)) {
			$this->session->set_flashdata('success', 'Email reject berhasil dikirim');
			redirect('admin');
		} else {
			$this->session->set_flashdata('error', 'Email gagal terkirim :' . '<br>' . $this->email->print_debugger);
			redirect('admin');
		}
	}
	public function regist_plc()
	{
		$kategori_lomba = $this->input->post('competition-category');
		$asal_sekolah = $this->input->post('school-name');
		$nama_tim = $this->input->post('team-name');
		$email = $this->input->post('email');
		$nama_peserta = $this->input->post('member1-name');
		$nama_peserta2 = $this->input->post('member2-name');
		$no_tlp_peserta = $this->input->post('leader-number');
		$nama_pembimbing = $this->input->post('coach-name');
		$nd = $this->input->post('coach-id');
		$no_tlp_pembimbing = $this->input->post('coach-number');
		$id_pendaftaran = uniqid();
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'docx|pdf|png|jpg|jpeg';
		$config['max_size'] = 0;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload_errors = [];
		$surat_ket_name = $this->upload_file('student-card', $upload_errors);
		$foto_name = $this->upload_file('photo', $upload_errors);
		$twibbon_name = $this->upload_file('twibbon', $upload_errors);
		$tiktok_follow = $this->upload_file('tiktok-follow', $upload_errors);
		$pembayaran_name = $this->upload_file('payment-proof', $upload_errors);
		if (!empty($upload_errors)) {
			$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
			redirect(base_url('register'));
			exit;
		} else {
			$data = array(
				'id_pendaftaran' => $id_pendaftaran,
				'kategori_lomba' => $kategori_lomba,
				'asal_sekolah' => $asal_sekolah,
				'nama_tim' => $nama_tim,
				'email' => $email,
				'nama_peserta_1' => $nama_peserta,
				'nama_peserta_2' => $nama_peserta2,
				'no_peserta' => $no_tlp_peserta,
				'nama_pembimbing' => $nama_pembimbing,
				'id_pembimbing' => $nd,
				'no_pembimbing' => $no_tlp_pembimbing,
				'surat_ket' => $surat_ket_name,
				'foto' => $foto_name,
				'twibbon' => $twibbon_name,
				'tiktok' => $tiktok_follow,
				'pembayaran' => $pembayaran_name
			);
			$data_message = array(
				'id_pendaftaran' => $id_pendaftaran,
				'kategori_lomba' => $kategori_lomba,
				'asal_sekolah' => $asal_sekolah,
				'nama_tim' => $nama_tim,
				'email' => $email,
				'nama_peserta_1' => $nama_peserta,
				'nama_peserta_2' => $nama_peserta2,
				'no_peserta' => $no_tlp_peserta,
				'nama_pembimbing' => $nama_pembimbing,
				'id_pembimbing' => $nd,
				'no_pembimbing' => $no_tlp_pembimbing
			);
			$insert_data = $this->m_register->create($data);
			if (!$insert_data) {
				$this->session->set_flashdata('success', 'Data berhasil dimasukan');
				$phone_number = '';
				if ($kategori_lomba === 'PLC SMK') {
					$phone_number = '628812256244';
				} else {
					$phone_number = '6281380692231';
				}
				$message = "";
				foreach ($data_message as $key => $value) {
					$message .= $key . ': ' . $value . PHP_EOL;
				}
				$url = 'https://api.whatsapp.com/send?phone=' . $phone_number . '&text=' . 'DATA REGISTRASI LOMBA FUSE 2024%0A' . urlencode($message);
				$this->session->set_userdata('DN_REG', true);
				header("Location:$url");
				exit;
			} else {
				$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
				if($kategori_lomba === 'PLC UNIV'){
				    redirect(base_url('register/plc_univ'));
				}else{
				    redirect(base_url('register/plc_smk'));
				}
				exit;
			}
		}
	}
	public function regist_lf()
	{
		$kategori_lomba = $this->input->post('competition-category');
		$asal_sekolah = $this->input->post('school-name');
		$nama_tim = $this->input->post('team-name');
		$email = $this->input->post('email');
		$nama_peserta = $this->input->post('member1-name');
		$no_tlp_peserta = $this->input->post('leader-number');
		$nama_pembimbing = $this->input->post('coach-name');
		$nd = $this->input->post('coach-id');
		$no_tlp_pembimbing = $this->input->post('coach-number');
		$id_pendaftaran = uniqid();
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'docx|pdf|png|jpg|jpeg';
		$config['max_size'] = 0;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload_errors = [];
		$surat_ket_name = $this->upload_file('student-card', $upload_errors);
		$foto_name = $this->upload_file('photo', $upload_errors);
		$twibbon_name = $this->upload_file('twibbon', $upload_errors);
		$tiktok_follow = $this->upload_file('tiktok-follow', $upload_errors);
		$pembayaran_name = $this->upload_file('payment-proof', $upload_errors);
		if (!empty($upload_errors)) {
			$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
			redirect(base_url('register'));
			exit;
		} else {
			$data = array(
				'id_pendaftaran' => $id_pendaftaran,
				'kategori_lomba' => $kategori_lomba,
				'asal_sekolah' => $asal_sekolah,
				'nama_tim' => $nama_tim,
				'email' => $email,
				'nama_peserta_1' => $nama_peserta,
				'no_peserta' => $no_tlp_peserta,
				'nama_pembimbing' => $nama_pembimbing,
				'id_pembimbing' => $nd,
				'no_pembimbing' => $no_tlp_pembimbing,
				'surat_ket' => $surat_ket_name,
				'foto' => $foto_name,
				'twibbon' => $twibbon_name,
				'tiktok' => $tiktok_follow,
				'pembayaran' => $pembayaran_name
			);
			$data_message = array(
				'id_pendaftaran' => $id_pendaftaran,
				'kategori_lomba' => $kategori_lomba,
				'asal_sekolah' => $asal_sekolah,
				'nama_tim' => $nama_tim,
				'email' => $email,
				'nama_peserta_1' => $nama_peserta,
				'no_peserta' => $no_tlp_peserta,
				'nama_pembimbing' => $nama_pembimbing,
				'id_pembimbing' => $nd,
				'no_pembimbing' => $no_tlp_pembimbing,
			);
			$insert_data = $this->m_register->create($data);
			if (!$insert_data) {
				$this->session->set_flashdata('success', 'Data berhasil dimasukan');
				$phone_number = '6285794765451';
				$message = "";
				foreach ($data_message as $key => $value) {
					$message .= $key . ': ' . $value . PHP_EOL;
				}
				$url = 'https://api.whatsapp.com/send?phone=' . $phone_number . '&text=' . 'DATA REGISTRASI LOMBA FUSE 2024%0A' . urlencode($message);
				$this->session->set_userdata('DN_REG', true);
				header("Location:$url");
				exit;
			} else {
				$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
				redirect(base_url('register/lf'));
				exit;
			}
		}
	}
	public function regist_kti()
	{
		$kategori_lomba = $this->input->post('competition-category');
		$asal_sekolah = $this->input->post('school-name');
		$nama_tim = $this->input->post('team-name');
		$email = $this->input->post('email');
		$nama_peserta = $this->input->post('member1-name');
		$nama_peserta2 = $this->input->post('member2-name');
		$nama_peserta3 = $this->input->post('member3-name');
		$no_tlp_peserta = $this->input->post('leader-number');
		$nama_pembimbing = $this->input->post('coach-name');
		$nd = $this->input->post('coach-id');
		$no_tlp_pembimbing = $this->input->post('coach-number');
		$id_pendaftaran = uniqid();
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'docx|pdf|png|jpg|jpeg';
		$config['max_size'] = 0;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload_errors = [];
		$surat_ket_name = $this->upload_file('student-card', $upload_errors);
		$foto_name = $this->upload_file('photo', $upload_errors);
		$twibbon_name = $this->upload_file('twibbon', $upload_errors);
		$tiktok_follow = $this->upload_file('tiktok-follow', $upload_errors);
		$pembayaran_name = $this->upload_file('payment-proof', $upload_errors);
		if (!empty($upload_errors)) {
			$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
			redirect(base_url('register'));
			exit;
		} else {
			$data = array(
				'id_pendaftaran' => $id_pendaftaran,
				'kategori_lomba' => $kategori_lomba,
				'asal_sekolah' => $asal_sekolah,
				'nama_tim' => $nama_tim,
				'email' => $email,
				'nama_peserta_1' => $nama_peserta,
				'nama_peserta_2' => $nama_peserta2,
				'nama_peserta_3' => $nama_peserta3,
				'no_peserta' => $no_tlp_peserta,
				'nama_pembimbing' => $nama_pembimbing,
				'id_pembimbing' => $nd,
				'no_pembimbing' => $no_tlp_pembimbing,
				'surat_ket' => $surat_ket_name,
				'foto' => $foto_name,
				'twibbon' => $twibbon_name,
				'tiktok' => $tiktok_follow,
				'pembayaran' => $pembayaran_name
			);
			$data_message = array(
				'id_pendaftaran' => $id_pendaftaran,
				'kategori_lomba' => $kategori_lomba,
				'asal_sekolah' => $asal_sekolah,
				'nama_tim' => $nama_tim,
				'email' => $email,
				'nama_peserta_1' => $nama_peserta,
				'nama_peserta_2' => $nama_peserta2,
				'no_peserta' => $no_tlp_peserta,
				'nama_pembimbing' => $nama_pembimbing,
				'id_pembimbing' => $nd,
				'no_pembimbing' => $no_tlp_pembimbing,
			);
			$insert_data = $this->m_register->create($data);
			if (!$insert_data) {
				$this->session->set_flashdata('success', 'Data berhasil dimasukan');
				$phone_number = '6281382764860';
				$message = "";
				foreach ($data_message as $key => $value) {
					$message .= $key . ': ' . $value . PHP_EOL;
				}
				$url = 'https://api.whatsapp.com/send?phone=' . $phone_number . '&text=' . 'DATA REGISTRASI LOMBA FUSE 2024%0A' . urlencode($message);
				$this->session->set_userdata('DN_REG', true);
				header("Location:$url");
				exit;
			} else {
				$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
				redirect(base_url('register/kti'));
				exit;
			}
		}
	}
	public function regist_poster()
	{
		$kategori_lomba = $this->input->post('competition-category');
		$asal_sekolah = $this->input->post('school-name');
		$nama_tim = $this->input->post('team-name');
		$email = $this->input->post('email');
		$nama_peserta = $this->input->post('member1-name');
		$no_tlp_peserta = $this->input->post('leader-number');
		$nama_pembimbing = $this->input->post('coach-name');
		$nd = $this->input->post('coach-id');
		$no_tlp_pembimbing = $this->input->post('coach-number');
		$id_pendaftaran = uniqid();
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'docx|pdf|png|jpg|jpeg';
		$config['max_size'] = 0;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload_errors = [];
		$surat_ket_name = $this->upload_file('student-card', $upload_errors);
		$foto_name = $this->upload_file('photo', $upload_errors);
		$twibbon_name = $this->upload_file('twibbon', $upload_errors);
		$tiktok_follow = $this->upload_file('tiktok-follow', $upload_errors);
		$pembayaran_name = $this->upload_file('payment-proof', $upload_errors);
		if (!empty($upload_errors)) {
			$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
			redirect(base_url('register'));
			exit;
		} else {
			$data = array(
				'id_pendaftaran' => $id_pendaftaran,
				'kategori_lomba' => $kategori_lomba,
				'asal_sekolah' => $asal_sekolah,
				'nama_tim' => $nama_tim,
				'email' => $email,
				'nama_peserta_1' => $nama_peserta,
				'no_peserta' => $no_tlp_peserta,
				'nama_pembimbing' => $nama_pembimbing,
				'id_pembimbing' => $nd,
				'no_pembimbing' => $no_tlp_pembimbing,
				'surat_ket' => $surat_ket_name,
				'foto' => $foto_name,
				'twibbon' => $twibbon_name,
				'tiktok' => $tiktok_follow,
				'pembayaran' => $pembayaran_name
			);
			$data_message = array(
				'id_pendaftaran' => $id_pendaftaran,
				'kategori_lomba' => $kategori_lomba,
				'asal_sekolah' => $asal_sekolah,
				'nama_tim' => $nama_tim,
				'email' => $email,
				'nama_peserta_1' => $nama_peserta,
				'no_peserta' => $no_tlp_peserta,
				'nama_pembimbing' => $nama_pembimbing,
				'id_pembimbing' => $nd,
				'no_pembimbing' => $no_tlp_pembimbing,
			);
			$insert_data = $this->m_register->create($data);
			if (!$insert_data) {
				$this->session->set_flashdata('success', 'Data berhasil dimasukan');
				$phone_number = '6282120100330';
				$message = "";
				foreach ($data_message as $key => $value) {
					$message .= $key . ': ' . $value . PHP_EOL;
				}
				$url = 'https://api.whatsapp.com/send?phone=' . $phone_number . '&text=' . 'DATA REGISTRASI LOMBA FUSE 2024%0A' . urlencode($message);
				$this->session->set_userdata('DN_REG', true);
				header("Location:$url");
				exit;
			} else {
				$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
				redirect(base_url('register/poster'));
				exit;
			}
		}
	}
	public function update_regist_plc()
	{
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		$kategori_lomba = $this->input->post('competition-category');
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'docx|pdf|png|jpg|jpeg';
		$config['max_size'] = 0;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload_errors = [];
		$surat_ket_name = $this->upload_file('student-card', $upload_errors);
		$foto_name = $this->upload_file('photo', $upload_errors);
		$twibbon_name = $this->upload_file('twibbon', $upload_errors);
		$tiktok_follow = $this->upload_file('tiktok-follow', $upload_errors);
		$pembayaran_name = $this->upload_file('payment_proof', $upload_errors);
		if (!empty($upload_errors)) {
			$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
			redirect(base_url('register'));
			exit;
		} else {
			$data = array(
				'surat_ket' => $surat_ket_name,
				'foto' => $foto_name,
				'twibbon' => $twibbon_name,
				'tiktok' => $tiktok_follow,
				'pembayaran' => $pembayaran_name
			);
			$update_data = $this->m_register->update($data, $id_pendaftaran);
			if (!$update_data) {
				$this->session->set_flashdata('success', 'Data berhasil dimasukan');
				$phone_number = '';
				if ($kategori_lomba === 'PLC SMK') {
					$phone_number = '628812256244';
				} else {
					$phone_number = '6281380692231';
				}

				$url = 'https://api.whatsapp.com/send?phone=' . $phone_number . '&text=' . 'Saya Telah Melakukan Daftar Ulang Terimakasih';
				$this->session->set_userdata('DN_REG', true);
				header("Location:$url");
				exit;
			} else {
				$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
				if($kategori_lomba === 'PLC UNIV'){
				    redirect(base_url('register/update_plc_univ'));
				}else{
				    redirect(base_url('register/update_plc_smk'));
				}
				exit;
			}
		}
	}
	public function update_regist_lf()
	{
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		$kategori_lomba = $this->input->post('competition-category');
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'docx|pdf|png|jpg|jpeg';
		$config['max_size'] = 0;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload_errors = [];
		$surat_ket_name = $this->upload_file('student-card', $upload_errors);
		$foto_name = $this->upload_file('photo', $upload_errors);
		$twibbon_name = $this->upload_file('twibbon', $upload_errors);
		$tiktok_follow = $this->upload_file('tiktok-follow', $upload_errors);
		$pembayaran_name = $this->upload_file('payment_proof', $upload_errors);
		if (!empty($upload_errors)) {
			$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
			redirect(base_url('register'));
			exit;
		} else {
			$data = array(
				'surat_ket' => $surat_ket_name,
				'foto' => $foto_name,
				'twibbon' => $twibbon_name,
				'tiktok' => $tiktok_follow,
				'pembayaran' => $pembayaran_name
			);
			$update_data = $this->m_register->update($data, $id_pendaftaran);
			if (!$update_data) {
				$this->session->set_flashdata('success', 'Data berhasil diupdate');
				$phone_number = '6285794765451';
				$url = 'https://api.whatsapp.com/send?phone=' . $phone_number . '&text=' . 'Saya Telah Melakukan Daftar Ulang Terimakasih';
				$this->session->set_userdata('DN_REG', true);
				header("Location:$url");
				exit;
			} else {
				$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
				redirect(base_url('register/update_lf'));
				exit;
			}
		}
	}
	public function update_regist_kti()
	{
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		$kategori_lomba = $this->input->post('competition-category');
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'docx|pdf|png|jpg|jpeg';
		$config['max_size'] = 0;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload_errors = [];
		$surat_ket_name = $this->upload_file('student-card', $upload_errors);
		$foto_name = $this->upload_file('photo', $upload_errors);
		$twibbon_name = $this->upload_file('twibbon', $upload_errors);
		$tiktok_follow = $this->upload_file('tiktok-follow', $upload_errors);
		$pembayaran_name = $this->upload_file('payment_proof', $upload_errors);
		if (!empty($upload_errors)) {
			$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
			redirect(base_url('register'));
			exit;
		} else {
			$data = array(
				'surat_ket' => $surat_ket_name,
				'foto' => $foto_name,
				'twibbon' => $twibbon_name,
				'tiktok' => $tiktok_follow,
				'pembayaran' => $pembayaran_name
			);
			$update_data = $this->m_register->update($data, $id_pendaftaran);
			if (!$update_data) {
				$this->session->set_flashdata('success', 'Data berhasil diupdate');
				$phone_number = '6281382764860';
				$url = 'https://api.whatsapp.com/send?phone=' . $phone_number . '&text=' . 'Saya Telah Melakukan Daftar Ulang Terimakasih';
				$this->session->set_userdata('DN_REG', true);
				header("Location:$url");
				exit;
			} else {
				$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
				redirect(base_url('register/update_kti'));
				exit;
			}
		}
	}
	public function update_regist_poster()
	{
		$kategori_lomba = $this->input->post('competition-category');
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'docx|pdf|png|jpg|jpeg';
		$config['max_size'] = 0;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload_errors = [];
		$surat_ket_name = $this->upload_file('student-card', $upload_errors);
		$foto_name = $this->upload_file('photo', $upload_errors);
		$twibbon_name = $this->upload_file('twibbon', $upload_errors);
		$tiktok_follow = $this->upload_file('tiktok-follow', $upload_errors);
		$pembayaran_name = $this->upload_file('payment_proof', $upload_errors);
		if (!empty($upload_errors)) {
			$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
			redirect(base_url('register'));
			exit;
		} else {
			$data = array(
				'surat_ket' => $surat_ket_name,
				'foto' => $foto_name,
				'twibbon' => $twibbon_name,
				'tiktok' => $tiktok_follow,
				'pembayaran' => $pembayaran_name
			);
			$update_data = $this->m_register->update($data, $id_pendaftaran);
			if (!$update_data) {
				$this->session->set_flashdata('success', 'Data berhasil diupdate');
				$phone_number = '6282120100330';
				$url = 'https://api.whatsapp.com/send?phone=' . $phone_number . '&text=' . 'Saya Telah Melakukan Daftar Ulang Terimakasih';
				$this->session->set_userdata('DN_REG', true);
				header("Location:$url");
				exit;
			} else {
				$this->session->set_flashdata('error', 'Check kembali folder yang ada masukan !!!');
				redirect(base_url('register/update_poster'));
				exit;
			}
		}
	}

	private function upload_file($field_name, &$errors)
	{
		if (empty($_FILES[$field_name]['name'])) {
			return '';
		}
		if ($this->upload->do_upload($field_name)) {
			return $this->upload->data('file_name');
		} else {
			$errors[] = $this->upload->display_errors();
			return '';
		}
	}
	public function delete($id_pendaftaran)
	{
		$delete = $this->m_admin->delete($id_pendaftaran);
		if ($delete) {
			$this->session->set_flashdata('success', 'Data berhasil di hapus');
			redirect('admin');
		} else {
			$this->session->set_flashdata('error', 'Penghapusan data gagal !!!');
			redirect('admin');
		}
	}
} ?>
