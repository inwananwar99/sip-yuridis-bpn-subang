 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"></h1>

     <div class="row">
         <div class="col-lg-8">
             <form action="" method="POST" enctype="multipart/form-data">
                 <div class="form-group row">
                     <label for="input" class="col-sm-2 col-form-label">NIP/NIK</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="input" name="email" value="" readonly>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="nama" name="nama" value="">
                         <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                 </div>

                 <div class="form-group row">
                     <label for="gmbr" class="col-sm-2 col-form-label">Gambar</label>
                     <div class="col-sm-10">
                         <div class="row">
                             <div class="col-sm-3">
                                 <img src="<?= base_url('assets/gambar/')  ?>" class="img-thumbnail">
                             </div>
                             <div class="col-sm-9">
                                 <div class="custom-file">
                                     <input type="file" class="custom-file-input" id="gbr" name="gbr">
                                     <label for="gbr" class="custom-file-label">Telusuri File</label>
                                 </div>
                             </div>
                         </div>
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