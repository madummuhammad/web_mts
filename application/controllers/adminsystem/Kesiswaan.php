<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kesiswaan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Kesiswaan';
		$data['kesiswaan']=$this->M_Kesiswaan->tampil_kesiswaan();
		$data['ruang_gedung']=$this->M_Profile->tampil_ruang_gedung();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_kesiswaan',$data);
		$this->load->view('admin/partial/footer',$data);
	}

	public function json_kesiswaan()
	{
		$this->M_Kesiswaan->json_kesiswaan();
	}

	public function tambah()
	{
		$this->M_Kesiswaan->tambah();
	}

	public function edit()
	{
		$this->M_Kesiswaan->edit();
	}

	public function hapus()
	{
		$this->M_Kesiswaan->hapus();
	}
}