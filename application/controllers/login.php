<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		if($this->session->userdata('username')) {
			redirect('Chores/home');
		}
	}

	public function index() {
		$data['title'] = 'KYC Homepage';

		$this->load->view('header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function signup() {
		$data['title'] = 'KYC Homepage';

		$this->load->view('header', $data);
		$this->load->view('signup');
		$this->load->view('footer');
	}

	public function validateLogin() {

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_verifyUser');

		if ($this->form_validation->run() === false) {
			$this->load->view('login');
		} else {
			redirect('Chores/home');
		}
	}

	public function verifyUser() {

		$this->load->model('user');
		$check = $this->user->validate();
		if($check) {
			$data = array(
        'user_logged_in'  =>  TRUE,
        'username' => $this->input->post('username')
      );
			$this->session->set_userdata($data, 1);
			return true;
		} else {
			$this->form_validation->set_message('verifyUser', 'The username and password do not match.');
			return false;
		}
	}

	public function addUser() {

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_newUser');

		if ($this->form_validation->run() === false) {
			$this->load->view('signup');
		} else {
			redirect('Chores/home');
		}
	}

	public function newUser() {

		$this->load->model('user');
		$check = $this->user->exists();
		if(!$check) {
			$this->user->addUser();
			$data = array(
        'user_logged_in'  =>  TRUE,
        'username' => $this->input->post('username')
      );
			$this->session->set_userdata($data, 1);
			return true;
		} else {
			$this->form_validation->set_message('newUser', 'The username is already in use.');
			return false;
		}		
	}
}