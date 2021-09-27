<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporanketerlambatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('notifModel');
        $this->load->model('laporanketerlambatanModel');
        $this->load->helper('url');
        cek_login();
    }
    public function index()
    {
        if ($this->session->userdata('level') == 1) {
            $data['title'] = 'Laporan Keterlambatan';

            $data['laporanketerlambatan'] = $this->laporanketerlambatanModel->get_laporanketerlambatan();

            $data['notiftoday'] = $this->notifModel->notiftoday();
            $data['notifyesterday'] = $this->notifModel->notifyesterday();
            $data['get_notiftoday'] = $this->notifModel->get_notiftoday();
            $data['get_notifyesterday'] = $this->notifModel->get_notifyesterday();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengguna/laporanketerlambatan', $data);
            $this->load->view('templates/footer');
        } else if ($this->session->userdata('level') == 3) {
            $data['title'] = 'Laporan Keterlambatan';

            
            $data['laporanketerlambatan'] = $this->laporanketerlambatanModel->get_laporanketerlambatan();
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kepalarm/laporanketerlambatan', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('auth', 'refresh');
        }   
    }  public function update_laporanketerlambatan()
	{
		if ($this->input->post('submit')) {
			if ($this->laporanketerlambatanModel->update_laporanketerlambatan() == TRUE)  {
                $this->session->set_flashdata('message', '
                    <div class="alert alert-success" role="alert">
                    Berhasil mengubah data keterlambatan</div>');
                redirect('laporanketerlambatan', 'refresh');
			} else {
                $this->session->set_flashdata('message', '
                    <div class="alert alert-danger" role="alert">
                    Gagal mengubah data</div>');
                redirect('laporanketerlambatan', 'refresh');
			}
		}
    } public function delete_laporanketerlambatan() {
        $no_rm = $this->uri->segment(3);
        if ($this->laporanketerlambatanModel->delete_laporanketerlambatan($no_rm)) {
            $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">
                Berhasil menghapus data keterlambatan</div>');
            redirect('laporanketerlambatan', 'refresh');
        } else {
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">
                Gagal menghapus data</div>');
            redirect('laporanketerlambatan', 'refresh');
        }
	}
}