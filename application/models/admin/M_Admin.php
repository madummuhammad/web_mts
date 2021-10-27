<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {
	public function tampil_admin()
	{
		return $this->db->get('admin')->result_array();
	}

	public function tambah()
	{
		$username=$this->input->post('username');
		$nama=$this->input->post('nama');
		$password=$this->input->post('password');
		$hash=password_hash($password, PASSWORD_DEFAULT);
		$role=$this->input->post('role');
		$gambar='default.png';

		$data=[
			'username'=>$username,
			'nama'=>$nama,
			'password'=>$hash,
			'role'=>$role,
			'gambar'=>$gambar
		];

		$this->db->insert('admin',$data);
	}

	public function hapus()
	{
		$id=$this->input->post('id');

		$this->db->where('id_admin',$id);
		$this->db->delete('admin');
	}
}