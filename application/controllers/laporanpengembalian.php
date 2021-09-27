<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporanpengembalian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('notifModel');
        $this->load->model('laporanpengembalianModel');
        $this->load->helper('url');
        cek_login();
    }
    public function index()
    {
        if ($this->session->userdata('level') == 1) {
            $data['title'] = 'Laporan Pengembalian';

            $data['laporanpengembalian'] = $this->laporanpengembalianModel->get_laporanpengembalian();

            $data['notiftoday'] = $this->notifModel->notiftoday();
            $data['notifyesterday'] = $this->notifModel->notifyesterday();
            $data['get_notiftoday'] = $this->notifModel->get_notiftoday();
            $data['get_notifyesterday'] = $this->notifModel->get_notifyesterday();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengguna/laporanpengembalian', $data);
            $this->load->view('templates/footer');
        } else if ($this->session->userdata('level') == 3) {
            $data['title'] = 'Laporan Pengembalian';
            
            $data['laporanpengembalian'] = $this->laporanpengembalianModel->get_laporanpengembalian();
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kepalarm/laporanpengembalian', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('auth', 'refresh');
        } 
    }  public function update_laporanpengembalian()
	{
		if ($this->input->post('submit')) {
			if ($this->laporanpengembalianModel->update_laporanpengembalian() == TRUE)  {
                $this->session->set_flashdata('message', '
                    <div class="alert alert-success" role="alert">
                    Berhasil mengubah data pengembalian</div>');
                redirect('laporanpengembalian', 'refresh');
			} else {
                $this->session->set_flashdata('message', '
                    <div class="alert alert-danger" role="alert">
                    Gagal mengubah data</div>');
                redirect('laporanpengembalian', 'refresh');
			}
		}
    } public function delete_laporanpengembalian() {
        $no_rm = $this->uri->segment(3);
        if ($this->laporanpengembalianModel->delete_laporanpengembalian($no_rm)) {
            $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">
                Berhasil menghapus data pengembalian</div>');
            redirect('laporanpengembalian', 'refresh');
        } else {
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">
                Gagal menghapus data</div>');
            redirect('laporanpengembalian', 'refresh');
        }
	}
}