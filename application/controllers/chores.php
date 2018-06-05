<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Chores extends CI_Controller {

  public function home() {
    $data['title'] = 'Chores';

    $this->load->view('header', $data);
    $this->load->view('chorelist');
    $this->load->view('footer');
  }
};