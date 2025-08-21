<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('helpers/head');
		$this->load->view('pagina1');
		$this->load->view('helpers/footer');
	}


	protected function otracosa(){

		$this->load->view('helpers/head');
		$this->load->view('body');
		$this->load->view('helpers/footer');

	}
}
