<?php
  class tasks extends CI_Model {
    public function getList ($input) {
      $arr['username'] = $input;
      $this->db->order_by("deadline", "asc");
      return $this->db->get_where('Tasks', $arr)->result();
    }

    public function deleteTask ($id) {
      $arr['id'] = $id;
      return $this->db->delete('Tasks', $arr); 
    }

    public function createTask ($date) {
      if($date == 0 || $this->input->post('name') == '') {
        return;
      };
      $arr['username'] = $this->session->userdata('username');
      $arr['task'] = $this->input->post('name');
      $arr['deadline'] = $date;
      return $this->db->insert('Tasks', $arr);
    }
  }
?>