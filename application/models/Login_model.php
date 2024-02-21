<?php
class Login_model extends CI_Model {
    public function check_login($username, $password) {
        $query = $this->db->get_where('user', array('username' => $username, 'password' => $password));

        if ($query->num_rows() > 0) {
            return $query->row(); 
        } else {
            return false; 
        }
    }
}
