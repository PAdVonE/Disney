<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array();
        $this->load->library('session');
        $pass = $this->session->userdata('password');
        if (!empty($pass)) {
            redirect('index.php/admin');
        }
        $this->load->view('admin/blocks/login_view', $data);
    }

    // Логинимся и если все хорошо записываем ссесию
    function login_in() {
        $data = array();
        $this->load->library('session');
        $pass = $this->session->userdata('password');
        if (!empty($pass)) {
            redirect('index.php/admin');
        }
        $login = trim(stripslashes($this->input->post('login')));
        $password = trim(htmlspecialchars(stripslashes($this->input->post('password'))));
        $this->load->model('login_model');
        $this->load->helper('security');
        strrev(do_hash($password, 'md5'));
        $password = strrev(do_hash($password, 'md5')) . "q2gh0k";
        $user = $this->login_model->login_in($login, $password);
        if (!empty($user)) {
            $newdata = array(
                'username' => $user['login'],
                'fio' => $user['fio'],
                'password' => $user['password'],
                'id' => $user['id'],
                'type' => $user['type'],
                'avatar' => $user['avatar'],
                'logged_in' => 'yes'
            );
            $this->session->set_userdata($newdata);
            redirect('index.php/admin');
        } else {
            $this->load->view('admin/blocks/login_view');
        }
    }

    // Уничтожаем ссесию
    function login_out() {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('index.php/login');
    }

}