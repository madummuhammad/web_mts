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

	public function edit()
	{
		$id=$this->input->post('id');
		$tagline=$this->input->post('tagline');
		$gambar=$this->gambar_galeri();

		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('galeri')->row_array();

		if ($gambar==NULL) {
			$data=[
				'tagline'=>$tagline,
			];
			$this->db->where('id',$id);
			$this->db->update('galeri',$data);
		} else {
			unlink(FCPATH . 'assets/images/upload/galeri/'.$gambar_lama['gambar']);
			$data=[
				'tagline'=>$tagline,
				'gambar'=>$gambar
			];
			$this->db->where('id',$id);
			$this->db->update('galeri',$data);
		}
	}

	public function hapus()
	{
		$id=$this->input->post('id');

		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('galeri')->row_array();
		unlink(FCPATH . 'assets/images/upload/galeri/'.$gambar_lama['gambar']);

		$this->db->where('id',$id);
		$this->db->delete('galeri');
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
		if ( ! $this->upload->do_upload('gambar-galeri'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			return $this->upload->data("file_name");
		}
	}
}