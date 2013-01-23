<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->admin_library->if_session();
        $this->load->helper('security');
        $this->load->model('user_model');
    }

    public function index() {
        $data['all_users'] = $this->user_model->all_user();
        $template = "user";
        $this->admin_template->admin_view($template, $data);
    }

    function user_page($login) {
        $data = array();
        $data['get_user'] = $this->user_model->get_user($login);
        $template = "user_page";
        $this->admin_template->admin_view($template, $data);
    }

    function add_user() {
        $btn = $this->input->post('add');
        $data = array();
        if (!empty($btn)) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '500';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $images_data = $this->upload->data();
            
            $data['avatar'] = $images_data['file_name'];
            $data['login'] = $this->input->post('login');
            $data['password'] = $this->input->post('password');
            $data['password'] = strrev(do_hash($data['password'], 'md5')) . "q2gh0k";
            $data['fio'] = $this->input->post('fio');
            $data['phone'] = $this->input->post('phone');
            
            $true_add_user = $this->user_model->add_user($data);
            if ($true_add_user) {
                redirect('index.php/user'); 
            }
        } else {
            $template = "add_user";
            $this->admin_template->admin_view($template, $data);
        }
    }

    function edit_user($login) {
        $data['get_user'] = $this->user_model->get_user($login);
        $template = "edit_user";
        $this->admin_template->admin_view($template, $data);
    }

    function drop_user($id) {
        $true_delete = $this->user_model->drop_user($id);
        if ($true_delete) {
            redirect('index.php/user');
        }
    }

    function update_user($id) {
        $data['id'] = $id;
        $data['login'] = $this->input->post('login');
        $data['password'] = $this->input->post('password');
        if ($data['password'] == 'Пароль') {
            unset($data['password']);
        } else {
            $data['password'] = strrev(do_hash($data['password'], 'md5')) . "q2gh0k";
        }
        $data['fio'] = $this->input->post('fio');
        $data['phone'] = $this->input->post('phone');
        print_r($data);
        $true_edit = $this->user_model->edit_user($data);
        if ($true_edit) {
            redirect('index.php/user');
        }
    }

}