<?php
defined('BASEPATH') or exit('No direct script access allowed');

class peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('peminjamanModel');
        $this->load->model('notifModel');
        $this->load->model('notiflambatModel');
        $this->load->helper('url');
        cek_login();
    }

    public function index()
    {
        if ($this->session->userdata('level') == 1) {
            $id = $this->uri->segment(2);
            if ($id != NULL) {
                $data['dataRM'] = $this->peminjamanModel->get_detail_data($id);
                $data['title'] = 'Data Peminjaman';
                $data['notiftoday'] = $this->notifModel->notiftoday();
                $data['notifyesterday'] = $this->notifModel->notifyesterday();
                $data['get_notiftoday'] = $this->notifModel->get_notiftoday();
                $data['get_notifyesterday'] = $this->notifModel->get_notifyesterday();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('pengguna/datapeminjamanid', $data);
                $this->load->view('templates/footer');
            } else {
                $data['title'] = 'Data Peminjaman';
                $data['notiftoday'] = $this->notifModel->notiftoday();
                $data['notifyesterday'] = $this->notifModel->notifyesterday();
                $data['get_notiftoday'] = $this->notifModel->get_notiftoday();
                $data['get_notifyesterday'] = $this->notifModel->get_notifyesterday();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('pengguna/datapeminjaman', $data);
                $this->load->view('templates/footer');
            }
        } else if ($this->session->userdata('level') == 2) {
            $data['title'] = 'Data Peminjaman';

            $data['notifterlambat'] = $this->notiflambatModel->notifterlambat();
            $data['notiftoday'] = $this->notiflambatModel->notiftoday();
            $data['get_notiftoday'] = $this->notiflambatModel->get_notiftoday();
            $data['get_notifterlambat'] = $this->notiflambatModel->get_notifterlambat();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rawatinap/datapeminjaman', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('auth', 'refresh');
        }
    }

    public function cetak()
    { 
        $no_rm = $this->uri->segment(3);
            $data['dataRM'] = $this->peminjamanModel->cetak($no_rm);
        $this->load->view('print/tracer', $data);
    }

    public function tambah_peminjaman()
    {
        if ($this->session->userdata('level') == 2) {
            if ($this->input->post('submit')) {
                if ($this->peminjamanModel->do_insert() == TRUE) {
                    $this->session->set_flashdata('message', '
                        <div class="alert alert-success" role="alert">
                        Berhasil menambahkan peminjaman baru</div>');
                    redirect('peminjaman', 'refresh');
                } else {
                    $this->session->set_flashdata('message', '
                        <div class="alert alert-danger" role="alert">
                        Gagal menambahkan peminjaman baru</div>');
                    redirect('peminjaman', 'refresh');
                }
            }
        } else {
            redirect('login', 'refresh');
        }
    }
}
