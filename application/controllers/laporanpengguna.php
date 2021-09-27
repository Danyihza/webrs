<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporanpengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('notifModel');
        $this->load->model('laporanpenggunaModel');
        $this->load->helper('url');
        cek_login();
    }
    public function index() {
        if ($this->session->userdata('level') == 1) {
            $data['title'] = 'Laporan Pengguna';

            $data['laporanpengguna'] = $this->laporanpenggunaModel->get_laporanpengguna();

            $data['notiftoday'] = $this->notifModel->notiftoday();
            $data['notifyesterday'] = $this->notifModel->notifyesterday();
            $data['get_notiftoday'] = $this->notifModel->get_notiftoday();
            $data['get_notifyesterday'] = $this->notifModel->get_notifyesterday();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengguna/laporanpengguna', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('auth', 'refresh');
    } 
}
    public function update_laporanpengguna() {
		if ($this->input->post('submit')) {
			if ($this->laporanpenggunaModel->update_laporanpengguna() == TRUE)  {
                $this->session->set_flashdata('message', '
                    <div class="alert alert-success" role="alert">
                    Berhasil mengubah data pengguna</div>');
                redirect('laporanpengguna', 'refresh');
			} else {
                $this->session->set_flashdata('message', '
                    <div class="alert alert-danger" role="alert">
                    Gagal mengubah data</div>');
                redirect('laporanpengguna', 'refresh');
			}
		}
	} public function delete_laporanpengguna() {
        $username = $this->uri->segment(3);
        if ($this->laporanpenggunaModel->delete_laporanpengguna($username)) {
            $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">
                Berhasil menghapus data pengguna</div>');
            redirect('laporanpengguna', 'refresh');
        } else {
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">
                Gagal menghapus data</div>');
            redirect('laporanpengguna', 'refresh');
        }
	}
}