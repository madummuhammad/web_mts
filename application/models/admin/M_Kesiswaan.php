<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kesiswaan extends CI_Model {

	public function tampil_kesiswaan()
	{
		return $this->db->get('kesiswaan')->result_array();
	}

	public function tambah()
	{
		$tahun=$this->input->post('tahun');
		$vii=$this->input->post('vii');
		$viii=$this->input->post('viii');
		$ix=$this->input->post('ix');
		$jumlah=$this->input->post('jumlah');

		$data=[
			'tahun'=>$tahun,
			'vii'=>$vii,
			'viii'=>$viii,
			'ix'=>$ix,
			'jumlah'=>$jumlah
		];

		$this->db->insert('kesiswaan',$data);
	}

	public function edit()
	{
		$id=$this->input->post('id');
		$tahun=$this->input->post('tahun');
		$vii=$this->input->post('vii');
		$viii=$this->input->post('viii');
		$ix=$this->input->post('ix');
		$jumlah=$this->input->post('jumlah');

		$data=[
			'tahun'=>$tahun,
			'vii'=>$vii,
			'viii'=>$viii,
			'ix'=>$ix,
			'jumlah'=>$jumlah
		];

		$this->db->where('id',$id);
		$this->db->update('kesiswaan',$data);
	}

	public function hapus()
	{
		$id=$this->input->post('id');

		$this->db->where('id',$id);
		$this->db->delete('kesiswaan');
	}
}