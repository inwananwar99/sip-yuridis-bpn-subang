<?php foreach ($invTanaman as $d) {
?>


    <div class="container-fluid">
        <h2>Ubah Inventarisasi Tanaman</h2>
        <br>
        <div style="background-color: lightgrey; border-radius: 10px; background-position: center;padding-bottom:15px">
            <form class="user" method="post" action="<?= base_url('Inventarisasi/ubahDataInvTanaman'); ?>">
                <div class="row">
                    <div class="col-md-3" style="margin-left: 30px; margin-top: 10px;">
                        <h5>A. Pemilik Tanaman</h5>
                    </div>
                    <div class="col-md-4" style="margin-left: 10px; margin-top: 10px;">
                        <h5>B. Pemilik Tanah</h5>
                    </div>
                    <div class="col-md-3" style="margin-left: 5px; margin-top: 10px;">
                        <h5>C. Keadaan Tanah</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" style="margin-left: 30px; margin-top: 30px;">
                        <label for="nis">NIS</label>
                        <input type="hidden" name="id" value="<?= $d['id_tanaman']; ?>">
                        <select name="nis" class="form-control">
                            <option><?= $d['nis']; ?></option>
                            <?php foreach ($tanah as $data) : ?>
                                <option><?= $data['nis']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <br>
                        <label for="desa">Desa</label>
                        <select name="desa" class="form-control">
                            <option><?= $d['desa']; ?></option>
                            <?php foreach ($tanah as $data) : ?>
                                <option value=""><?= $data['desa']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <br>
                        <label for="rtrw">RT/RW</label>
                        <select name="rtrw" class="form-control">
                            <option><?= $d['rtrw']; ?></option>
                            <?php foreach ($tanah as $data) : ?>
                                <option><?= $data['rt/rw']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <br>
                        <label for="pemilik_tanaman">Nama Pemilik Tanaman</label>
                        <input type="text" name="nama_pemilik_tanaman" placeholder="Nama Lengkap" class="form-control" value="<?= $d['nama']; ?>">
                        <br>
                        <label for="tempat">Tempat Lahir</label>
                        <input type="text" id="tempat" name="tempat" placeholder="Tempat Lahir" class="form-control" value="<?= $d['tempat'] ?>">
                        <br>
                        <label for="tgl">Tanggal Lahir</label>
                        <input type="date" id="tgl" name="tanggal" placeholder="Tanggal Lahir" class="form-control" value="<?= $d['tgl_lahir'] ?>">
                        <br>
                        <label for="ktp">No. KTP</label>
                        <input type="text" name="no_ktp" placeholder="Nomor KTP" class="form-control" value="<?= $d['no_ktp']; ?>">
                        <br>
                        <label for="kerja">Pekerjaan</label>
                        <input type="text" name="kerja" placeholder="Pekerjaan" class="form-control" value="<?= $d['pekerjaan']; ?>">
                        <br>
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?= $d['alamat']; ?>">
                    </div>


                    <div class="col-md-4" style="margin-left: 10px; margin-top: 30px;">
                        <label for="milik_tanah">Pemilik Tanah</label>
                        <select name="nama_pemilik_tanah" class="form-control">
                            <option><?= $d['nama_pemilik_tanah']; ?></option>
                            <?php foreach ($tanah as $data) : ?>
                                <option><?= $data['nama_pemilik']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <br>
                        <label for="kavling">Peta/Kavling</label>
                        <input type="text" name="kavling" placeholder="Peta/Kavling" class="form-control" value="<?= $d['kavling/blok']; ?>">
                        <br>
                        <label for="luas" Luas></label>
                        <input type="text" name="luas" placeholder="Luas" class="form-control" value="<?= $d['luas']; ?> m2">
                        <br>
                        <label for="kec">Kecamatan</label>
                        <select name="des_kec" class="form-control">
                            <option value=""><?= $d['kecamatan']; ?></option>
                            <?php foreach ($tanah as $data) : ?>
                                <option><?= $data['desa/kec']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>
                        <label for="alas">Alas Hak</label>
                        <select name="alas_hak" class="form-control">
                            <option><?= $d['alas_hak']; ?></option>
                            <option>SHM</option>
                            <option>AJB</option>
                            <option>Girik</option>
                            <option>Letter C</option>
                            <option>Surat Keterangan Desa</option>
                            <option>SPPT</option>

                        </select>
                    </div>
                    <div class="col-md-3" style="margin-left: 60px;">
                        <br>
                        <label for="jenis">Jenis Tanaman</label>
                        <input type="text" name="jenis" placeholder="Jenis Tanaman" class="form-control" value="<?= $d['jenis_tanaman']; ?>">
                        <br>
                        <label for="ukur">Ukuran Tanaman</label>
                        <select name="ukuran" id="" class="form-control">
                            <option><?= $d['ukuran']; ?></option>
                            <option>Besar</option>
                            <option>Sedang</option>
                            <option>Kecil</option>
                        </select>

                        <br>
                        <label for="jumlah">Jumlah Tanaman</label>
                        <input style="margin-bottom: 30px" type="text" name="jumlah" placeholder="Jumlah Tanaman" class="form-control" value="<?= $d['jumlah']; ?>">
                        <div style="margin-bottom: 	50px">
                            <a href="<?= base_url('Inventarisasi/invTanaman'); ?>" class="btn btn-warning">Batal</a>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>

                    </div>

                <?php    } ?>
            </form>
        </div>
    </div>