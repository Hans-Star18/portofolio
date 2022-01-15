<?php

class Message_model extends CI_Model
{
    public function get_message()
    {
        return $this->db->get('comment')->result_array();
    }
}