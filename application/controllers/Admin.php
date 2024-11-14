<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}
	public function index()
	{
		$data['pendaftar'] = $this->m_admin->get_pendaftar();
		$data['konfirm'] = $this->m_admin->get_pendaftar_konfirm();
		$data['pending'] = $this->m_admin->get_pendaftar_pending();
		$data['plc_univ'] = $this->m_admin->read_plc_univ();
		$data['plc_smk'] = $this->m_admin->read_plc_smk();
		$data['lf'] = $this->m_admin->read_lf();
		$data['kti'] = $this->m_admin->read_kti();
		$data['poster'] = $this->m_admin->read_poster();
		$data['num_plc_univ'] = $this->m_admin->get_plc_univ();
		$data['num_plc_smk'] = $this->m_admin->get_plc_smk();
		$data['num_lf'] = $this->m_admin->get_lf();
		$data['num_kti'] = $this->m_admin->get_kti();
		$data['num_poster'] = $this->m_admin->get_poster();
		$this->load->view('admin/admin', $data);
	}
	public function bendahara()
	{
		$data['pendaftar'] = $this->m_admin->get_pendaftar();
		$data['konfirm'] = $this->m_admin->get_pendaftar_konfirm();
		$data['pending'] = $this->m_admin->get_pendaftar_pending();
		$data['plc_univ'] = $this->m_admin->read_plc_univ();
		$data['plc_smk'] = $this->m_admin->read_plc_smk();
		$data['lf'] = $this->m_admin->read_lf();
		$data['kti'] = $this->m_admin->read_kti();
		$data['poster'] = $this->m_admin->read_poster();
		$data['num_plc_univ'] = $this->m_admin->get_plc_univ();
		$data['num_plc_smk'] = $this->m_admin->get_plc_smk();
		$data['num_lf'] = $this->m_admin->get_lf();
		$data['num_kti'] = $this->m_admin->get_kti();
		$data['num_poster'] = $this->m_admin->get_poster();
		$this->load->view('admin/bendahara', $data);
	}
}
?>
