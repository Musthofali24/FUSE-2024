<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_landing extends CI_Model
{
	public function get_plc_univ()
	{
		$this->db->where('kategori_lomba', 'PLC UNIV');
		$this->db->where('status', 'Di Konfirmasi');
		return $this->db->get('tb_pendaftar')->num_rows();
	}
	public function get_plc_smk()
	{
		$this->db->where('kategori_lomba', 'PLC SMK');
		$this->db->where('status', 'Di Konfirmasi');
		return $this->db->get('tb_pendaftar')->num_rows();
	}
	public function get_lf()
	{
		$this->db->where('kategori_lomba', 'LINE FOLLOWER');
		$this->db->where('status', 'Di Konfirmasi');
		return $this->db->get('tb_pendaftar')->num_rows();
	}
	public function get_kti()
	{
		$this->db->where('kategori_lomba', 'KTI');
		$this->db->where('status', 'Di Konfirmasi');
		return $this->db->get('tb_pendaftar')->num_rows();
	}
	public function get_poster()
	{
		$this->db->where('kategori_lomba', 'POSTER');
		$this->db->where('status', 'Di Konfirmasi');
		return $this->db->get('tb_pendaftar')->num_rows();
	}
}
?>
