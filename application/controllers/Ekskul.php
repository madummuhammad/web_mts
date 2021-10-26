<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekskul extends CI_Controller {

	public function index()
	{
		$data['ekskul']=$this->M_Ekskul->tampil_ekskul();
		$this->load->view('website/partial/header');
		$this->load->view('website/partial/navbar');
		$this->load->view('website/page/v_ekskul',$data);
		$this->load->view('website/partial/footer');
	}
}
