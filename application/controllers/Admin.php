<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('template_guru/header');
        $this->load->view('template_guru/navbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin');
        $this->load->view('template_guru/footer');
	}
}
