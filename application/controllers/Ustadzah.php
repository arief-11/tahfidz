<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ustadzah extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('ustadzah/dashboard');
        $this->load->view('template/footer');
	}
}
