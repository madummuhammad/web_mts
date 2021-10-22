<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Prestasi extends CI_Model {

	public function tampil_prestasi()
	{
		return $this->db->get('prestasi')->result_array();
	}

	public function tambah()
	{
		$tahun=$this->input->post('tahun');
		$kejuaraan=$this->input->post('kejuaraan');

		$data=[
			'tahun'=>$tahun,
			'kejuaraan'=>$kejuaraan
		];

		$this->db->insert('prestasi',$data);
	}

	public function edit()
	{
		$id=$this->input->post('id');
		$tahun=$this->input->post('tahun');
		$kejuaraan=$this->input->post('kejuaraan');

		$data=[
			'tahun'=>$tahun,
			'kejuaraan'=>$kejuaraan
		];

		$this->db->where('id',$id);
		$this->db->update('prestasi',$data);
	}

	public function hapus()
	{
		$id=$this->input->post('id');

		$this->db->where('id',$id);
		$this->db->delete('prestasi');
	}
}