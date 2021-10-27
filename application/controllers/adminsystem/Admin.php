<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Dashboard';
		$data['ruang_gedung']=$this->M_Profile->tampil_ruang_gedung();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_dashboard');
		$this->load->view('admin/partial/footer',$data);
	}

	public function admin()
	{
		forbidden_role();
		$data['user']=$this->session->userdata();
		$data['title']='Admin';
		$data['admin']=$this->M_Admin->tampil_admin();
		$data['ruang_gedung']=$this->M_Profile->tampil_ruang_gedung();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_admin');
		$this->load->view('admin/partial/footer',$data);
	}

	public function tambah()
	{
		$this->M_Admin->tambah();
	}

	public function hapus()
	{
		$this->M_Admin->hapus();
	}
}
