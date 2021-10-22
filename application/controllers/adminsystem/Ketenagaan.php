<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketenagaan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Profile Madrasah';
		$data['ketenagaan']=$this->M_Ketenagaan->tampil_ketenagaan();
		$data['ruang_gedung']=$this->M_Profile->tampil_ruang_gedung();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_ketenagaan',$data);
		$this->load->view('admin/partial/footer',$data);
	}

	public function tambah()
	{
		$this->M_Ketenagaan->tambah();
	}

	public function edit()
	{
		$this->M_Ketenagaan->edit();
	}

	public function hapus()
	{
		$this->M_Ketenagaan->hapus();
	}
}