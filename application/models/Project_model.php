<?php

class Project_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sweetalert_model', 'sweet');
    }

    public function add_project()
    {
        $upload_image = $_FILES['add_image'];
        if ($upload_image['error'] === 4) {
            $this->sweet->alert('warning', '', 'Choose Image First!', 'project');
            return $false_image = true;
        } else {

            if ($upload_image['name']) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '6000';
                $config['upload_path'] = './assets/image/project/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('add_image')) {
                    $this->upload->data();
                } else {
                    $this->sweet->alert('warning', '', 'Only image size < 6MB can Upload!', 'project');
                    return $false_image = true;
                }
            }
        }
        if (isset($false_image)) {
            $false_image = true;
        } else {
            $data = [
                'image' => $upload_image['name'],
                'description' => $this->input->post('add_description'),
                'link' => $this->input->post('add_link'),
            ];

            $this->db->insert('project', $data);
        }

        if (isset($false_image)) {
            return 'model failed';
        } else {
            return $this->db->affected_rows();
        }
    }

    public function delete_project($id)
    {
        $this->db->delete('project', ['id' => $id]);
    }

    public function getProjectByID($id)
    {
        return $this->db->get_where('project', ['id' => $id])->row_array();
    }

    public function update_project()
    {
        if ($this->input->post('add')) {
            $upload_image = $_FILES['add_image'];
            // var_dump($upload_image);die;

            if ($upload_image['error'] === 4) {
                $this->sweet->alert('warning', '', 'Choose Image First!', 'project');
                return $false_image = true;
            } else {
                if ($upload_image['name']) {
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '6000';
                    $config['upload_path'] = './assets/image/project/';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('add_image')) {
                        $this->upload->data();
                    } else {
                        $this->sweet->alert('warning', '', 'Only image size < 6MB can Upload!', 'project');
                        return $false_image = true;
                    }
                }
            }

            if (isset($false_image)) {
                $false_image = true;
            } else {
                $data = [
                    'image' => $upload_image['name'],
                    'description' => $this->input->post('add_description'),
                    'link' => $this->input->post('add_link'),
                ];

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('project', $data);
            }
        } else if ($this->input->post('update')) {
            $upload_image['name'] = $this->getProjectByID($this->input->post('id'))['image'];
            // var_dump($upload_image['name']);die;

            $data = [
                'image' => $upload_image['name'],
                'description' => $this->input->post('add_description'),
                'link' => $this->input->post('add_link'),
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('project', $data);
        }
        if (isset($false_image)) {
            return 'model failed';
        } else {
            return $this->db->affected_rows();
        }
    }

}