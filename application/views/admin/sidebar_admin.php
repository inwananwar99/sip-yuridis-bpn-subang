        <body id="page-top">

            <!-- Page Wrapper -->
            <div id="wrapper">

                <!-- Sidebar -->
                <ul style="background-color: midnightblue;" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                        <div class="sidebar-brand-icon ">
                            <i><img src="<?= base_url('assets/img/487px-Logo_BPN-KemenATR_(2017).png'); ?>" height="45px" width="45px"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">SIP Yuridis</div>
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider ">

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Admin
                    </div>


                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Pengguna/admin') ?>">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span></a>
                    </li>

                    <!-- Nav Item - Charts -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Autor/ubahProfilAdmin') ?>">
                            <i class="fas fa-fw fa-user"></i>
                            <span>Profil Saya</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Autor/dataPengguna'); ?>">
                            <i class="fas fa-fw fa-book"></i>
                            <span>Data Pengguna</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('index.php/Tanah/pengajuanValidasi'); ?>">
                            <i class="fas fa-fw fa-book"></i>
                            <span>Data Pengajuan Validasi</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Tanah/prmTanah'); ?>">
                            <i class="fas fa-fw fa-book"></i>
                            <span>Data Permohonan Tanah</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Tanah/laporanRekap') ?>" >
                            <i class="fas fa-fw fa-file"></i>
                            <span>Laporan Rekap Pendataan</span>
                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#ModalInv">
                            <i class="fas fa-fw fa-file"></i>
                            <span>Laporan Inventarisasi</span>
                        </a>

                    </li>



                    
                    <!-- Nav Item - Charts -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('index.php/Admin/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                            <i class=" fas fa-fw fa-sign-out-alt"></i>
                            <span>Logout</span></a>
                    </li>



                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>

                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                        <nav class="bg-info navbar navbar-expand navbar-light topbar mb-4 static-top shadow">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>



                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">




                                <div class="topbar-divider d-none d-sm-block"></div>

                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                        </span>
                                        <i style="color:black;" class="fas fa-fw fa-user"></i>
                                        <h5 style="color: black;margin-left: 30px;">
                                            <?= $this->session->userdata('level'); ?><br>
                                            <?= $this->session->userdata('nama'); ?>
                                        </h5>
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Profile
                                        </a>

                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?= base_url('index.php/Admin/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>

                            </ul>

                        </nav>
                        <!-- End of Topbar -->
                        <div class="modal fade" id="ModalInv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <h5 class="modal-title" id="myModalLabel">Menu Laporan Inventarisasi Bidang Tanah</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">



                                        <div class="container-fluid" class="icon-boxes" style="margin-bottom: 50px;">
                                            <div class="row">
                                                <div class="col-md-4" style="color: green;">
                                                    <div class="card">
                                                        <div class="icon-boxes" style="margin-top:10px;">
                                                           <!--  <img style="margin-bottom: 30px;" src="<?= base_url(); ?>assets/img/tanahcampuran2.jpg" class="card-img-top" alt="Belum ada gambar"> -->
                                                            <h3 class="card-title"><a style="margin-left: 65px" target="_blank" href="<?= base_url('Tanah/laporanTanah'); ?>" class="btn btn-primary">Inventarisasi Tanah</a></h3>
                                                            <small></small> <br> <span class="badge badge-pill badge-success"></span> <br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="color: green;">
                                                    <div class="card">
                                                        <div class="icon-boxes" style="margin-top:10px;">
                                                            <!-- <img style="margin-bottom: 30px;" width="90px" height="250px" src="<?= base_url(); ?>assets/img/tanaman.jpg" class="card-img-top" alt="Belum ada gambar"> -->
                                                            <h3 class="card-title"><a style="margin-left: 65px;" target="_blank" href="<?= base_url('Tanah/laporanTanaman'); ?>" class="btn btn-success">Inventarisasi Tanaman</a></h3>
                                                            <small></small> <br> <span class="badge badge-pill badge-success"></span> <br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="color: green;">
                                                    <div class="card">
                                                        <div class="icon-boxes" style="margin-top:10px;">
                                                            <!-- <img style="margin-bottom: 30px; height:250px;" src="<?= base_url(); ?>assets/img/bangunan.jpg" class="card-img-top" alt="Belum ada gambar"> -->
                                                            <h3 class="card-title"><a style="margin-left: 65px; " target=" _blank" href="<?= base_url('Tanah/laporanBangunan'); ?>" class="btn btn-warning">Inventarisasi Bangunan</a></h3>
                                                            <small></small> <br> <span class="badge badge-pill badge-success"></span> <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>