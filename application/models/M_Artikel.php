<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Artikel extends CI_Model {
	public function tampil_data_artikel()
	{
		return $this->db->get('artikel')->result_array();
	}

	public function tampil_spesifik_artikel()
	{
		$id_artikel=$this->uri->segment(4);
		$this->db->where('id_artikel',$id_artikel);
		return $this->db->get('artikel')->row_array();
	}

	public function artikel_terbaru()
	{
		$this->db->limit(3);
		return $this->db->get('artikel')->result_array();
	}
}
?>
