<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('headerIndex');
		$this->load->view('login');
		$this->load->view('footer');
	}

}