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
             Pemdes
         </div>


         <!-- Nav Item - Dashboard -->
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('Pengguna/pemdes'); ?>">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span>Dashboard</span></a>
         </li>



         <!-- Nav Item - Charts -->
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('autor/ubahProfilPemdes/'); ?>">
                 <i class="fas fa-fw fa-user"></i>
                 <span>Profil Saya</span></a>
         </li>



         <li class="nav-item">
             <a class="nav-link" href="#" data-toggle="modal" data-target="#ModalPengajuan"> <i class="fas fa-fw fa-book"></i>
                 <span>Pengajuan Validasi Data</span></a>
         </li>


         <!-- Nav Item - Charts -->
         <li class="nav-item">
             <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
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


                             <i style="color:black;" class="fas fa-fw fa-user"></i>
                             <h5 style="color: black;margin-left: 30px;">
                                 <?= $this->session->userdata('level'); ?><br>
                                 <?= $this->session->userdata('nama'); ?>
                             </h5>
                             </span>
                         </a>
                         <!-- Dropdown - User Information -->
                         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                             <a class="dropdown-item" href="#">
                                 <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Profil Saya
                             </a>

                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="<?= base_url('Autor/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Logout
                             </a>
                         </div>
                     </li>

                 </ul>

             </nav>
             <!-- End of Topbar -->

             <div class="modal fade" id="ModalPengajuan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-m">
                     <div class="modal-content">
                         <div class="modal-header">

                             <h5 class="modal-title" id="myModalLabel">Menu Pengajuan Validasi</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         </div>
                         <div class="modal-body">
                             <div class="card-body">
                                 <div class="row" style="margin-left:30px">
                                     <div class="col-md-4">
                                         <a class="btn btn-success" class="close" href="<?= base_url('Tanah/inputPengajuan'); ?>">Input Pengajuan</a><br>
                                     </div>
                                     <div class="col-md-4">
                                         <a class="btn btn-warning" class="close" href="<?= base_url('Tanah/bidangTanah'); ?>">Periksa Bidang Tanah</a><br>
                                     </div>
                                     <div class="col-md-4">
                                         <a class="btn btn-primary" href="<?= base_url('Tanah/statusPengajuan/') ?>">Status Pengajuan</a>
                                     </div>

                                 </div>
                             </div>



                         </div>

                     </div>
                 </div>
             </div>