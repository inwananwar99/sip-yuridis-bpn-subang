<?php

class Admin extends CI_Controller
{
	public function index()
	{
		$data['admin'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = "Admin Satgas Yuridis";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('user/dashboardadmin', $data);
		$this->load->view('template/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('id_akses');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat anda telah berhasil logout!!!</div>');
		redirect('Monitoring/login');
	}



	public function dataPetugas()
	{
		$data['title'] = "Admin Satgas Yuridis";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('data/petugas', $data);
		$this->load->view('template/footer');
	}

	public function inventarisasi()
	{
		$data['judul'] = "Inventarisasi - BPN Subang";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('data/inventarisasi', $data);
		$this->load->view('template/footer');
		
		
	}

	public function tanah()
	{
		$data['judul'] = "Inventarisasi Tanah";
		$data['tanah'] = "Data Inventarisasi Tanah";
		$data['data'] = $this->db->get('tanah')->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('data/tanah', $data);
		$this->load->view('template/footer');
	}

	public function tambahTanah()
	{
		$data['judul'] = "Inventarisasi Tanah";
		$data['tanah'] = "Data Inventarisasi Tanah";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('data/inputTanah');
		$this->load->view('template/footer');
	}
	public function inputTanah()
	{
		$data['tanah'] = "Data Inventarisasi Tanah";
		$kecamatan = $this->input->post('kec');
		$desa = $this->input->post('des');
		$blok = $this->input->post('blk');
		$rtrw = $this->input->post('rtrw');
		$nis = $this->input->post('nis');
		$pemilik = $this->input->post('nama_pemilik');
		$nik_pem = $this->input->post('nik_pemilik');
		$penggarap = $this->input->post('nama_penggarap');
		$nik_penggarap = $this->input->post('nik_penggarap');
		$status = $this->input->post('status_garapan');
		$shm = $this->input->post('shm');
		$no_shm = $this->input->post('no_shm');
		$sppt = $this->input->post('sppt');
		$kelas = $this->input->post('kelas');
		$an = $this->input->post('an');
		$ajb = $this->input->post('ajb');
		$tgl_ajb = $this->input->post('tgl_ajb');
		$no_ajb = $this->input->post('no_ajb');
		$garapan = $this->input->post('buk_garapan');
		$tgl_garapan = $this->input->post('tgl_garapan');
		$no_garapan = $this->input->post('no_garapan');
		$luas = $this->input->post('luas');

		$data = [
			'kecamatan' => $kecamatan,
			'desa'		=> $desa,
			'blok'		=> $blok,
			'rt/rw'		=> $rtrw,
			'nis'		=> $nis,
			'nama_pemilik' => $pemilik,
			'nik_pemilik'  => $nik_pem,
			'nama_penggarap' => $penggarap,
			'nik_penggarap'	 => $nik_penggarap,
			'status_penggarap' => $status,
			'shm'		=> $shm,
			'no_shm'	=> $no_shm,
			'no_sppt'	=> $sppt,
			'kelas'		=> $kelas,
			'atas_nama'	=> $an,
			'ajb/hibah/pembagian' => $ajb,
			'tgl_ajb'			  => $tgl_ajb,
			'no_ajb'			  => $no_ajb,
			'bukti_garapan'		  => $garapan,
			'tgl_garapan'		  => $tgl_garapan,
			'no_garapan'		  => $no_garapan,
			'luas_tanah'				  => $luas
		];

		$this->Model_Inventarisasi->tambah('tanah', $data);
		redirect('Admin/tanah');
	}

	public function ubahtanah($id)
	{
		$data['judul'] = "Ubah Inventarisasi Tanah";
		$where = array('id' => $id);
		$data['tanah'] = $this->db->get_where('tanah', $where)->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('data/ubahinvtanah', $data);
		$this->load->view('template/footer');
	}

	public function ubah()
	{
		$id = $this->input->post('id');
		$kecamatan = $this->input->post('kec');
		$desa = $this->input->post('des');
		$blok = $this->input->post('blk');
		$rtrw = $this->input->post('rtrw');
		$nis = $this->input->post('nis');
		$pemilik = $this->input->post('nama_pemilik');
		$nik_pem = $this->input->post('nik_pemilik');
		$penggarap = $this->input->post('nama_penggarap');
		$nik_penggarap = $this->input->post('nik_penggarap');
		$status = $this->input->post('status_garapan');
		$shm = $this->input->post('shm');
		$no_shm = $this->input->post('no_shm');
		$sppt = $this->input->post('sppt');
		$kelas = $this->input->post('kelas');
		$an = $this->input->post('an');
		$ajb = $this->input->post('ajb');
		$tgl_ajb = $this->input->post('tgl_ajb');
		$no_ajb = $this->input->post('no_ajb');
		$garapan = $this->input->post('buk_garapan');
		$tgl_garapan = $this->input->post('tgl_garapan');
		$no_garapan = $this->input->post('no_garapan');
		$luas = $this->input->post('luas');

		$where = [
			'id' => $id
		];
		$data = [
			'kecamatan' => $kecamatan,
			'desa'		=> $desa,
			'blok'		=> $blok,
			'rt/rw'		=> $rtrw,
			'nis'		=> $nis,
			'nama_pemilik' => $pemilik,
			'nik_pemilik'  => $nik_pem,
			'nama_penggarap' => $penggarap,
			'nik_penggarap'	 => $nik_penggarap,
			'status_penggarap' => $status,
			'shm'		=> $shm,
			'no_shm'	=> $no_shm,
			'no_sppt'	=> $sppt,
			'kelas'		=> $kelas,
			'atas_nama'	=> $an,
			'ajb/hibah/pembagian' => $ajb,
			'tgl_ajb'			  => $tgl_ajb,
			'no_ajb'			  => $no_ajb,
			'bukti_garapan'		  => $garapan,
			'tgl_garapan'		  => $tgl_garapan,
			'no_garapan'		  => $no_garapan,
			'luas_tanah'				  => $luas
		];

		$this->Model_Inventarisasi->ubah($where, $data, 'tanah');
		redirect('Admin/tanah');
	}

	public function hapus($id)
	{
		$where = [
			'id' => $id
		];
		$this->Model_Inventarisasi->hapus($where, 'tanah');
		redirect('Admin/tanah');
	}
}
