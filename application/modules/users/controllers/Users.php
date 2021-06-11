<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function index(){
		$this->load->view('list');
	}

	public function login(){
		$this->load->view('login');
	}

	public function logout(){
		$this->load->view('login');
	}
}