<?php
  class tasks extends CI_Model {
    public function getList ($input) {
      $arr['username'] = $input;
      return $this->db->get_where('Tasks', $arr)->result();
    }

    public function deleteTask ($id) {
      $arr['id'] = $id;
      return $this->db->delete('Tasks', $arr); 
    }
  }
?>