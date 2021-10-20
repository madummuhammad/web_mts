<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Artikel extends CI_Model {

	public function tampil_data_artikel()
	{
		return $this->db->get('artikel')->result_array();
	}

	public function tampil_spesifik_artikel()
	{
		if ($this->uri->segment(1)=='artikel' OR $this->uri->segment(1)=='Artikel') {
			$id_artikel=$this->uri->segment(3);
		} else {
			$id_artikel=$this->uri->segment(4);
		}
		$this->db->where('id_artikel',$id_artikel);
		return $this->db->get('artikel')->row_array();
	}

	public function artikel_terbaru()
	{
		$this->db->limit(3);
		return $this->db->get('artikel')->result_array();
	}

	public function add_artikel()
	{
		$judul=$this->input->post('judul');
		$isi=$this->input->post('content');
		$gambar=$this->gambar_artikel();
		$penulis=$this->session->userdata('nama');

		$data=[
			'judul'=>$judul,
			'isi'=>$isi,
			'gambar'=>$gambar,
			'tanggal_upload'=>date('l, d F Y'),
			'penulis'=>$penulis
		];

		$this->db->insert('artikel',$data);
	}

	public function update()
	{
		$id_artikel=$this->input->post('id_artikel');
		$judul=$this->input->post('judul');
		$isi=$this->input->post('content');
		$gambar=$this->gambar_artikel();

		$this->db->where('id_artikel',$id_artikel);
		$gambar_lama=$this->db->get('artikel')->row_array();

		if ($gambar==NULL) {
			$data=[
				'judul'=>$judul,
				'isi'=>$isi,
				'tanggal_upload'=>date('l, d F Y'),
			];
			$this->db->where('id_artikel',$id_artikel);
			$this->db->update('artikel',$data);
		} else {
			unlink(FCPATH . 'assets/images/upload/artikel/'.$gambar_lama['gambar']);
			$data=[
				'judul'=>$judul,
				'isi'=>$isi,
				'gambar'=>$gambar,
				'tanggal_upload'=>date('l, d F Y'),
			];
			$this->db->where('id_artikel',$id_artikel);
			$this->db->update('artikel',$data);
		}
	}

	public function hapus()
	{
		$id_artikel=$this->input->post('id_artikel');
		$this->db->where('id_artikel',$id_artikel);
		$this->db->delete('artikel');
	}

	private function gambar_artikel()
	{
		$config['upload_path']          = './assets/images/upload/artikel/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['file_name']            ='artikel';
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
