<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		if($this->session->userdata('test')) {
			redirect('Dashboard/home');
		}
	}

	public function index() {
		$data['title'] = 'KYC Homepage';

		$this->load->view('header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function validateLogin() {

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_verifyUser');

		if ($this->form_validation->run() === false) {
			$this->load->view('login');
		} else {
			redirect('Dashboard/home');
		}
	}

	public function verifyUser() {

		$this->load->model('user');
		$check = $this->user->validate();
		if($check) {
			// $newdata = array(
			// 	'username' 	=> $this->input->post('username'),
			// 	'logged_in' => true
			// );
			$this->session->set_userdata('test', 1);
			return true;
		} else {
			$this->form_validation->set_message('verifyUser', 'The username and password do not match.');
			return false;
		}
	}
}