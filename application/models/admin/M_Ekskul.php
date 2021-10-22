<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Ekskul extends CI_Model {

	public function tampil_ekskul()
	{
		return $this->db->get('ekskul')->result_array();
	}

	public function tambah()
	{
		$ekskul=$this->input->post('ekskul');
		$pembina=$this->input->post('pembina');

		$data=[
			'ekskul'=>$ekskul,
			'pembina'=>$pembina
		];

		$this->db->insert('ekskul',$data);
	}

	public function edit()
	{
		$id=$this->input->post('id');
		$ekskul=$this->input->post('ekskul');
		$pembina=$this->input->post('pembina');

		$data=[
			'ekskul'=>$ekskul,
			'pembina'=>$pembina
		];

		$this->db->where('id',$id);
		$this->db->update('ekskul',$data);
	}

	public function hapus()
	{
		$id=$this->input->post('id');

		$this->db->where('id',$id);
		$this->db->delete('ekskul');
	}

}