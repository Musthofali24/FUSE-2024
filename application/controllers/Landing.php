<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Landing extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->model('m_landing');
	}
	public function index()
	{
		$data['jum_tim'] = $this->m_admin->get_pendaftar_konfirm();
		$data['jum_peserta_plc_smk'] = $this->m_landing->get_plc_smk() * 2;
		$data['jum_peserta_plc_univ'] = $this->m_landing->get_plc_univ() * 2;
		$data['jum_peserta_plc_lf'] = $this->m_landing->get_lf();
		$data['jum_peserta_plc_poster'] = $this->m_landing->get_poster();
		$data['jum_peserta_plc_kti'] = $this->m_landing->get_kti() * 3;
		$jumlah = $data['jum_peserta_plc_smk'] + $data['jum_peserta_plc_univ'] + $data['jum_peserta_plc_lf'] + $data['jum_peserta_plc_poster'] + $data['jum_peserta_plc_kti'];
		$data['jumlah_peserta'] = array('jumlah' => $jumlah);
		$this->load->view('templates/head');
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}
	public function lfsmk()
	{
		$this->load->view('templates/head2');
		$this->load->view('user/lfsmk');
		$this->load->view('templates/footer');
	}
	public function plcsmk()
	{
		$this->load->view('templates/head2');
		$this->load->view('user/plcsmk');
		$this->load->view('templates/footer');
	}
	public function plcuniv()
	{
		$this->load->view('templates/head2');
		$this->load->view('user/plcuniv');
		$this->load->view('templates/footer');
	}
	public function kti()
	{
		$this->load->view('templates/head2');
		$this->load->view('user/kti');
		$this->load->view('templates/footer');
	}
	public function poster()
	{
		$this->load->view('templates/head2');
		$this->load->view('user/poster');
		$this->load->view('templates/footer');
	}
	public function assets()
	{
		$this->load->view('user/assets');
		$this->load->view('templates/footer');
	}
		public function upload_kti()
	{
		$this->load->view('templates/head_regis');
		$this->load->view('upload_lomba/upload_kti');
		$this->load->view('templates/footer');
	}
	public function upload_poster()
	{
		$this->load->view('templates/head_regis');
		$this->load->view('upload_lomba/upload_poster');
		$this->load->view('templates/footer');
	}
}
?>
