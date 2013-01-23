<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function all_messege() {
        $res = $this->db->get('mesages')->result_array();
        return $res;
    }

}