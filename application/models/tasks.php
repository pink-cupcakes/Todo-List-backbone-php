<?php
  class tasks extends CI_Model {
    public function getList ($input) {
      $arr['username'] = $input;
      return $this->db->get_where('Tasks', $arr)->result();
    }
  }
?>