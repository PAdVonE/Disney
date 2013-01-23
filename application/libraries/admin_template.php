<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_Template {

    function admin_view($template,$data) {
        // Получаем глобальный обект CodeIgniter
        $CI = & get_instance();
        // Загружаем блоки в их очередности
        $CI->load->view('admin/blocks/header_view',$data);
        $CI->load->view('admin/' . $template . '_view');
        $CI->load->view('admin/blocks/sidebar_view');
        $CI->load->view('admin/blocks/footer_view');

    }

}