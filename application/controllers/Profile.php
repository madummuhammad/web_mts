<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$data['profile_madrasah']=$this->M_Profile->tampil_profile();
		$this->load->view('website/partial/header');
		$this->load->view('website/partial/navbar');
		$this->load->view('website/page/v_profile_madrasah',$data);
		$this->load->view('website/partial/footer');
	}

	public function visimisi()
	{
		$data['visimisi']=$this->M_Profile->tampil_visimisi();
		$data['misi']=$this->M_Profile->tampil_misi();
		$this->load->view('website/partial/header');
		$this->load->view('website/partial/navbar');
		$this->load->view('website/page/v_visimisi',$data);
		$this->load->view('website/partial/footer');
	}

	public function sarana()
	{
		$data['profile_madrasah']=$this->M_Profile->tampil_profile();
		$this->load->view('website/partial/header');
		$this->load->view('website/partial/navbar');
		$this->load->view('website/page/v_visimisi',$data);
		$this->load->view('website/partial/footer');
	}

}
