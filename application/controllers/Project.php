<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('portofolio');
        }
        $this->load->model('Portofolio_model', 'portofolio');
        $this->load->model('Project_model', 'project');
        $this->load->model('Sweetalert_model', 'sweet');
    }

    public function index()
    {
        $data['title'] = 'Project Management';
        $data['projects'] = $this->portofolio->get_project();

        $this->load->view('templates/header', $data);
        $this->load->view('project/index', $data);
        $this->load->view('templates/modal');
        $this->load->view('templates/footer');
    }

    public function add()
    {
        if ($this->project->add_project() === 1) {
            $this->sweet->alert('success', '', 'New Project Succesfully added', 'project');
        } else if ($this->project->add_project() < 0) {
            $this->sweet->alert('error', 'Oops', 'Failed add new Project', 'project');
        }
    }
    
    public function update()
    {
        if ($this->project->update_project() === 1) {
            $this->sweet->alert('success', '', 'Project edited', 'project');
        } else if ($this->project->update_project() < 0) {
            $this->sweet->alert('error', 'Oops', 'Failed edit Project', 'project');
        }
    }

    public function delete($id)
    {
        $this->project->delete_project($id);
        redirect('project');
    }

    public function getedit()
    {
        // echo json_encode($this->menu->getSubmenuByID($this->input->post('id')));
        echo json_encode($this->project->getProjectByID($this->input->post('id')));
    }

}