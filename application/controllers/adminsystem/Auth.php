<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/v_login');
	}

	public function login()
	{
		$this->M_Auth->login();
	}

	public function logout()
	{
		$this->M_Auth->logout();
	}
}
