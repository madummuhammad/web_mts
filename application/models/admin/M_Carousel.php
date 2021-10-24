<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Carousel extends CI_Model {

	public function tampil_carousel()
	{
		return $this->db->get('carousel')->result_array();
	}

	public function hapus()
	{
		$id=$this->input->post('id');

		$this->db->where('id',$id);
		$this->db->delete('carousel');
	}

	public function tambah()
	{
		$gambar=$this->gambar_carousel();

		$data=[
			'gambar'=>$gambar
		];

		$this->db->insert('carousel',$data);
	}

	public function edit()
	{
		$id=$this->input->post('id');
		$gambar=$this->gambar_carousel();

		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('carousel')->row_array();
		$data=[
			'gambar'=>$gambar
		];
		if ($gambar==NULL) {
			
		} else {
			unlink(FCPATH . 'assets/images/upload/carousel/'.$gambar_lama['gambar']);
			$this->db->where('id',$id);
			$this->db->update('carousel',$data);
		}
	}

	private function gambar_carousel()
	{
		$config['upload_path']          = './assets/images/upload/carousel/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['file_name']            ='carousel';
// $config['max_size']             = 100;
// $config['max_width']            = 1024;
// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar-carousel'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			return $this->upload->data("file_name");
		}
	}
}