<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
	}

	 public function index()
	{
		$this->load->view('helpers/head');
		$this->load->view('vista_Error404');
		$this->load->view('helpers/footer');
		
	}

}
