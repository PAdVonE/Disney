<?php
/**
 * Created by JetBrains PhpStorm.
 * User: PadVonE
 * Date: 22.01.13
 * Time: 10:18
 * To change this template use File | Settings | File Templates.
 */
    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

class Event_model extends CI_Model {

// Выборка всех мероприятий
public function all_event() {
    $res = $this->db->query('SELECT * FROM event,mesto,clients WHERE event.client=clients.id and event.mesto=mesto.id')->result_array();
    return $res;
}

}