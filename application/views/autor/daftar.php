<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url(); ?>assets/img/487px-Logo_BPN-KemenATR_(2017).png" rel="icon">
    <title>Daftar Pengguna</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style=" background: url(<?= base_url('assets/img/bpn-ri.jpg') ?>) no-repeat scroll; background-size: 100% 100%;">

    <div class="container">
        <div class="row justify-content-center">


            <div class="card o-hidden border-0 shadow" style="border-radius: 50px; margin-top: 87px;opacity:0.9">
                <div class="card-body p-0" style="background-color:white; ">

                    <div class="row">   
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Daftar Pengguna</h1>
                                </div>
                                <form class="user" method="post" action="<?= base_url('Autor/daftarPengguna'); ?>">
                                     <?= $this->session->flashdata('message'); ?>
                                    <div class="form-group">
                                        
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="namalengkap" value="<?php echo set_value('namalengkap'); ?>">
                                        <?= form_error('namalengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nomor Telepon" name="notelepon" value="<?php echo set_value('notelepon'); ?>">
                                        <?= form_error('notelepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control" placeholder="Password" name="sandi" value="<?php echo set_value('sandi'); ?>">
                                            <?= form_error('sandi', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control" placeholder="Ulangi Password" name="password2">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">
                                        Daftar
                                    </button>

                                    <div class="text-center">
                                        <a style=" margin-left: 10px; margin-top: 30px; font-size: 12pt;" class="small" href="<?php echo base_url('index.php/Autor/login'); ?>">Sudah memiliki akun? Silahkan Login!!!</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>