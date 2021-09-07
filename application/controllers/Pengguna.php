<?php


class Pengguna extends CI_Controller
{
    public function autentikasi()
    {

        if (!$this->session->userdata('nama')) {
            redirect('Autor/login');
        }
    }

    public function blok()
    {
        $level = $this->session->userdata('level');
        echo '<div class="alert alert-success" role="alert">Anda bukan ' . $level . '!</div>';
    }
    public function admin()
    {
        $this->autentikasi();
        $data = [
            'judul' => 'Dashboard Admin'

        ];
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Datang di Sistem Informasi Pendataan Yuridis!</div>');
        $this->load->view('template/header', $data);
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('admin/dashboard_admin');
        $this->load->view('template/footer', $data);
      
    }

    public function satgasb()
    {
        $this->autentikasi();
        $data = [
            'judul' => 'Dashboard Satgas B'
        ];

        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('satgasb/dashboard_satgasb', $data);
        $this->load->view('template/footer');
    }

    public function pemdes()
    {
        $this->autentikasi();
        $data = [
            'judul' => 'Dashboard Pemerintah Desa',
        ];
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Datang di Sistem Informasi Pendataan Yuridis!</div>');
        $this->load->view('template/header', $data);
        $this->load->view('pemdes/sidebar_pemdes');
        $this->load->view('pemdes/dashboard_pemdes', $data);
        $this->load->view('template/footer');
    }
}
