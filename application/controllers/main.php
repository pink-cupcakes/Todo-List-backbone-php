<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function index() {
		$data['title'] = 'KYC Homepage';

		$this->load->view('header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}

	function chores() {
		$data['title'] = 'KYC Calendar';

		$this->load->view('header', $data);
		$this->load->view('chorelist');
		$this->load->view('footer');
	}
}