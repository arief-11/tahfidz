<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
        $this->load->view('login/depan');
	}

	public function login(){
		$this->load->view('login/login');
	}
}
