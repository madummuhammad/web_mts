<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Auth extends CI_Model {

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

	public function tampil_profile()
	{
		$id_admin=$this->session->userdata('id_admin');
		$this->db->where('id_admin',$id_admin);
		return $this->db->get('admin')->row_array();
	}

	public function edit_profile()
	{
		$id_admin=$this->session->userdata('id_admin');
		$username=$this->input->post('username');
		$nama=$this->input->post('nama');
		$gambar=$this->gambar_profile();

		$this->db->where('id_admin',$id_admin);
		$gambar_lama=$this->db->get('admin')->row_array();

		if ($gambar==NULL) {
			$data=[
				'nama'=>$nama,
				'username'=>$username,
			];
			$this->db->where('id_admin',$id_admin);
			$this->db->update('admin',$data);
		} else {
			$data=[
				'nama'=>$nama,
				'username'=>$username,
				'gambar'=>$gambar
			];
			if ($gambar_lama!=='default.png') {
				unlink(FCPATH . 'assets/images/upload/profil/'.$gambar_lama['gambar']);	
			}
			$this->db->where('id_admin',$id_admin);
			$this->db->update('admin',$data);
		}
	}

	public function edit_sandi()
	{
		$id=$this->session->userdata('id_admin');
		$password_lama=$this->input->post('password_lama');
		$password_baru=password_hash($this->input->post('password_baru'), PASSWORD_DEFAULT);

		$this->db->where('id_admin',$id);
		$num_row=$this->db->get('admin')->num_rows();


		$this->db->where('id_admin',$id);
		$data=$this->db->get('admin')->row_array();
		if ($num_row>0) {
			if (password_verify($password_lama, $data['password'])) {
				$data_baru=[
					'password'=>$password_baru
				];
				$this->db->where('id_admin',$id);
				$this->db->update('admin',$data_baru);
				$this->session->set_flashdata('active','active');
				echo json_encode('Berhasil');
			} else {
				echo json_encode('Gagal');
			}
		} else {
			echo json_encode('Gagal');
		}
	}

	private function gambar_profile()
	{
		$config['upload_path']          = './assets/images/upload/profil/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['file_name']            ='profile';
// $config['max_size']             = 100;
// $config['max_width']            = 1024;
// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar-profile'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			return $this->upload->data("file_name");
		}
	}

	public function logout()
	{
		session_destroy();
	}
}
