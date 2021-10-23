<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Carousel extends CI_Model {

	public function tampil_carousel()
	{
		return $this->db->get('carousel')->result_array();
	}

	public function hapus()
	{
		$id=$this->input->post('id');

		$this->db->where('id',$id);
		$this->db->delete('carousel');
	}
}