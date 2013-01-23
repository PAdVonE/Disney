<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->admin_library->if_session();
        $this->load->model('user_model');
    }

    public function index() {
//        print_r($this->session->all_userdata());
        $data['count_users'] = count($this->user_model->all_user());
        $template = "main";
        $this->admin_template->admin_view($template, $data);
    }

}