<?php

class Monitoring extends CI_Controller
{
	public function index()
	{
		$this->load->view('Dashboard');
	}

	

	public function login()
	{
		$this->load->view('Login');
	}

	public function masuk()
	{
		$this->form_validation->set_rules('username', 'Nama pengguna', 'trim|required');
		$this->form_validation->set_rules('password', 'Kata sandi', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$monitor = $this->db->get_where('pengguna', ['username' => $username])->row_array();

		if ($monitor) {

			if ($monitor['id_akses'] == 1) {
				$data = [
					'email' => $monitor['email']
				];
				$this->session->set_userdata($data);
				redirect('Admin');
			} else if ($monitor['id_akses'] == 2) {
				$data = [
					'email' => $monitor['email']
				];

				$this->session->set_userdata($data);
				redirect('Petugas');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!!!</div>');
				redirect('Monitoring/login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun belum terdaftar!!!</div>');
			redirect('Monitoring/login');
		}
	}
}
