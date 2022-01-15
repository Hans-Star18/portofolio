<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portofolio extends CI_Controller
{
    public function index()
    {
        $this->load->model('Portofolio_model', 'portofolio');

        $data['projects'] = $this->portofolio->get_project();
        $data['title'] = 'Portofolio | Agus Suardiasa';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('portofolio/index', $data);
        $this->load->view('templates/modal');
        $this->load->view('templates/footer');
    }

    public function send()
    {
        $this->load->model('Portofolio_model', 'portofolio');
        $this->load->model('Sweetalert_model', 'sweet');

        if ($this->portofolio->send_message() > 0) {
            $this->sweet->alert('success', 'Thank :)', 'Sent Message Success', 'portofolio');
        } else {
            $this->sweet->alert('error', 'Opps...', 'Failed Send a Message', 'portofolio');
        }
    }

    public function login()
    {
        $this->load->model('Sweetalert_model', 'sweet');

        $email = $this->input->post('mail');
        $password = $this->input->post('pass');

        $user = $this->db->get_where('user', ['email' => $email])->result_array();
        // var_dump($user);die;
        if ($user) {
            foreach ($user as $u) {
                if ($password === $u['password']) {
                    $data = [
                        'email' => $u['email'],
                        'login' => true,
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->sweet->alert('warning', 'try again', 'Your enter the wrong Password!!!', 'portofolio');
                }
            }
        } else {
            $this->sweet->alert('info', 'Sorry', 'You not registed as Admin', 'portofolio');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('login');

        redirect('portofolio');
    }

}