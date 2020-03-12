<?php

class Login_model extends CI_Model {
    public function getUser() {
        return $this->db->get('user')->result_array();
    }

    public function login($name) {
        return $this->db->get_where('user', ['username' => $name])->result_array();
    }
}

?>