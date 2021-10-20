<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Artikel';
		$data['artikel']=$this->M_Artikel->tampil_data_artikel();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_artikel',$data);
		$this->load->view('admin/partial/footer');
	}

	public function tulis()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Tulis Artikel';
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_tulis_artikel');
		$this->load->view('admin/partial/footer');
	}

	public function add_artikel()
	{
		$this->M_Artikel->add_artikel();
	}

	public function edit()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Edit Artikel';
		$data['artikel']=$this->M_Artikel->tampil_spesifik_artikel();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_edit_artikel',$data);
		$this->load->view('admin/partial/footer');
	}

	public function update()
	{
		$this->M_Artikel->update();
	}

	public function hapus()
	{
		$this->M_Artikel->hapus();
	}
}
