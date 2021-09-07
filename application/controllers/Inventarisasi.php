<?php

class Inventarisasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        login();
    }

    public function index()
    {
        $data['judul'] = "Inventarisasi - BPN Subang";
        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/inventarisasi', $data);
        $this->load->view('template/footer');
    }

    public function invTanah()
    {
        $jumlah_data = $this->Model_Inventarisasi->jumlahData('tanah');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/Inventarisasi/invTanah/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;

        $config['next_link'] = ' Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_open'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_open'] = '<li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_open'] = '<li>';
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['invTanah'] = $this->Model_Inventarisasi->index('tanah', $config['per_page'], $from)->result_array();

        $data['judul'] = "Data Inventarisasi Tanah";

        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/tanah', $data);
        $this->load->view('template/footer');
    }
    public function cariTanah()
    {
        $katakunci = $this->input->post('katakunci');
        $data['judul'] = "Data Inventarisasi Tanah";
        $data['invTanah'] = $this->Model_Inventarisasi->cariDataTanah($katakunci);
        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/tanah', $data);
        $this->load->view('template/footer');
    }
    public function tambahInvTanah()
    {
        $data['judul'] = "Inventarisasi Tanah";
        $data['tanah'] = "Data Inventarisasi Tanah";
        $data['satgas'] = $this->Model_Autor->getUbahData(['id_satgas' => $this->session->userdata('id_satgas')], 'satgas_b')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/inputTanah', $data);
        $this->load->view('template/footer');
    }

    public function tambahTanah()
    {
        $data['tanah'] = "Data Inventarisasi Tanah";
        $id = $this->input->post('id_satgas');
        $kecamatan = $this->input->post('kec');
        $desa = $this->input->post('des');
        $blok = $this->input->post('blk');
        $rtrw = $this->input->post('rtrw');
        $nis = $this->input->post('nis');
        $pemilik = $this->input->post('nama_pemilik');
        $nik_pemilik = $this->input->post('nik_pemilik');
        $penggarap = $this->input->post('nama_penggarap');
        $nik_penggarap = $this->input->post('nik_penggarap');
        $status = $this->input->post('status_garapan');
        $shm = $this->input->post('shm');
        $no_shm = $this->input->post('no_shm');
        $sppt = $this->input->post('sppt');
        $kelas = $this->input->post('kelas');
        $an = $this->input->post('an');
        $perolehan = $this->input->post('perolehan');
        $tgl_perolehan = $this->input->post('tgl_perolehan');
        $no_perolehan = $this->input->post('no_perolehan');
        $garapan = $this->input->post('buk_garapan');
        $tgl_garapan = $this->input->post('tgl_garapan');
        $no_garapan = $this->input->post('no_garapan');
        $luas = $this->input->post('luas');

        $data = [
            'id_satgas' => $id,
            'kecamatan' => $kecamatan,
            'desa'      => $desa,
            'blok'      => $blok,
            'rt/rw'     => $rtrw,
            'nis'       => $nis,
            'nama_pemilik' => $pemilik,
            'nik_pemilik'  => $nik_pemilik,
            'nama_penggarap' => $penggarap,
            'nik_penggarap'  => $nik_penggarap,
            'status_penggarap' => $status,
            'shm'       => $shm,
            'no_shm'    => $no_shm,
            'no_sppt'   => $sppt,
            'kelas'     => $kelas,
            'atas_nama' => $an,
            'perolehan_tanah' => $perolehan,
            'tgl_perolehan'             => $tgl_perolehan,
            'no_perolehan'              => $no_perolehan,
            'bukti_garapan'       => $garapan,
            'tgl_garapan'         => $tgl_garapan,
            'no_garapan'          => $no_garapan,
            'luas_tanah'                  => $luas
        ];

        $this->Model_Inventarisasi->tambahData('tanah', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah berhasil ditambahkan!</div>');
        redirect('Inventarisasi/invTanah');
    }
    public function ubahInvTanah($id)
    {
        $data['judul'] = "Ubah Inventarisasi Tanah";
        $where = array('id_tanah' => $id);
        $data['invTanah'] = $this->Model_Inventarisasi->getUbahData($where, 'tanah')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/ubahInvTanah', $data);
        $this->load->view('template/footer');
    }

    public function ubahDataInvTanah()
    {
        $id = $this->input->post('id');
        $kecamatan = $this->input->post('kec');
        $desa = $this->input->post('des');
        $blok = $this->input->post('blk');
        $rtrw = $this->input->post('rtrw');
        $nis = $this->input->post('nis');
        $pemilik = $this->input->post('nama_pemilik');
        $nik_pemilik = $this->input->post('nik_pemilik');
        $penggarap = $this->input->post('nama_penggarap');
        $nik_penggarap = $this->input->post('nik_penggarap');
        $status = $this->input->post('status_garapan');
        $shm = $this->input->post('shm');
        $no_shm = $this->input->post('no_shm');
        $sppt = $this->input->post('sppt');
        $kelas = $this->input->post('kelas');
        $an = $this->input->post('an');
        $perolehan = $this->input->post('perolehan');
        $tgl_perolehan = $this->input->post('tgl_perolehan');
        $no_perolehan = $this->input->post('no_perolehan');
        $garapan = $this->input->post('buk_garapan');
        $tgl_garapan = $this->input->post('tgl_garapan');
        $no_garapan = $this->input->post('no_garapan');
        $luas = $this->input->post('luas');

        $data = [
            'kecamatan' => $kecamatan,
            'desa'      => $desa,
            'blok'      => $blok,
            'rt/rw'     => $rtrw,
            'nis'       => $nis,
            'nama_pemilik' => $pemilik,
            'nik_pemilik'  => $nik_pemilik,
            'nama_penggarap' => $penggarap,
            'nik_penggarap'  => $nik_penggarap,
            'status_penggarap' => $status,
            'shm'       => $shm,
            'no_shm'    => $no_shm,
            'no_sppt'   => $sppt,
            'kelas'     => $kelas,
            'atas_nama' => $an,
            'perolehan_tanah' => $perolehan,
            'tgl_perolehan'             => $tgl_perolehan,
            'no_perolehan'              => $no_perolehan,
            'bukti_garapan'       => $garapan,
            'tgl_garapan'         => $tgl_garapan,
            'no_garapan'          => $no_garapan,
            'luas_tanah'                  => $luas
        ];
        $this->Model_Inventarisasi->ubahData($id, $data, 'tanah');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah berhasil diubah!</div>');
        redirect('Inventarisasi/invTanah');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diubah!</div>');
        redirect('Inventarisasi/invTanah');
    }


    public function hapusInvTanah($id)
    {
        $where = [
            'id_tanah' => $id
        ];
        $this->Model_Inventarisasi->hapusData($where, 'tanah');
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data telah berhasil dihapus!</div>');
        redirect('Inventarisasi/invTanah');
    }

    public function invTanaman()
    {

        $jumlah_data = $this->Model_Inventarisasi->jumlahData('tanaman');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/Inventarisasi/invTanaman/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;

        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_open'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_open'] = '<li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_open'] = '<li>';
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['invTanaman'] = $this->Model_Inventarisasi->getData('tanaman', $config['per_page'], $from)->result_array();

        $data['judul'] = "Data Inventarisasi Tanaman";

        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/tanaman', $data, $config);
        $this->load->view('template/footer');
    }

    public function cariTanaman()
    {
        // Ambil data NIS yang dikirim via ajax post
        $katakunci = $this->input->post('katakunci');
        $data['invTanaman'] = $this->Model_Inventarisasi->cariDataTanaman($katakunci);
        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/tanaman', $data);
        $this->load->view('template/footer');
    }
    public function tambahInvTanaman()
    {
        $data['dt'] = $this->Model_Inventarisasi->getData('tanah')->result_array();
        $data['judul'] = "Inventarisasi Tanaman";
        $data['tanaman'] = "Data Inventarisasi Tanaman";
        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/inputTanaman', $data);
        $this->load->view('template/footer');
    }

    public function tambahTanaman()
    {
        $data['tanah'] = "Data Inventarisasi Tanaman";
        $nis = $this->input->post('nis');
        $desa = $this->input->post('desa');
        $rt_rw = $this->input->post('rtrw');
        $pemilik_tanaman = $this->input->post('nama_pemilik_tanaman');
        $tempat = $this->input->post('tempat');
        $tgl = $this->input->post('tanggal');
        $no_ktp = $this->input->post('no_ktp');
        $pekerjaan = $this->input->post('kerja');
        $alamat = $this->input->post('alamat');
        $pemilik_tanah = $this->input->post('nama_pemilik_tanah');
        $kavling = $this->input->post('kavling');
        $luas = $this->input->post('luas');
        $deskec = $this->input->post('des_kec');
        $alas_hak = $this->input->post('alas_hak');
        $jenis_tanaman = $this->input->post('jenis');
        $ukuran = $this->input->post('ukuran');
        $jml = $this->input->post('jumlah');


        $data = [
            'nis' => $nis,
            'desa'      => $desa,
            'rtrw'     => $rt_rw,
            'nama' => $pemilik_tanaman,
            'tempat' => $tempat,
            'tgl_lahir'  => $tgl,
            'no_ktp' => $no_ktp,
            'pekerjaan'  => $pekerjaan,
            'alamat' => $alamat,
            'nama_pemilik_tanah' => $pemilik_tanah,
            'kavling/blok'    => $kavling,
            'luas'   => $luas,
            'kecamatan'     => $deskec,
            'alas_hak' => $alas_hak,
            'jenis_tanaman' => $jenis_tanaman,
            'ukuran'             => $ukuran,
            'jumlah'              => $jml
        ];

        $this->Model_Inventarisasi->tambahData('tanaman', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah berhasil ditambahkan!</div>');
        redirect('Inventarisasi/invTanaman');
    }
    public function ubahInvTanaman($id)
    {
        $data['judul'] = "Ubah Inventarisasi Tanah";
        $where = array('id_tanaman' => $id);
        $data['invTanaman'] = $this->Model_Inventarisasi->getUbahData($where, 'tanaman')->result_array();
        $data['tanah'] = $this->Model_Inventarisasi->getData('tanah')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/ubahInvTanaman', $data);
        $this->load->view('template/footer');
    }

    public function ubahDataInvTanaman()
    {
        $id = $this->input->post('id');
        $nis = $this->input->post('nis');
        $desa = $this->input->post('desa');
        $rt_rw = $this->input->post('rtrw');
        $pemilik_tanaman = $this->input->post('nama_pemilik_tanaman');
        $ttl = $this->input->post('ttl');
        $no_ktp = $this->input->post('no_ktp');
        $pekerjaan = $this->input->post('kerja');
        $alamat = $this->input->post('alamat');
        $pemilik_tanah = $this->input->post('nama_pemilik_tanah');
        $kavling = $this->input->post('kavling');
        $luas = $this->input->post('luas');
        $deskec = $this->input->post('des_kec');
        $alas_hak = $this->input->post('alas_hak');
        $jenis_tanaman = $this->input->post('jenis');
        $ukuran = $this->input->post('ukuran');
        $jml = $this->input->post('jumlah');
        $where = [
            'id_tanaman' => $id
        ];
        $data = [
            'nis' => $nis,
            'desa'      => $desa,
            'rtrw'     => $rt_rw,
            'nama' => $pemilik_tanaman,
            'ttl'  => $ttl,
            'no_ktp' => $no_ktp,
            'pekerjaan'  => $pekerjaan,
            'alamat' => $alamat,
            'nama_pemilik_tanah' => $pemilik_tanah,
            'kavling'    => $kavling,
            'luas'   => $luas,
            'desa/kec'     => $deskec,
            'alas_hak' => $alas_hak,
            'jenis_tanaman' => $jenis_tanaman,
            'ukuran'             => $ukuran,
            'jumlah'              => $jml
        ];
        $this->Model_Inventarisasi->ubahData($where, $data, 'tanaman');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah berhasil diubah!</div>');
        redirect('Inventarisasi/invTanaman');
    }

    public function hapusInvTanaman($id)
    {
        $where = [
            'id_tanaman' => $id
        ];
        $this->Model_Inventarisasi->hapusData($where, 'tanaman');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah berhasil dihapus!</div>');
        redirect('Inventarisasi/invTanaman');
    }

    public function invBangunan()
    {
        $jumlah_data = $this->Model_Inventarisasi->jumlahData('bangunan');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/Inventarisasi/invBangunan/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 2;

        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_open'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_open'] = '<li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_open'] = '<li>';
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['invBangunan'] = $this->Model_Inventarisasi->getData('bangunan', $config['per_page'], $from)->result_array();

        $data['judul'] = "Data Inventarisasi Bangunan";

        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/bangunan', $data);
        $this->load->view('template/footer');
    }
    public function cariBangunan()
    {
        // Ambil data NIS yang dikirim via ajax post
        $katakunci = $this->input->post('katakunci');
        $data['invBangunan'] = $this->Model_Inventarisasi->cariDataBangunan($katakunci);
        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/bangunan', $data);
        $this->load->view('template/footer');
    }
    public function tambahInvBangunan()
    {
        $data['dt'] = $this->Model_Inventarisasi->getData('tanah')->result_array();
        $data['judul'] = "Inventarisasi Bangunan";
        $data['bangunan'] = "Data Inventarisasi Bangunan";
        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/inputBangunan', $data);
        $this->load->view('template/footer');
    }
    public function tambahBangunan()
    {

        $data['bangunan'] = "Data Inventarisasi Bangunan";
        $nis = $this->input->post('nis');
        $desa = $this->input->post('desa');
        $rt_rw = $this->input->post('rtrw');
        $pemilik_bangunan = $this->input->post('nama_pemilik_bangunan');
        $ttl = $this->input->post('ttl');
        $no_ktp = $this->input->post('no_ktp');
        $pekerjaan = $this->input->post('kerja');
        $alamat = $this->input->post('alamat');
        $pemilik_tanah = $this->input->post('nama_pemilik_tanah');
        $kavling = $this->input->post('kavling');
        $luas = $this->input->post('luas');
        $kecamatan = $this->input->post('kecamatan');
        $jenis_konstruksi = $this->input->post('jenis_konstruksi');
        $luas_bangunan = $this->input->post('luas_bangunan');
        $kelas_konstruksi = $this->input->post('kelas_konstruksi');
        $kondisi = $this->input->post('kondisi');


        $data = [
            'nis' => $nis,
            'desa'      => $desa,
            'rtrw'     => $rt_rw,
            'nama_pemilik_bangunan' => $pemilik_bangunan,
            'ttl'  => $ttl,
            'no_ktp' => $no_ktp,
            'pekerjaan'  => $pekerjaan,
            'alamat' => $alamat,
            'nama_pemilik_tanah' => $pemilik_tanah,
            'kavling'    => $kavling,
            'luas'   => $luas,
            'kecamatan'     => $kecamatan,
            'jenis_konstruksi' => $jenis_konstruksi,
            'luas_bangunan' => $luas_bangunan,
            'kelas_konstruksi'             => $kelas_konstruksi,
            'kondisi'              => $kondisi
        ];

        $this->Model_Inventarisasi->tambahData('bangunan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah berhasil ditambahkan!</div>');
        redirect('Inventarisasi/invBangunan');
    }
    public function ubahInvBangunan($id)
    {
        $data['judul'] = "Ubah Inventarisasi Bangunan";
        $where = array('id_bangunan' => $id);
        $data['invBangunan'] = $this->Model_Inventarisasi->getUbahData($where, 'bangunan')->result_array();
        $data['tanah'] = $this->Model_Inventarisasi->getData('tanah')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/ubahInvBangunan', $data);
        $this->load->view('template/footer');
    }

    public function ubahDataInvBangunan()
    {
        $id = $this->input->post('id');
        $desa = $this->input->post('desa');
        $rt_rw = $this->input->post('rtrw');
        $pemilik_bangunan = $this->input->post('nama_pemilik_bangunan');
        $ttl = $this->input->post('ttl');
        $no_ktp = $this->input->post('no_ktp');
        $pekerjaan = $this->input->post('kerja');
        $alamat = $this->input->post('alamat');
        $pemilik_tanah = $this->input->post('nama_pemilik_tanah');
        $kavling = $this->input->post('kavling');
        $luas = $this->input->post('luas');
        $kecamatan = $this->input->post('kecamatan');
        $jenis_konstruksi = $this->input->post('jenis_konstruksi');
        $luas_bangunan = $this->input->post('luas_bangunan');
        $kelas_konstruksi = $this->input->post('kelas_konstruksi');
        $kondisi = $this->input->post('kondisi');

        $where = [
            'id_bangunan' => $id
        ];
        $data = [
            'desa'      => $desa,
            'rtrw'     => $rt_rw,
            'nama_pemilik_bangunan' => $pemilik_bangunan,
            'ttl'  => $ttl,
            'no_ktp' => $no_ktp,
            'pekerjaan'  => $pekerjaan,
            'alamat' => $alamat,
            'nama_pemilik_tanah' => $pemilik_tanah,
            'kavling'    => $kavling,
            'luas'   => $luas,
            'kecamatan'     => $kecamatan,
            'jenis_konstruksi' => $jenis_konstruksi,
            'luas_bangunan' => $luas_bangunan,
            'kelas_konstruksi'             => $kelas_konstruksi,
            'kondisi'              => $kondisi
        ];



        $this->Model_Inventarisasi->ubahData($where, $data, 'bangunan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah berhasil diubah!</div>');
        redirect('Inventarisasi/invBangunan');
    }

    public function hapusInvBangunan($id)
    {
        $where = [
            'id_bangunan' => $id
        ];
        $this->Model_Inventarisasi->hapusData($where, 'bangunan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah berhasil dihapus!</div>');
        redirect('Inventarisasi/invBangunan');
    }
}
