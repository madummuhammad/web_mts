<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Profile';
		$data['profile']=$this->M_Auth->tampil_profile();
		$data['ruang_gedung']=$this->M_Profile->tampil_ruang_gedung();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_profile',$data);
		$this->load->view('admin/partial/footer');
	}

	public function edit_profile()
	{
		$this->M_Auth->edit_profile();
	}

	public function edit_sandi()
	{
		$this->M_Auth->edit_sandi();
	}
}