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

	public function tampil_tanah_bangunan()
	{
		return $this->db->get('tanah_bangunan')->row_array();
	}

	public function tampil_non_bangunan()
	{
		return $this->db->get('non_bangunan')->row_array();
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

	public function edit_tanah_bangunan()
	{
		$luas_tanah=$this->input->post('luas_tanah');
		$luas_bangunan=$this->input->post('luas_bangunan');

		$data=[
			'luas_tanah'=>$luas_tanah,
			'luas_bangunan'=>$luas_bangunan
		];

		$this->db->where('id',1);
		$this->db->update('tanah_bangunan',$data);
	}

	public function edit_non_bangunan()
	{
		$halaman_madrasah=$this->input->post('halaman_madrasah');
		$lapangan_olahraga=$this->input->post('lapangan_olahraga');

		$data=[
			'halaman_madrasah'=>$halaman_madrasah,
			'lapangan_olahraga'=>$lapangan_olahraga
		];

		$this->db->where('id',1);
		$this->db->update('non_bangunan',$data);
	}

	public function tampil_ruang_gedung()
	{
		return $this->db->get('ruang_gedung')->result_array();
	}

	public function tambah_ruang_gedung()
	{
		$nama_bangunan=$this->input->post('nama_bangunan');
		$status_kepemilikan=$this->input->post('status_kepemilikan');
		$baik=$this->input->post('baik');
		$sedang=$this->input->post('sedang');
		$rusak=$this->input->post('rusak');

		$data=[
			'nama_bangunan'=>$nama_bangunan,
			'status_kepemilikan'=>$status_kepemilikan,
			'baik'=>$baik,
			'sedang'=>$sedang,
			'rusak'=>$rusak
		];

		$this->db->insert('ruang_gedung',$data);
	}

	public function edit_ruang_gedung()
	{
		$id=$this->input->post('id');
		$nama_bangunan=$this->input->post('nama_bangunan');
		$status_kepemilikan=$this->input->post('status_kepemilikan');
		$baik=$this->input->post('baik');
		$sedang=$this->input->post('sedang');
		$rusak=$this->input->post('rusak');

		$data=[
			'nama_bangunan'=>$nama_bangunan,
			'status_kepemilikan'=>$status_kepemilikan,
			'baik'=>$baik,
			'sedang'=>$sedang,
			'rusak'=>$rusak
		];

		$this->db->where('id',$id);
		$this->db->update('ruang_gedung',$data);
	}

	public function hapus_ruang_gedung()
	{
		$id=$this->input->post('id');

		$this->db->where('id',$id);
		$this->db->delete('ruang_gedung');
	}


}