<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Chores extends CI_Controller {

  function __construct() {
    parent::__construct();
    if(!$this->session->userdata('username')) {
      redirect('Login/index');
    }
  }

  public function home()
  {
    $data['title'] = 'Chores';

    $this->load->view('header', $data);
    $this->load->view('content');    
    $this->load->view('chorelist');
    $this->load->view('footer');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('Login/index');
  }

  public function tasks()
  {
    $this->load->model('tasks');
    $taskArr = $this->tasks->getList($this->session->userdata('username'));

    // $taskArr = array('a', 'b', 'c', 'd', 'e');

    header('Content-Type: application/json');
    echo json_encode( $taskArr );
  }
};