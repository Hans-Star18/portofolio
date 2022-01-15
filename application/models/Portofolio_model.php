<?php

class Portofolio_model extends CI_Model
{
    public function send_message()
    {
        $data = [
            'date' => time(),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'comment' => $this->input->post('message'),
        ];

        $this->db->insert('comment', $data);

        return $this->db->affected_rows();
    }

    public function get_project()
    {
        return $this->db->get('project')->result_array();
    }
}