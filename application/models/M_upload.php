<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_upload extends CI_Model {
	public function create_kti($data)
	{
		$this->db->insert('tb_upload_kti', $data);
	}
}
?>
