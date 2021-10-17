<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Auth extends CI_Model {

	public function index()
	{
		$this->load->view('admin/v_login');
	}

	public function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$this->db->where('username',$username);
		$num_row=$this->db->get('admin')->num_rows();


		$this->db->where('username',$username);
		$data=$this->db->get('admin')->row_array();
		if ($num_row>0) {
			if (password_verify($password, $data['password'])) {
				$this->session->set_userdata($data);
				echo json_encode('Berhasil');
			} else {
				echo json_encode('Gagal');
			}
		} else {
			echo json_encode('Gagal');
		}
	}
}
