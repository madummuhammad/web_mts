<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Artikel extends CI_Model {

	public function tampil_data_artikel()
	{
		return $this->db->get('artikel')->result_array();
	}

	public function add_artikel()
	{
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');

		$data=[
			'judul'=>$judul,
			'isi'=>$isi,
			'gambar'=>$gambar,
			'tanggal_upload'=>date('Y-m-d')
		];
	}
}
