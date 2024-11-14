<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once FCPATH . 'vendor/autoload.php';


class Upload extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_upload');
	}
	public function upload_kti()
	{
	    $id_kti=uniqid();
		$nama_tim = $this->input->post('team-name');
		$nama_ketua = $this->input->post('leader-name');
		$judul = $this->input->post('title-name');
		$nama1 = $this->input->post('member1-name');
		$nama2 = $this->input->post('member2-name');
		$no = $this->input->post('leader-number');
		$email = $this->input->post('email');
		$config['upload_path'] = 'assets/upload_kti_poster/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = 0;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload_errors = [];
		$file_kti = $this->upload_file('file-kti', $upload_errors);
		if (!empty($upload_errors)) {
            $error_message = implode('<br>', $upload_errors);
            $this->session->set_flashdata('error', $error_message);
            redirect(base_url('landing/upload_kti'));
            exit;
        } else {
			$data = array(
			    'id_kti'=>$id_kti,
				'nama_tim' => $nama_tim,
				'nama_ketua' => $nama_ketua,
				'judul_kti' => $judul,
				'nama_1' => $nama1,
				'nama_2' => $nama2,
				'no' => $no,
				'email' => $email,
				'file_kti' => $file_kti
			);
		}
		$insert_data = $this->m_upload->create_kti($data);
		$this->uploadgdrive('assets/upload_kti_poster/' . $file_kti);
	}
	public function uploadgdrive($filePath)
	{
		$client = new Google\Client();
		$configFilePath = APPPATH . 'third_party/client_secret_635608907376-2lkkmu4o1elq756foq3vofl7lm34m0j0.apps.googleusercontent.com.json';
        $client->setAuthConfig($configFilePath);
		$client->addScope(Google\Service\Drive::DRIVE);
		if ($client->isAccessTokenExpired()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        }
		$driveService = new Google\Service\Drive($client);
		$fileMetadata = new Google\Service\Drive\DriveFile([
			'name' => basename($filePath),
		]);
		$content = file_get_contents($filePath);
		$driveFile = $driveService->files->create($fileMetadata, [
			'data' => $content,
			'mimeType' => 'application/octet-stream',
			'uploadType' => 'multipart',
		]);
		if ($driveFile) {

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
}
?>
