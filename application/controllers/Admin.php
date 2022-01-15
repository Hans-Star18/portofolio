<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('portofolio');
        }
    }

    public function index()
    {
        $data['title'] = 'Administrator page';

        $this->load->view('templates/header', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/modal');
        $this->load->view('templates/footer');
    }

}