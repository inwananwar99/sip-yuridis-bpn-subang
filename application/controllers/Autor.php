<?php

class Autor extends CI_Controller
{



    public function index()
    {
        $this->load->view('autor/beranda');
    }

    public function beranda()
    {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan login terlebih dahulu!</div>');
        redirect('Autor/login');
    }

    public function login()
    {
        $this->load->view('autor/login');
    }

    public function daftar()
    {

        $this->load->view('autor/daftar');
    }

    public function ubahProfilAdmin()
    {

        $data = ['judul' => "Profil Saya"];
        $data['pengguna'] = $this->Model_Autor->getUbahData(['nama' => $this->session->userdata('nama')], 'admin')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('admin/ubahprofil', $data);
        $this->load->view('template/footer');
    }

    public function ubahProfilSatgasB()
    {
        $data = ['judul' => "Profil Saya"];
        $data['pengguna'] = $this->Model_Autor->getUbahData(['nama' => $this->session->userdata('nama')], 'satgas_b')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('satgasb/sidebar_satgasb', $data);
        $this->load->view('satgasb/ubahprofil', $data);
        $this->load->view('template/footer');
    }

    public function ubahProfilPemdes()
    {
        $data = ['judul' => "Profil Saya"];
        $data['pengguna'] = $this->Model_Autor->getUbahData(['nama' => $this->session->userdata('nama')], 'pemdes')->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('pemdes/sidebar_pemdes', $data);
        $this->load->view('pemdes/ubahprofil', $data);
        $this->load->view('template/footer');
    }

    public function ubahDataProfilAdmin($id)
    {
        $data = ['judul' => "Ubah Profil Pengguna"];
        $id_pengguna = ['id_pengguna' => $id];
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $no_hp = $this->input->post('no_hp');
        $data = [
            'username' => $username,
            'password' => $password,
            'no_hp' => $no_hp
        ];
        $data['pengguna'] = $this->Model_Autor->ubahData($id_pengguna, $data, 'pengguna');
        return redirect('Autor/ubahProfilAdmin');
    }
    public function ubahDataProfilSatgas($id)
    {
        $data = ['judul' => "Ubah Profil Pengguna"];
        $id_pengguna = ['id_satgas' => $id];
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $no_hp = $this->input->post('no_hp');
        $data = [
            'username' => $username,
            'password' => $password,
            'no_telp' => $no_hp
        ];
        $data['pengguna'] = $this->Model_Autor->ubahData($id_pengguna, $data, 'satgas_b');
        return redirect('Autor/ubahProfilSatgasB');
    }

    public function ubahDataProfilPemdes($id)
    {
        $data = ['judul' => "Ubah Profil Pengguna"];
        $id_pemdes = ['id_pemdes' => $id];
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $no_telp = $this->input->post('no_telp');
        $data = [
            'username' => $username,
            'password' => $password,
            'no_telp' => $no_telp
        ];
        $data['pengguna'] = $this->Model_Autor->ubahData($id_pemdes, $data, 'pemdes');
        return redirect('Autor/ubahProfilPemdes');
    }


    public function logout()
    {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat anda telah berhasil logout!</div>');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('nama');

        redirect('Autor/login');
    }

    public function daftarPengguna()
    {
        
        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required|trim', [
            'required' => 'Nama Lengkap harus diisi!'
        ]);
        $this->form_validation->set_rules('notelepon', 'Nomor Telepon', 'required|trim', [
            'required' => 'Nomor Telepon harus diisi!'
        ]);
        $this->form_validation->set_rules('username', 'username', 'required|trim', [
            'required' => 'Nama Pengguna harus diisi!'
        ]);
        $this->form_validation->set_rules('sandi', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Kata Sandi tidak sesuai!',
            'min_length' => 'Password terlalu pendek, minimal 6 huruf/karakter',
            'required' => 'Kata Sandi harus diisi!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[sandi]');

        if ($this->form_validation->run() == false) {
            $this->load->view('autor/daftar');
        } else {
            $data = [
                'nama' => $this->input->post('namalengkap'),
                'no_telp' => $this->input->post('notelepon'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('sandi')
            ];

            $this->Model_Autor->tambahData('pemdes', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Anda telah terdaftar di sistem kami. Silahkan login</div>');
            redirect('Autor/login');
        }
    }
    public function loginPengguna()
    {
        $this->form_validation->set_rules('username', 'Nama pengguna', 'trim|required');
        $this->form_validation->set_rules('password', 'Kata sandi', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('autor/login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $admin = $this->Model_Autor->getUbahData(['username' => $username], 'admin')->row_array();
            $satgas = $this->Model_Autor->getUbahData(['username' => $username], 'satgas_b')->row_array();
            $pemdes = $this->Model_Autor->getUbahData(['username' => $username], 'pemdes')->row_array();
            
            if ($admin || $satgas || $pemdes) {
                    //login admin
                if ($admin['password'] == $password) {
                    $data = [
                        'nama' => $admin['nama'],
                        'username' => $admin['no_telp'],
                        'id_admin' => $admin['id_admin']
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Datang di Sistem Informasi Pendataan Yuridis!</div>');
                    redirect('Autor/admin');
                    //login satgas b
                } else if ($satgas['password'] == $password) {
                    $data = [
                       'nama' => $satgas['nama'],
                        'username' => $satgas['no_telp'],
                        'id_satgas' => $satgas['id_satgas']
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Datang di Sistem Informasi Pendataan Yuridis!</div>');
                    redirect('Autor/satgasb');
                    //login pemdes
                } else if ($pemdes['password'] == $password) {
                    $data = [
                       'nama' => $pemdes['nama'],
                        'username' => $pemdes['no_telp'],
                        'id_pemdes' => $pemdes['id_pemdes']
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Datang di Sistem Informasi Pendataan Yuridis!</div>');
                    redirect('Autor/pemdes');         
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!!!</div>');
                    redirect('Autor/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun belum terdaftar!!!</div>');
                redirect('Autor/login');
            }
        }
    }
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
        $data['pengguna'] = $this->Model_Autor->getUbahData(['nama' => $this->session->userdata('nama')], 'pemdes')->row_array();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Datang di Sistem Informasi Pendataan Yuridis!</div>');
        $this->load->view('template/header', $data);
        $this->load->view('pemdes/sidebar_pemdes', $data);
        $this->load->view('pemdes/dashboard_pemdes', $data);
        $this->load->view('template/footer');
    }
    public function dataPengguna()
    {
        $this->session->unset_userdata('message');
        $data['judul'] = "Data Pengguna";
        $data['pengguna'] = $this->Model_Autor->getData('admin')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('data/pengguna', $data);
        $this->load->view('template/footer', $data);
    }
    public function tambahDataPengguna()
    {
        $islogin = $this->input->post('islogin');
        $nip_nik = $this->input->post('nip/nik');
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $no_hp = $this->input->post('no_hp');
        $data = [
            'nip/nik' => $nip_nik,
            'nama' => $nama,
            'level' => $level,
            'no_hp' => $no_hp,
            'username' => $username,
            'password' => $password,
            'is_login' => $islogin
        ];
        $this->Model_Autor->tambahData('pengguna', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna telah berhasil ditambahkan!</div>');
        return redirect('Autor/dataPengguna');
    }

    public function hapusPengguna($id)
    {
        $id = ['id_pengguna' => $id];
        $this->Model_Autor->hapusData($id, 'pengguna');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna telah berhasil dihapus!</div>');
        return redirect('Autor/dataPengguna');
    }
}
