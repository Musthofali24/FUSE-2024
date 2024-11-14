<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Register extends CI_Model
{
	public function create($data)
	{
		$this->db->insert('tb_pendaftar', $data);
	}
	public function update($data,$where)
	{
		$this->db->where('id_pendaftaran',$where);
		$this->db->update('tb_pendaftar', $data);
	}
	public function sendConfirmationEmail($to, $subject, $message)
	{
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.hostinger.com';
		$config['smtp_user'] = 'fusepolman@fuse2024.com';
		$config['smtp_pass'] = 'Fuse_2024';
		$config['smtp_port'] = 465;
		$config['charset'] = 'utf-8';
		$config['mailtype'] = 'html';
		$config['newline'] = "\r\n";
		$config['smtp_crypto'] = 'ssl';
		$this->email->initialize($config);
		$this->email->from('fusepolman@fuse2024.com', 'Fuse2024');
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
		return $this->email->send();
	}
} ?>
