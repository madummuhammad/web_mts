<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Profile extends CI_Model {

	public function tampil_profile()
	{
		return $this->db->get('profile_madrasah')->row_array();
	}

	public function tampil_visimisi()
	{
		return $this->db->get('visi_misi')->row_array();
	}

	public function edit_profile()
	{
		$nama_madrasah=$this->input->post('nama_madrasah');
		$no_statistik=$this->input->post('no_statistik');
		$npsn=$this->input->post('npsn');
		$alamat=$this->input->post('alamat');
		$tahun_berdiri=$this->input->post('tahun_berdiri');
		$status=$this->input->post('status');
		$terakreditasi=$this->input->post('terakreditasi');
		$nama_kepala=$this->input->post('nama_kepala');
		$tmt=$this->input->post('tmt');

		$data=[
			'nama_madrasah'=>$nama_madrasah,
			'no_statistik'=>$no_statistik,
			'npsn'=>$npsn,
			'alamat'=>$alamat,
			'tahun_berdiri'=>$tahun_berdiri,
			'status'=>$status,
			'terakreditasi'=>$terakreditasi,
			'nama_kepala'=>$nama_kepala,
			'tmt'=>$tmt
		];

		$this->db->where('id_profile',1);
		$this->db->update('profile_madrasah',$data);

	}

	public function edit_visi()
	{
		$visi=$this->input->post('visi');
		$data=[
			'visi'=>$visi
		];

		$this->db->where('id',1);
		$this->db->update('visi_misi',$data);
	}

	public function edit_misi()
	{
		$misi=$this->input->post('misi');
		$data=[
			'misi'=>$misi
		];

		$this->db->where('id',1);
		$this->db->update('visi_misi',$data);
	}
}