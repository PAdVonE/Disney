<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Client extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->admin_library->if_session();
    }

    public function index() {
        $data = $this->admin_library->all_messages();
        $template = "client";
        $this->admin_template->admin_view($template, $data);
    }

    function add_client() {
        $data = $this->admin_library->all_messages();
        $template = "add_client";
        $this->admin_template->admin_view($template, $data);
    }

    function edit_client() {
        $data = $this->admin_library->all_messages();
        $template = "edit_client";
        $this->admin_template->admin_view($template, $data);
    }

    function drop_client() {
        $data = $this->admin_library->all_messages();
        $template = "drop_client";
        $this->admin_template->admin_view($template, $data);
    }

}