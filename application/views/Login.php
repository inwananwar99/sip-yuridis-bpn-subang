<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?= base_url(); ?>assets/img/608px-Logo_BPN-KemenATR_(2017).png" rel="icon">
  <title>Login Pengguna - SIMPEL BPN</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color: midnightblue; background: url(<?= base_url() ?>assets/img/bpn.jpeg)" >
<br><br><br>
  <div class="container"  >
    <div class="login-container" >
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-5 col-md-4 mb-4">

          <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 30px;">
            <div class="card-body p-4" style="background-color: white">
              <!-- Nested Row within Card Body -->
              <div class="row justify-content-center" style="margin-top:100px">

                <div class="col-lg-10">
                  <div class="p-1">
                  <img style="margin-left: 100px;" width="100px" height="100px" src="<?= base_url(); ?>assets/img/608px-Logo_BPN-KemenATR_(2017).png" alt="">
                  <div class="text-center">
                    <h2 class="h4 text-dark bold mb-4 mt-3">Login Pengguna</h2>
                  </div>
                  <form class="user" method="post" action="<?= base_url('index.php/Monitoring/masuk'); ?>">
                    
                    <div class="form-group">
                      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan nama pengguna ..." name="username">
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label  class="custom-control-label" for="customCheck">Ingat Saya</label>
                      </div>
                    </div>
                    <div style="text-size-adjust: 10pt; margin-bottom: 10px;" >
                      <a  href="<?= base_url('index.php/Autor/daftar'); ?>">Belum memiliki akun?</a></div>
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

</body>

</html>