<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('template_guru/header');
        $this->load->view('template_guru/navbar');
        $this->load->view('template_guru/sidebar');
        $this->load->view('guru');
        $this->load->view('template_guru/footer');
	}
}
