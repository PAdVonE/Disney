<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function login_in($login,$password) {
        $res = $this->db->where('login',$login)
                        ->where('password',$password)
                        ->get('users')
                        ->row_array();
        return $res;
    }

}