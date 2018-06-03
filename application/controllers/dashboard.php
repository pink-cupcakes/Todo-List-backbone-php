<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  function __construct() {
    parent::__construct();
    if(!$this->session->userdata('test')) {
      redirect('Login/index');
    }
  }

  public function home() {
    $data['title'] = 'User signed in';

    $this->load->view('header', $data);
    $this->load->view('content');
    $this->load->view('footer');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('Login/index');
  }

  public function chores() {
    $data['title'] = 'Your chores';

    $this->load->view('header', $data);
    $this->load->view('chorelist');
    $this->load->view('footer');    
  }
}