<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('penggunaModel');
        $this->load->model('notifModel');
        cek_login();
    }

    public function index()
    {
        if ($this->session->userdata('level') == 1) {

            $data['title'] = 'Data Pengguna';
    
            $data['notiftoday'] = $this->notifModel->notiftoday();
            $data['notifyesterday'] = $this->notifModel->notifyesterday();
            $data['get_notiftoday'] = $this->notifModel->get_notiftoday();
            $data['get_notifyesterday'] = $this->notifModel->get_notifyesterday();
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengguna/datapengguna', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('auth', 'refresh');
        }
    }

    public function tambah_pengguna()
    {
        if ($this->session->userdata('level') == 1) {
            if ($this->input->post('submit')) {
                if ($this->penggunaModel->do_insert() == TRUE) {
                    $this->session->set_flashdata('message', '
                        <div class="alert alert-success" role="alert">
                        Berhasil menambahkan pengguna baru</div>');
                    redirect('pengguna', 'refresh');
                } else {
                    $this->session->set_flashdata('message', '
                        <div class="alert alert-danger" role="alert">
                        Gagal menambahkan pengguna baru</div>');
                    redirect('pengguna', 'refresh');
                }
            }
        } else {
            redirect('auth', 'refresh');
        }
    }
}
