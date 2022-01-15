<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Message extends CI_Controller
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
        $this->load->model('Message_model', 'message');

        $data['title'] = 'Message Page';
        $data['messages'] = $this->message->get_message();

        $this->load->view('templates/header', $data);
        $this->load->view('message/index', $data);
        $this->load->view('templates/modal');
        $this->load->view('templates/footer');
    }
}