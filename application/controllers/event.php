<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Event extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->admin_library->if_session();
        $this->load->model('event_model');
    }

    public function index() {

        $data['all_event'] = $this->event_model->all_event();
        $template = "event";
        $this->admin_template->admin_view($template, $data);
    }

    function add_event() {
        $data = array();
        $template = "add_event";
        $this->admin_template->admin_view($template, $data);
    }

    function edit_event() {
        $data = array();
        $template = "event";
        $this->admin_template->admin_view($template, $data);
    }

    function drop_event() {
        $data = array();
        $template = "event";
        $this->admin_template->admin_view($template, $data);
    }

}