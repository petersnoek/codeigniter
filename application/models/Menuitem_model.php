<?php
class Menuitem_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_menuitems()
    {
        $query = $this->db->get('menuitems');
        return $query->result_array();
    }
}