<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function detil()
	{
		$data['artikel_terbaru']=$this->M_Artikel->artikel_terbaru();
		$data['spesifik_artikel']=$this->M_Artikel->tampil_spesifik_artikel();
		$data['artikel']=$this->M_Artikel->tampil_data_artikel();
		$this->load->view('website/partial/header');
		$this->load->view('website/partial/navbar');
		$this->load->view('website/page/v_artikel',$data);
		$this->load->view('website/partial/footer');
	}
}
