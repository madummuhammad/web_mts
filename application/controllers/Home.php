<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['artikel_terbaru']=$this->M_Artikel->artikel_terbaru();
		$data['artikel']=$this->M_Artikel->tampil_data_artikel();
		$data['carousel']=$this->M_Carousel->tampil_carousel();
		$data['galeri']=$this->M_Galeri->tampil_galeri();
		$this->load->view('website/partial/header');
		$this->load->view('website/partial/navbar');
		$this->load->view('website/page/v_home',$data);
		$this->load->view('website/partial/footer');
	}
}
