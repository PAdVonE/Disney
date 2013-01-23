<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    public function all_user() {
        $res = $this->db->get('users')->result_array();
        return $res;
    }

    public function add_user($data) {
        $this->db->insert('users', $data);
        return TRUE;
    }

    function drop_user($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
        return true;
    }

    function get_user($login) {
        $res = $this->db->where('login', $login)->get('users')->row_array();
        return $res;
    }

    function edit_user($data) {
        $this->db->where('id', $data['id']);
        $this->db->update('users', $data);
        return TRUE;
    }

}