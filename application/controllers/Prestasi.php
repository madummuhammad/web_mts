<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

	public function index()
	{
		$data['prestasi']=$this->M_Prestasi->tampil_prestasi();
		$this->load->view('website/partial/header');
		$this->load->view('website/partial/navbar');
		$this->load->view('website/page/v_prestasi',$data);
		$this->load->view('website/partial/footer');
	}
}
