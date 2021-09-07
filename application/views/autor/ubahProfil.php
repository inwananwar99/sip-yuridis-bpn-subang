 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>



     <div class="row">
         <div class="col-lg-8">
             <form action="<?= base_url('index.php/pengguna/ubahprofil/' . $pengguna['id']); ?>" method="POST" enctype="multipart/form-data">
                 <div class="form-group row">
                     <label for="input" class="col-sm-2 col-form-label">Nama Lengkap</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="input" name="nl" value="<?= $pengguna['nama']; ?>" readonly>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="nama" class="col-sm-2 col-form-label">Username</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="nama" name="nama" value="<?= $pengguna['username']; ?>">
                         <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="nama" class="col-sm-2 col-form-label">Nomor Handphone</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="nama" name="nama" value="<?= $pengguna['no_hp']; ?>">
                         <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                 </div>


                 <div class="form-group">
                     <div class="col-sm-10">
                         <button type="submit" class="btn btn-secondary">Ubah</button>
                     </div>
                 </div>

         </div>
     </div>

     </form>







 </div>