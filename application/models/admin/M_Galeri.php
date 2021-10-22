<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Galeri extends CI_Model {

	public function tampil_galeri()
	{
		return $this->db->get('galeri')->result_array();
	}

	public function tambah()
	{
		$tagline=$this->input->post('tagline');
		$gambar=$this->gambar_galeri();;
		$data=[
			'tagline'=>$tagline,
			'gambar'=>$gambar
		];
		$this->db->insert('galeri',$data);
	}

	private function gambar_galeri()
	{
		$config['upload_path']          = './assets/images/upload/galeri/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['file_name']            ='galeri';
// $config['max_size']             = 100;
// $config['max_width']            = 1024;
// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar-artikel'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			return $this->upload->data("file_name");
		}
	}
}