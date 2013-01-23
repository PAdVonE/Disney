<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_library {
    // Проверка существует ли ссесия
    function if_session() {
        $CI = &get_instance();
        $CI->load->library('session');
        $logined = $CI->session->userdata('logged_in');
        if ($logined == 'yes') {
            return TRUE;
        }
        else{
redirect('/index.php/login');
        }
    }

}