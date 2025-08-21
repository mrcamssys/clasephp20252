<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome ControladorB CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('contexto');
	}
	public function index()
	{
		$this->load->view('helpers/head');
		$this->load->view('pagina1');
		$this->load->view('helpers/footer');
	}
}