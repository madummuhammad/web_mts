<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Prestasi';
		$data['galeri']=$this->M_Galeri->tampil_galeri();
		$data['ruang_gedung']=$this->M_Profile->tampil_ruang_gedung();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_galeri',$data);
		$this->load->view('admin/partial/footer',$data);
	}

	public function tambah()
	{
		$this->M_Galeri->tambah();
	}

	public function edit()
	{
		$this->M_Galeri->edit();
	}

	public function hapus()
	{
		$this->M_Galeri->hapus();
	}
}