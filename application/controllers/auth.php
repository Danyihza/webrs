<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('authModel');
    }
    public function index()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        
        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|required',
            [
                'required' => 'Username tidak boleh kosong!'
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|required|min_length[3]',
            [
                'required' => 'Password tidak boleh kosong!',
                'min_length' => 'Password terlalu pendek!'
            ]
        );

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Halaman Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasinya lolos
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->authModel->login($username, $password) == 1) {
            if ($this->session->userdata('status') == 1) {
                redirect('dashboard','refresh');
            } else {
                //jika tidak aktif
                $this->session->set_flashdata('message', '
                    <div class="alert alert-danger" role="alert">
                    User tidak aktif!</div>');
                redirect('auth');
            }
        } else if ($this->authModel->login($username, $password) == 2) {
            //jika password salah
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">
                Password salah!</div>');
            redirect('auth');
        } else {
            //tidak ada username yg sesuai
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">
                Username tidak sesuai!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('status');

        $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
            Logout Berhasil!</div>');
        redirect('auth');
    }
}
