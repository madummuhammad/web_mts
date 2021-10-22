<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Ketenagaan extends CI_Model {

	public function tampil_ketenagaan()
	{
		return $this->db->get('ketenagaan')->result_array();
	}

	public function tambah()
	{
		$nama=$this->input->post('nama');
		$status=$this->input->post('status');
		$keterangan=$this->input->post('keterangan');

		$data=[
			'nama'=>$nama,
			'status'=>$status,
			'keterangan'=>$keterangan
		];

		$this->db->insert('ketenagaan',$data);
	}

	public function edit()
	{
		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$status=$this->input->post('status');
		$keterangan=$this->input->post('keterangan');

		$data=[
			'nama'=>$nama,
			'status'=>$status,
			'keterangan'=>$keterangan
		];

		$this->db->where('id',$id);
		$this->db->update('ketenagaan',$data);
	}

	public function hapus()
	{
		$id=$this->input->post('id');

		$this->db->where('id',$id);
		$this->db->delete('ketenagaan');
	}

}