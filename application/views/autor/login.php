<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?= base_url(); ?>assets/img/487px-Logo_BPN-KemenATR_(2017).png" rel="icon">
  <title>Login Pengguna - SIP BPN</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background: url(<?= base_url() ?>assets/img/bpn.jpeg); ">

  <div class="container mt-3">
    <div class="login-container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-5 col-md-4 mb-4">

          <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 30px;">
            <div class="card-body p-3" style="background-color: rgb(255,255,255,0.4); ">
              <!-- Nested Row within Card Body -->
              <div class=" row justify-content-center">

                <div class="col-lg-10">
                  <div class="p-3">
                    <img style="margin-left: 100px;" width="100px" height="100px" src="<?= base_url(); ?>assets/img/487px-Logo_BPN-KemenATR_(2017).png" alt="">
                    <div class="text-center">
                      <h2 class="h4 text-dark bold mb-4 mt-3">Login Pengguna</h2>
                    </div>
                    <form class="user" method="post" action="<?= base_url('index.php/Autor/loginPengguna'); ?>">
                      <?= $this->session->flashdata('message'); ?>
                      <div class="form-group">
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan nama pengguna ..." name="username" autocomplete="off" autofocus="">
                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                      <div class="form-group">
                        <div class="input-group-append">
                             <input type="password" class="form-control" id="pass" name="password" placeholder="Password" autocomplete="off" autofocus="">
                            <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                            <span id="mybutton" onclick="change()" class="input-group-text">
    
                                <!-- icon mata bawaan bootstrap  -->
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                            </span>
                        
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                      </div>
                      
                      <div style="text-size-adjust: 10pt; margin-bottom: 10px;">
                        <a href="<?= base_url('index.php/Autor/daftar'); ?>">Belum memiliki akun?</a>
                      </div>
                  </div>

                  <button type="submit" class="btn btn-success btn-block">Login</button>
                  <a style=" margin-left: 90px; margin-top: 10px;" href="<?= base_url('Autor'); ?>" style="font-size: 12pt;">Kembali ke Beranda</a>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  </div>
  </div>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="Admin/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>
<script>
            // membuat fungsi change
            function change() {
    
                // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
                var x = document.getElementById('pass').type;
    
                //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
                if (x == 'password') {
    
                    //ubah form input password menjadi text
                    document.getElementById('pass').type = 'text';
                    
                    //ubah icon mata terbuka menjadi tertutup
                    document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                                    <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                                    <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                                    </svg>`;
                }
                else {
    
                    //ubah form input password menjadi text
                    document.getElementById('pass').type = 'password';
    
                    //ubah icon mata terbuka menjadi tertutup
                    document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                    </svg>`;
                }
            }
        </script>
</body>

</html>