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

  public function createValidate() {
    $this->form_validation->set_rules('name', 'Taskname', 'required|callback_createTask');

    $this->form_validation->run();
    redirect('Chores/home');
  }

  public function createTask()
  {
    $this->load->model('tasks');
    $deadline = date($this->input->post('date'));
    $this->tasks->createTask($deadline);
  }

  public function tasks()
  {
    $this->load->model('tasks');
    $taskArr = $this->tasks->getList($this->session->userdata('username'));

    header('Content-Type: application/json');
    echo json_encode( $taskArr );
  }

  public function delete($taskID)
  {
    $this->load->model('tasks');
    $this->tasks->deleteTask($taskID);

    $this->tasks();
  }

  public function update($taskID)
  {
    $this->load->model('tasks');   
  }
};