<?php
class Security_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($id = "")
    {
        $sql = "SELECT * FROM news WHERE id='".$id."' ";

        $_SESSION['query'] = $sql;

        $query = $this->db->query($sql);
        return $query->result_array();
    }


}