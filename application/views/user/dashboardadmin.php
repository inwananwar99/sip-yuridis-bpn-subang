 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
     <h3>Selamat Datang Admin <?= $admin['username']; ?></h3>


     <div class="card">
         <div class="col-md-4">
             <img src="<?= base_url('assets/'); ?>">
         </div>
         <div class="col-md-8">
             <div class="card-body">
                 <h4 class="card-title"><?= $admin['username']; ?></h4>
                 <p class="card-text"><?= $admin['email']; ?></p>
                 <p class="text-muted"><small>

             </div>
         </div>
     </div>



 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->