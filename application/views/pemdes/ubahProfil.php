<div class="container" style="background-image: url(<?= base_url() ?>assets/img/bpn-subang.jpg); background-size: 1130px; background-repeat: no-repeat; padding-bottom: 133px;">

    <div class="row">
        <!-- Page Heading -->

        <div class="col-lg-8" style="background-color: white;  opacity: 0.9; margin-left: 170px; margin-top:50px">
            <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1><br>
            <form action="<?= base_url('Autor/ubahProfilPemdes/' . $pengguna['id_pemdes']); ?>" method="POST" enctype="multipart/form-data">

                <div class="form-group row">
                    <label for="input" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input" name="nl" value="<?= $pengguna['nama']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $pengguna['username']; ?>" readonly>
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $pengguna['no_telp']; ?>" readonly>
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-warning">Batal</button>
                        <a href="#" data-toggle="modal" data-target="#ModalUbahProfil" class="btn btn-secondary">Ubah Profil</a>
                    </div>
                </div>

        </div>

    </div>

    </form>

</div>
<div class="modal fade" id="ModalUbahProfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="myModalLabel">Ubah Profil Saya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form class="user" method="post" action="<?= base_url('Autor/ubahDataProfilPemdes/' . $pengguna['id_pemdes']); ?>">

                    <div class="form-group row">
                        <label for="input" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div style="margin-left: 20px; margin-top:10px;" class="col-sm-8">
                            <input type="text" class="form-control" id="input" name="nl" value="<?= $pengguna['nama']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-8" style="margin-left: 20px; margin-top:10px;">
                            <input type="text" class="form-control" id="nama" name="username" value="<?= $pengguna['username']; ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-8" style="margin-left: 20px; margin-top:10px;">

                            <div class="input-group-append">
                                <input type="password" class="form-control" id="pass" name="password" value="<?= $pengguna['password']; ?>">
                                <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                                <span id="mybutton" onclick="change()" class="input-group-text">

                                    <!-- icon mata bawaan bootstrap  -->
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </span>
                            </div>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-8" style="margin-left:20px; margin-top:10px;">
                            <input type="text" class="form-control" id="nama" name="no_telp" value="<?= $pengguna['no_telp']; ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <br>
                    <a href="<?= base_url('Tanah/detilPendataan'); ?>" class="btn btn-warning">Batal</a>
                    <button class="btn btn-success" type="submit">Simpan</button>

                </form>

            </div>
        </div>
    </div>
</div>
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
        } else {

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