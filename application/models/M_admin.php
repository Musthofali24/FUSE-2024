<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_admin extends CI_Model
{
	public function read_plc_univ()
	{
		$this->db->where('kategori_lomba', 'PLC UNIV');
		return $this->db->get('tb_pendaftar')->result();
	}
	public function read_plc_smk()
	{
		$this->db->where('kategori_lomba', 'PLC SMK');
		return $this->db->get('tb_pendaftar')->result();
	}
	public function read_lf()
	{
		$this->db->where('kategori_lomba', 'LINE FOLLOWER');
		return $this->db->get('tb_pendaftar')->result();
	}
	public function read_kti()
	{
		$this->db->where('kategori_lomba', 'KTI');
		return $this->db->get('tb_pendaftar')->result();
	}
	public function read_poster()
	{
		$this->db->where('kategori_lomba', 'POSTER');
		return $this->db->get('tb_pendaftar')->result();
	}
	public function get_plc_univ()
	{
		$this->db->where('kategori_lomba', 'PLC UNIV');
		return $this->db->get('tb_pendaftar')->num_rows();
	}
	public function get_plc_smk()
	{
		$this->db->where('kategori_lomba', 'PLC SMK');
		return $this->db->get('tb_pendaftar')->num_rows();
	}
	public function get_lf()
	{
		$this->db->where('kategori_lomba', 'LINE FOLLOWER');
		return $this->db->get('tb_pendaftar')->num_rows();
	}
	public function get_kti()
	{
		$this->db->where('kategori_lomba', 'KTI');
		return $this->db->get('tb_pendaftar')->num_rows();
	}
	public function get_poster()
	{
		$this->db->where('kategori_lomba', 'POSTER');
		return $this->db->get('tb_pendaftar')->num_rows();
	}
	public function get_pendaftar()
	{
		return $this->db->get('tb_pendaftar')->num_rows();
	}
	public function get_pendaftar_konfirm()
	{
		$this->db->where('status', 'Di Konfirmasi');
		return $this->db->get('tb_pendaftar')->num_rows();
	}
	public function get_pendaftar_pending()
	{
		$this->db->where('status', 'Belum Di Konfirmasi');
		return $this->db->get('tb_pendaftar')->num_rows();
	}
	public function get_data_pendaftar($where)
	{
		$this->db->where('id_pendaftaran', $where);
		return $this->db->get('tb_pendaftar')->row_array();
	}
	public function update_pendaftar_lomba($where)
	{
		$this->db->where('id_pendaftaran', $where);
		$data = array('rekomendasi_div_lomba' => 'Di Konfirmasi');
		$this->db->update('tb_pendaftar', $data);
	}

	public function update_pendaftar_reject_lomba($where)
	{
		$this->db->where('id_pendaftaran', $where);
		$data = array('rekomendasi_div_lomba' => 'Tidak Di Konfirmasi');
		$this->db->update('tb_pendaftar', $data);
	}
	public function update_pendaftar($where)
	{
		$this->db->where('id_pendaftaran', $where);
		$data = array('status' => 'Di Konfirmasi', 'rekomendasi_bendahara' => 'Di Konfirmasi');
		$this->db->update('tb_pendaftar', $data);
	}

	public function update_pendaftar_reject($where)
	{
		$this->db->where('id_pendaftaran', $where);
		$data = array('status' => 'Di Kembalikan', 'rekomendasi_bendahara' => 'Tidak Di Konfirmasi');
		$this->db->update('tb_pendaftar', $data);
	}
	public function delete($where)
	{
		$this->db->where('id_pendaftaran', $where);
		return $this->db->delete('tb_pendaftar');
	}
}
?>
