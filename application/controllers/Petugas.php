<?php

class Petugas extends CI_Controller
{
	public function index()
	{
		$this->load->library('pdfgenerator');
		$this->data['invTanah'] = $this->Model_Inventarisasi->getData('tanah')->result_array();
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator


		// title dari pdf
		$this->data['title_pdf'] = 'Laporan Data Inventarisasi Tanah';

		// filename dari pdf ketika didownload
		$file_pdf = 'laporan_penjualan_toko_kita';
		// setting paper
		$paper = 'F4';
		//orientasi paper potrait / landscape
		$orientation = "potrait";

		$html = $this->load->view('laporan_pdf', $this->data, true);

		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}

	public function peta()
	{
		$this->load->view('user/maps');
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('id_akses');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat anda telah berhasil logout!!!</div>');
		redirect('Monitoring/login');
	}
	public function cari(){
    $data['invTanah'] = $this->Model_Inventarisasi->getData('tanah')->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('satgasb/sidebar_satgasb', $data);
    $this->load->view('data/cariTanah', $data);
  }
  
  public function cariTanah(){
    // Ambil data NIS yang dikirim via ajax post
    $keyword = $this->input->post('keyword');
    $tanah['invTanah'] = $this->Model_Inventarisasi->cariDataTanah($keyword);
    
    // Kita load file view.php sambil mengirim data siswa hasil query function search di SiswaModel
    $hasil = $this->load->view('data/tanah', $tanah, true);
    
    // Buat sebuah array
    $callback = array(
      'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
    );
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
}
