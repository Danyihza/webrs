<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('notifModel');
        $this->load->model('notiflambatModel');
        cek_login();
    }

    public function index()
    {
        if ($this->session->userdata('level') == 1) {
            $data['title'] = 'Beranda';
            $data['notiftoday'] = $this->notifModel->notiftoday();
            $data['notifyesterday'] = $this->notifModel->notifyesterday();
            $data['get_notiftoday'] = $this->notifModel->get_notiftoday();
            $data['get_notifyesterday'] = $this->notifModel->get_notifyesterday();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengguna/index', $data);
            $this->load->view('templates/footer');
        } else if ($this->session->userdata('level') == 2) {
            $data['title'] = 'Beranda';
            $data['notifterlambat'] = $this->notiflambatModel->notifterlambat();
            $data['notiftoday'] = $this->notiflambatModel->notiftoday();
            $data['get_notiftoday'] = $this->notiflambatModel->get_notiftoday();
            $data['get_notifterlambat'] = $this->notiflambatModel->get_notifterlambat();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rawatinap/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data['title'] = 'Beranda';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kepalarm/index', $data);
            $this->load->view('templates/footer');
        }
    }
}
