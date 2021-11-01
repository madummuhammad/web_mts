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
}
