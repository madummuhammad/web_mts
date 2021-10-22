<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_madrasah extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Profile Madrasah';
		$data['profile_madrasah']=$this->M_Profile->tampil_profile();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_profile_madrasah',$data);
		$this->load->view('admin/partial/footer');
	}

	public function edit_profile()
	{
		$this->M_Profile->edit_profile();
	}

	public function visi_misi()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Visi dan Misi';
		$data['visimisi']=$this->M_Profile->tampil_visimisi();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_visimisi',$data);
		$this->load->view('admin/partial/footer');
	}

	public function edit_visi()
	{
		$this->M_Profile->edit_visi();
	}

	public function edit_misi()
	{
		$this->M_Profile->edit_misi();
	}

	public function tanah_bangunan()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Tanah dan Bangunan';
		$data['tanah_bangunan']=$this->M_Profile->tampil_tanah_bangunan();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_tanah_bangunan',$data);
		$this->load->view('admin/partial/footer');
	}

	public function edit_tanah_bangunan()
	{
		$this->M_Profile->edit_tanah_bangunan();
	}

	public function lahan_non_bangunan()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Lahan Non Bangunan';
		$data['non_bangunan']=$this->M_Profile->tampil_non_bangunan();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_non_bangunan',$data);
		$this->load->view('admin/partial/footer');
	}

	public function edit_non_bangunan()
	{
		$this->M_Profile->edit_non_bangunan();
	}

	public function ruang_gedung()
	{
		$data['user']=$this->session->userdata();
		$data['title']='Ruangan dan Gedung';
		$data['ruang_gedung']=$this->M_Profile->tampil_ruang_gedung();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/topbar');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_ruang_gedung',$data);
		$this->load->view('admin/partial/footer',$data);
	}

	public function tambah_ruang_gedung()
	{
		$this->M_Profile->tambah_ruang_gedung();
	}

	public function edit_ruang_gedung()
	{
		$this->M_Profile->edit_ruang_gedung();
	}

	public function hapus_ruang_gedung()
	{
		$this->M_Profile->hapus_ruang_gedung();
	}

	

}