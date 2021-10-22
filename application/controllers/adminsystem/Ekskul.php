<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekskul extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Ekstrakulikuler';
		$data['ekskul']=$this->M_Ekskul->tampil_ekskul();
		$data['ruang_gedung']=$this->M_Profile->tampil_ruang_gedung();
		$data['pembina']=$this->M_Ketenagaan->tampil_ketenagaan();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_ekskul',$data);
		$this->load->view('admin/partial/footer',$data);
	}

	public function tambah()
	{
		$this->M_Ekskul->tambah();
	}

	public function edit()
	{
		$this->M_Ekskul->edit();
	}

	public function hapus()
	{
		$this->M_Ekskul->hapus();
	}
}