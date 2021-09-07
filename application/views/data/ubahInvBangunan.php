<?php foreach ($invBangunan as $d) {
?>


    <div class="container-fluid">
        <h2>Ubah Inventarisasi Bangunan</h2>
        <br>
        <div style="background-color: lightgrey; border-radius: 10px; background-position: center;padding-bottom:15px">
            <form class="user" method="post" action="<?= base_url('Inventarisasi/ubahDataInvBangunan'); ?>">
                <div class="row">
                    <div class="col-md-3" style="margin-left: 30px; margin-top: 10px;">
                        <h5>A. Pemilik Bangunan</h5>
                    </div>
                    <div class="col-md-4" style="margin-left: 10px; margin-top: 10px;">
                        <h5>B. Pemilik Tanah</h5>
                    </div>
                    <div class="col-md-3" style="margin-left: 5px; margin-top: 10px;">
                        <h5>C. Keadaan Bangunan</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" style="margin-left: 30px; margin-top: 30px;">
                        <input type="hidden" name="id" value="<?= $d['id_bangunan']; ?>">
                        <select name="desa" class="form-control">
                            <option><?= $d['desa']; ?></option>
                            <?php foreach ($tanah as $data) : ?>
                                <option><?= $d['desa']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <br>

                        <select name="rtrw" class="form-control">
                            <option><?= $d['rtrw']; ?></option>
                            <?php foreach ($tanah as $data) : ?>
                                <option><?= $d['rt/rw']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <br>

                        <input type="text" name="nama_pemilik_bangunan" placeholder="Nama Lengkap" class="form-control" value="<?= $d['nama_pemilik_bangunan']; ?>">
                        <br>
                        <input type="text" name="ttl" placeholder="Tempat Tanggal Lahir" class="form-control" value="<?= $d['ttl']; ?>">
                        <br>
                        <input type="text" name="no_ktp" placeholder="Nomor KTP" class="form-control" value="<?= $d['no_ktp']; ?>">
                        <br>
                        <input type="text" name="kerja" placeholder="Pekerjaan" class="form-control" value="<?= $d['pekerjaan']; ?>">
                        <br>
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?= $d['alamat']; ?>">
                    </div>


                    <div class="col-md-4" style="margin-left: 10px; margin-top: 30px;">

                        <select name="nama_pemilik_tanah" class="form-control">
                            <option><?= $d['nama_pemilik_tanah']; ?></option>
                            <?php foreach ($tanah as $data) : ?>
                                <option><?= $d['nama_pemilik']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <br>
                        <input type="text" name="kavling" placeholder="Peta/Kavling" class="form-control" value="<?= $d['kavling']; ?>">
                        <br>

                        <input type="text" name="luas" placeholder="Luas" class="form-control" value="<?= $d['luas']; ?>">
                        <br>

                        <select name="kecamatan" class="form-control">
                            <option><?= $d['kecamatan']; ?></option>
                            <?php foreach ($tanah as $data) : ?>
                                <option><?= $d['kecamatan']; ?></option>
                            <?php endforeach; ?>
                        </select>



                    </div>
                    <div class="col-md-3" style="margin-left: 60px;">


                        <br>
                        <input type="text" name="jenis_konstruksi" placeholder="Jenis Konstruksi" class="form-control" value="<?= $d['jenis_konstruksi']; ?>">
                        <br>
                        <input type="text" name="luas_bangunan" placeholder="Luas Bangunan" class="form-control" value="<?= $d['luas_bangunan']; ?>">

                        <br>
                        <input type="text" name="kelas_konstruksi" placeholder="Kelas Konstruksi" class="form-control" value="<?= $d['kelas_konstruksi']; ?>">
                        <br>
                        <input style="margin-bottom: 30px" type="text" name="kondisi" placeholder="Kondisi" class="form-control" value="<?= $d['kondisi']; ?>">
                        <div style="margin-bottom: 	50px">
                            <a href="<?= base_url('Inventarisasi/invBangunan'); ?>" class="btn btn-warning">Batal</a>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>

                    </div>

                <?php    } ?>
            </form>
        </div>
    </div>