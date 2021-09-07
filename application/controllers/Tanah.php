<?php

class Tanah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        login();
        $this->load->helper(array('form', 'url'));
    }

    public function rekapPendataan()
    {

        $data['judul'] = "Rekap Pendataan";
        $data['pdtn'] = $this->db->get('pendataan')->result_array();
        $data['estimasi'] = $this->db->get('estimasi')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/pendataan', $data);
        $this->load->view('template/footer');
    }



    public function tambahDataRekap()
    {

        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');
        $id_estimasi = $this->input->post('ids');
        $estimasi = $this->input->post('estim');
        $jumlah_bidang = $this->input->post('jumlah_bidang');
        $data = [
            'id_estimasi' => $id_estimasi,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'jumlah_bidang_tanah' => $jumlah_bidang,
            'estimasi_waktu' => $estimasi
        ];
        $this->Model_Tanah->tambahData('pendataan', $data);
        redirect('Tanah/rekapPendataan');
    }
    public function ubahRekap($id)
    {
        $data['judul'] = "Ubah Rekap Pendataan";
        $id_pendataan = ['id_pendataan' => $id];
        $data['pendataan'] = $this->Model_Tanah->getUbahData($id_pendataan, 'pendataan')->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('data/ubahRekap', $data);
        $this->load->view('template/footer');
    }
    public function ubahDataRekap()
    {
        $id_pendataan = $this->input->post('id');
        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');
        $estimasi = $this->input->post('estimasi');
        $jumlah_petugas = $this->input->post('jumlah');
        $where = [
            'id_pendataan' => $id_pendataan
        ];
        $data = [

            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'estimasi_waktu' => $estimasi,
            'jumlah_petugas' => $jumlah_petugas
        ];
        $this->Model_Tanah->ubahData($where, $data, 'pendataan');
        redirect('Tanah/rekapPendataan');
    }

    public function hitungEstimasi()
    {
        if ($estimasi = $this->Model_Tanah->getEstimasi()) {
            $arrayBidang = array();
            $arrayWaktu = array();
            foreach ($estimasi->result() as $obj) {

                array_push($arrayBidang, $obj->jumlah_bidang_tanah);
                array_push($arrayWaktu, $obj->estimasi_waktu);
            }
        }
        $this->load->library('regresilinear');
        $this->regresilinear->__construct($arrayBidang, $arrayWaktu);
        $id_satgas = $this->input->post('satgas');
        $estimasi = $this->regresilinear->forecast($_POST['bidang']);
        $data = [
            'id_satgas' => $id_satgas,
            'hasil_estimasi' => $estimasi
        ];
        $this->Model_Tanah->tambahData('estimasi', $data);
        $data['judul'] = 'Hasil Estimasi';
        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('hasil_estimasi');
        $this->load->view('template/footer');
    }

    public function estimasi()
    {
        $data['judul'] = 'Estimasi Waktu';
        $data['satgas'] = $this->Model_Autor->getUbahData(['id_satgas' => $this->session->userdata('id_satgas')], 'satgas_b')->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('estimasi', $data);
        $this->load->view('template/footer');
    }


    public function prmTanah()
    {
        $this->session->unset_userdata('message');
        $data['judul'] = "Data Permohonan Tanah";
        $data['permohonan'] = $this->Model_Tanah->getData('permohonan_tanah')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('data/permohonan', $data);
        $this->load->view('template/footer', $data);
    }
    public function tambahPermohonan()
    {
        $data['judul'] = "Tambah Permohonan Tanah";
        $data['admin'] = $this->Model_Autor->getUbahData(['id_admin' => $this->session->userdata('id_admin')], 'admin')->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('data/tambahPermohonan');
        $this->load->view('template/footer', $data);
    }

    public function tambahDataPermohonan()
    {
        $id_adm = $this->input->post('id_adm');
        $nis = $this->input->post('nis');
        $no_berkas = $this->input->post('no_berkas');
        $no_register = $this->input->post('no_register');
        $nama_pemohon = $this->input->post('nama_pemohon');
        $tempat = $this->input->post('tempat');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $umur = $this->input->post('umur');
        $pekerjaan = $this->input->post('pekerjaan');
        $no_ktp = $this->input->post('no_ktp');
        $alamat = $this->input->post('alamat');
        $alas_hak = $this->input->post('alas_hak');
        $blok = $this->input->post('blok');
        $desa = $this->input->post('desa');
        $no_letter = $this->input->post('no_letter_c');
        $nama_letter = $this->input->post('nama_letter_c');
        $no_persil = $this->input->post('no_persil');
        $kelas = $this->input->post('kelas');
        $tgl_alas = $this->input->post('tgl_alas');
        $rt_rw = $this->input->post('rt/rw');
        $no_blok = $this->input->post('no_blok');
        $kecamatan = $this->input->post('kecamatan');
        $no_sppt = $this->input->post('no_sppt');
        $nama_sppt = $this->input->post('nama_sppt');
        $luas = $this->input->post('luas');
        $luas_ukur = $this->input->post('luas_ukur');
        $utara = $this->input->post('utara');
        $selatan = $this->input->post('selatan');
        $timur = $this->input->post('timur');
        $barat = $this->input->post('barat');
        $riwayat = $this->input->post('riwayat_penguasaan');
        $penggunaan = $this->input->post('penggunaan_tanah');
        $tgl_permohonan = $this->input->post('tgl_permohonan');
        $nama_pewaris = $this->input->post('nama_pewaris');
        $tahun_meninggal = $this->input->post('tahun_meninggal');
        $tempat_meninggal = $this->input->post('tempat_meninggal');
        $rencana_penggunaan = $this->input->post('rencana_penggunaan');

        $data = [
            'id_admin' => $id_adm,
            'nis' => $nis,
            'no_berkas' => $no_berkas,
            'no_register' => $no_register,
            'pemohon' => $nama_pemohon,
            'tempat' => $tempat,
            'tgl_lahir' => $tgl_lahir,
            'umur' => $umur,
            'pekerjaan' => $pekerjaan,
            'no_ktp' => $no_ktp,
            'alamat' => $alamat,
            'alas_hak' => $alas_hak,
            'tgl_alas_hak' => $tgl_alas,
            'blok' => $blok,
            'desa/kelurahan' => $desa,
            'no_letter_c' => $no_letter,
            'nama_letter_c' => $nama_letter,
            'no_persil' => $no_persil,
            'kelas' => $kelas,
            'rt/rw' => $rt_rw,
            'kecamatan' => $kecamatan,
            'no_sppt' => $no_sppt,
            'nama_sppt' => $nama_sppt,
            'luas' => $luas,
            'no_blok' => $no_blok,
            'luas_ukur' => $luas_ukur,
            'batas_utara' => $utara,
            'batas_selatan' => $selatan,
            'batas_timur' => $timur,
            'batas_barat' => $barat,
            'riwayat_penguasaan' => $riwayat,
            'penggunaan' => $penggunaan,
            'tgl_permohonan' => $tgl_permohonan,
            'nama_pewaris' => $nama_pewaris,
            'tahun_meninggal' => $tahun_meninggal,
            'tempat_meninggal' => $tempat_meninggal,
            'rencana_penggunaan' => $rencana_penggunaan
        ];
        $this->Model_Tanah->tambahData('permohonan_tanah', $data);
        return redirect('Tanah/prmTanah');
    }

    public function ubahPermohonan($id)
    {
        $id_permohonan = ['id_permohonan' => $id];
        $data['permohonan'] = $this->Model_Tanah->getUbahData($id_permohonan, 'permohonan_tanah')->result_array();
        $data['judul'] = "Ubah Data Permohonan Tanah";
        $this->load->view('template/header', $data);
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('data/ubahPermohonan', $data);
        $this->load->view('template/footer', $data);
    }

    public function ubahDataPermohonan()
    {
        $id_permohonan = $this->input->post('id');
        $nis = $this->input->post('nis');
        $no_berkas = $this->input->post('no_berkas');
        $no_register = $this->input->post('no_register');
        $nama_pemohon = $this->input->post('nama_pemohon');
        $tempat = $this->input->post('tempat');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $umur = $this->input->post('umur');
        $pekerjaan = $this->input->post('pekerjaan');
        $no_ktp = $this->input->post('no_ktp');
        $alamat = $this->input->post('alamat');
        $alas_hak = $this->input->post('alas_hak');
        $blok = $this->input->post('blok');
        $desa = $this->input->post('desa');
        $no_letter = $this->input->post('no_letter_c');
        $nama_letter = $this->input->post('nama_letter_c');
        $no_persil = $this->input->post('no_persil');
        $kelas = $this->input->post('kelas');
        $tgl_alas = $this->input->post('tgl_alas');
        $rt_rw = $this->input->post('rt/rw');
        $no_blok = $this->input->post('no_blok');
        $kecamatan = $this->input->post('kecamatan');
        $no_sppt = $this->input->post('no_sppt');
        $nama_sppt = $this->input->post('nama_sppt');
        $luas = $this->input->post('luas');
        $luas_ukur = $this->input->post('luas_ukur');
        $utara = $this->input->post('utara');
        $selatan = $this->input->post('selatan');
        $timur = $this->input->post('timur');
        $barat = $this->input->post('barat');
        $riwayat = $this->input->post('riwayat_penguasaan');
        $penggunaan = $this->input->post('penggunaan_tanah');
        $tgl_permohonan = $this->input->post('tgl_permohonan');
        $nama_pewaris = $this->input->post('nama_pewaris');
        $tahun_meninggal = $this->input->post('tahun_meninggal');
        $tempat_meninggal = $this->input->post('tempat_meninggal');
        $rencana_penggunaan = $this->input->post('rencana_penggunaan');
        $where = ['id_permohonan' => $id_permohonan];
        $data = [
            'nis' => $nis,
            'no_berkas' => $no_berkas,
            'no_register' => $no_register,
            'pemohon' => $nama_pemohon,
            'tempat' => $tempat,
            'tgl_lahir' => $tgl_lahir,
            'umur' => $umur,
            'pekerjaan' => $pekerjaan,
            'no_ktp' => $no_ktp,
            'alamat' => $alamat,
            'alas_hak' => $alas_hak,
            'tgl_alas_hak' => $tgl_alas,
            'blok' => $blok,
            'desa/kelurahan' => $desa,
            'no_letter_c' => $no_letter,
            'nama_letter_c' => $nama_letter,
            'no_persil' => $no_persil,
            'kelas' => $kelas,
            'rt/rw' => $rt_rw,
            'kecamatan' => $kecamatan,
            'no_sppt' => $no_sppt,
            'nama_sppt' => $nama_sppt,
            'luas' => $luas,
            'no_blok' => $no_blok,
            'luas_ukur' => $luas_ukur,
            'batas_utara' => $utara,
            'batas_selatan' => $selatan,
            'batas_timur' => $timur,
            'batas_barat' => $barat,
            'riwayat_penguasaan' => $riwayat,
            'penggunaan' => $penggunaan,
            'tgl_permohonan' => $tgl_permohonan,
            'nama_pewaris' => $nama_pewaris,
            'tahun_meninggal' => $tahun_meninggal,
            'tempat_meninggal' => $tempat_meninggal,
            'rencana_penggunaan' => $rencana_penggunaan
        ];

        $this->Model_Tanah->ubahData($where, $data, 'permohonan_tanah');
        return redirect('Tanah/prmTanah');
    }

    public function hapusPermohonan($id)
    {
        $id_permohonan = ['id_permohonan' => $id];
        $this->Model_Tanah->hapusData($id_permohonan, 'permohonan_tanah');
        redirect('Tanah/prmTanah');
    }

    public function cetakPrm($id)
    {

        $id_permohonan = $id;

        $data['permohonan'] = $this->Model_Tanah->getPermohonan($id_permohonan);
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $data['title_pdf'] = 'Permohonan Tanah';

        // filename dari pdf ketika didownload
        $file_pdf = 'data permohonan tanah';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "potrait";

        $html = $this->load->view('data/permohonan_tanah', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

    public function laporanTanah()
    {
        $this->load->library('pdfgenerator');
        $this->data['invTanah'] = $this->Model_Inventarisasi->getData('tanah')->result_array();
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator


        // title dari pdf
        $this->data['title_pdf'] = 'Laporan Data Inventarisasi Tanah';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_inventarisasi_tanah';
        // setting paper
        $paper = 'F4';
        //orientasi paper potrait / landscape
        $orientation = "potrait";

        $html = $this->load->view('data/laporan_inv_tanah', $this->data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
    public function laporanTanaman()
    {

        $this->data['invTanaman'] = $this->Model_Inventarisasi->getData('tanaman')->result_array();
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $this->data['title_pdf'] = 'Laporan Data Inventarisasi Tanaman';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_inventarisasi_tanaman';
        // setting paper
        $paper = 'F4';
        //orientasi paper potrait / landscape
        $orientation = "potrait";

        $html = $this->load->view('data/laporan_inv_tanaman', $this->data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
    public function laporanBangunan()
    {
        $this->load->library('pdfgenerator');
        $this->data['invBangunan'] = $this->Model_Inventarisasi->getData('bangunan')->result_array();
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator


        // title dari pdf
        $this->data['title_pdf'] = 'Laporan Data Inventarisasi Bangunan';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_inventarisasi_bangunan';
        // setting paper
        $paper = 'F4';
        //orientasi paper potrait / landscape
        $orientation = "potrait";

        $html = $this->load->view('data/laporan_inv_bangunan', $this->data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

    public function inputPengajuan()
    {
        $this->session->unset_userdata('message');
        $data['judul'] = "Pengajuan Validasi";
        $data['pengguna'] = $this->Model_Autor->getUbahData(['id_pemdes' => $this->session->userdata('id_pemdes')], 'pemdes')->row_array();
        $data['pengajuan'] = $this->Model_Tanah->getData('pengajuan')->result_array();


        $this->load->view('template/header', $data);
        $this->load->view('pemdes/sidebar_pemdes', $data);
        $this->load->view('data/inputpengajuan', $data);
        $this->load->view('template/footer');
    }

    public function inputDataPengajuan()
    {
        $this->load->library('upload');
        $id_pemdes = $this->input->post('id_pemdes');
        $nis = $this->input->post('nis');
        $status = $this->input->post('status');
        $jenis = $this->input->post('bidang');
        $perihal = $this->input->post('perihal');
        $tgl = $this->input->post('tgl');
        $upload_file = $_FILES['data'];
        if ($upload_file) {
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '5000';
            $config['upload_path'] = './assets/file';

            $this->upload->initialize($config);
            if ($this->upload->do_upload('data')) {
                $file = $this->upload->data('file_name');
                $data = [
                    'id_pemdes' => $id_pemdes,
                    'nis' => $nis,
                    'id_admin' => 1,
                    'jenis_data_tanah' => $jenis,
                    'status_pengajuan' => $status,
                    'pesan_pengajuan' => $perihal,
                    'data_pengajuan' => $file,
                    'tgl_pengajuan' => $tgl
                ];
                $this->db->insert('pengajuan', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Input Pengajuan</div>');
                redirect('Tanah/inputpengajuan');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Input Pengajuan!!!</div>');
                redirect('Tanah/inputpengajuan');
            }
        }
    }
    public function cetakBuktiValidasi($id_pengajuan)
    {

        $this->load->library('pdfgenerator');

        $data['bukti'] = $this->db->query("SELECT * FROM pengajuan JOIN tanah ON tanah.nis = pengajuan.nis JOIN pemdes ON pengajuan.id_pemdes = pemdes.id_pemdes WHERE id_pengajuan ='$id_pengajuan'")->row_array();



        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator


        // title dari pdf
        $this->load->view('template/header');
        $data['title_pdf'] = 'Laporan Bukti Pengajuan';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_bukti_pengajuan';
        // setting paper
        $paper = 'F4';
        //orientasi paper potrait / landscape
        $orientation = "potrait";

        $html = $this->load->view('data/buktiValidasi', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

    public function pengajuanValidasi()
    {
        $this->session->unset_userdata('message');
        $data['judul'] = "Kelola Pengajuan Validasi";
        $data['pengajuan'] = $this->Model_Tanah->getPengajuan()->result_array();
        $data['admin'] = $this->Model_Autor->getUbahData(['id_admin' => $this->session->userdata('id_admin')], 'admin')->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/sidebar_admin');
        $this->load->view('data/pengajuan', $data);
        $this->load->view('template/footer');
    }

    public function cariPengajuan()
    {
        $katakunci = $this->input->post('katakunci');
        $data['judul'] = "Kelola Pengajuan Validasi";
        $data['pengajuan'] = $this->Model_Tanah->cariDataPengajuan($katakunci);
        $this->load->view('template/header', $data);
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('data/pengajuan', $data);
        $this->load->view('template/footer');
    }

    public function statusPengajuan()
    {
        $data['judul'] = "Status Pengajuan";
        $data['pengajuan'] = $this->db->query("SELECT * FROM pengajuan JOIN tanah ON pengajuan.nis = tanah.nis")->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('pemdes/sidebar_pemdes', $data);
        $this->load->view('data/statusPengajuan', $data);
        $this->load->view('template/footer');
    }

    // public function ubahPengajuan($id)
    // {
    //     $data['judul'] = "Ubah Pengajuan";
    //     $id_pengajuan = ['id_pengajuan' => $id];
    //     $data['data'] = $this->Model_Tanah->getUbahData($id_pengajuan, 'pengajuan')->row_array();

    //     $this->load->view('template/header', $data);
    //     $this->load->view('admin/sidebar_admin', $data);
    //     $this->load->view('data/ubahPengajuan', $data);
    //     $this->load->view('template/footer');
    // }

    public function ubahDataPengajuan($id)
    {
        $id_pengajuan = ['id_pengajuan' => $id];
        $id_adm = $this->input->post('id_adm');
        $status = $this->input->post('status');
        $data = [
            'id_admin' => $id_adm,
            'status_pengajuan' => $status
        ];
        $this->Model_Tanah->ubahPengajuan($id_pengajuan, $data, 'pengajuan');
        redirect('Tanah/pengajuanValidasi');
    }

    public function hapusPengajuan($id)
    {
        $id_pengajuan = ['id_pengajuan' => $id];
        $this->Model_Tanah->hapusData($id_pengajuan, 'pengajuan');
        redirect('Tanah/pengajuanValidasi');
    }

    public function laporanRekap()
    {
        $data['judul'] = "Laporan Rekap Pendataan";
        $data['pendataan'] = $this->Model_Tanah->getData('pendataan')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('data/rekapPendataan', $data);
        $this->load->view('template/footer');
    }

    public function cetakRekap()
    {
        $this->load->library('pdfgenerator');

        $data['pendataan'] = $this->Model_Tanah->getData('pendataan')->result_array();
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator


        // title dari pdf
        $data['title_pdf'] = 'Laporan Rekap Pendataan';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_rekap_pendataan';
        // setting paper
        $paper = 'F4';
        //orientasi paper potrait / landscape
        $orientation = "potrait";

        $html = $this->load->view('data/laporanRekapPendataan', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

    public function bidangTanah()
    {
        $this->session->unset_userdata('message');
        $data['judul'] = 'Data Bidang Tanah';
        $data['invTanah'] = $this->Model_Tanah->getData('tanah')->result_array();
        $data['invTanaman'] = $this->Model_Tanah->getData('tanaman')->result_array();
        $data['invBangunan'] = $this->Model_Tanah->getData('bangunan')->result_array();
        $data['permohonan'] = $this->Model_Tanah->getData('permohonan_tanah')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('pemdes/sidebar_pemdes', $data);
        $this->load->view('data/periksaBidang', $data);
        $this->load->view('template/footer');
    }
}
