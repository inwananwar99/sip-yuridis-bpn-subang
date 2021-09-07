<?php
    foreach($permohonan as $d) :
 ?>
<div class="container-fluid">
    <h2>Ubah Permohonan Tanah</h2>
    <br>
    <div style="background-color: lightgrey; border-radius: 10px; background-position: center; ">
        <form style="margin-left: 30px;" class="user" method="post" action="<?= base_url('Tanah/ubahDataPermohonan'); ?>">
            <div class="row">
                <div class="col-md-3" style="margin-left: 30px; margin-bottom:30px; margin-top:15px; ">
                    <input type="hidden" name="id" value="<?= $d['id_permohonan']; ?>">
                    <label>NIS</label>
                    <select name="nis" style="width: 120px;" name="nis" class="form-control">
                        <option><?= $d['nis']; ?></option>
                        <?php
                        $nis = $this->db->query("SELECT nis FROM tanah")->result_array();
                         foreach($nis as $data) :
                         ?>
                        <option><?= $data['nis']; ?></option>
                    <?php endforeach; ?>
                    </select>
                    
                </div>
                <div class="col-md-3" style="margin-top:15px;">
                    <label>No. Berkas</label>
                    <input style="width: 120px;" type="text" name="no_berkas" class="form-control" value="<?= $d['no_berkas']; ?>" placeholder="No. Berkas">
                </div>
                <div class="col-md-3" style="margin-top:15px;">
                    <label>No. Register</label>
                    <input style="width: 120px;" type="text" name="no_register" class="form-control" value="<?= $d['no_register']; ?>" placeholder="No. Register">
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col" style="margin-left: 30px;">
                    <h5>Data Pemohon</h5>
                </div>
                <div class="col">
                    <h5>Data Tanah Dimohon</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3" style="margin-left: 30px; ">
                    <label>Nama Pemohon</label>
                    <input type="text" name="nama_pemohon" placeholder="Nama Pemohon" value="<?= $d['pemohon'];  ?>" class="form-control">
                    <br>
                    <label>Tempat Tanggal Lahir</label>
                    <input type="text" name="tempat" placeholder="Tempat" class="form-control" value="<?= $d['tempat']  ?>">
                    <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control" value="<?= $d['tgl_lahir']  ?>">
                    <br>
                    <label>Umur</label>
                    <input type="text" name="umur" placeholder="Umur" class="form-control" value="<?= $d['umur']  ?>">
                    <br>
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control" value="<?= $d['pekerjaan']  ?>">
                    <br>
                    <label>No. KTP</label>
                    <input type="text" name="no_ktp" placeholder="No. KTP" value="<?= $d['no_ktp']  ?>" class="form-control">
                    <br>
                    <label>Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?= $d['alamat']  ?>">
                </div>


                <div class="col-md-4" style="margin-left: 10px; ">
                    <label>Alas Hak</label>
                    <input style="margin-bottom :25px;" type="text" name="alas_hak" class="form-control" placeholder="Alas Hak" value="<?= $d['alas_hak']  ?>">
                    <label>Jalan/Gang/Blok</label>
                    <input style="margin-bottom:60px" type="text" name="blok" placeholder="Jalan/Gang/Blok" class="form-control" value="<?= $d['blok']  ?>">
                    
                    <label>Desa/Kelurahan</label>
                    <input type="text" name="desa" placeholder="Desa/Kelurahan" class="form-control" value="<?= $d['desa/kelurahan']  ?>">
                    <br>
                    <label>No. Letter C</label>
                    <input type="text" name="no_letter_c" placeholder="No. Letter C" class="form-control" value="<?= $d['no_letter_c']  ?>">
                    <br>
                    <label>Nama Letter C</label>
                    <input type="text" name="nama_letter_c" value="<?= $d['nama_letter_c']  ?>" placeholder="Nama pada Letter C" class="form-control">
                    <br>
                    <div class="row" style="margin-left: 5px;">
                        <label>No. Persil</label>
                        <input style="margin-left: 90px; width: 167px;" type="text" name="no_persil" placeholder="No. Persil" class="form-control" value="no_persil">
                        <label>Kelas</label>
                        <input style="margin-left: 120px; width: 167px;" type="text" name="kelas" placeholder="Kelas" class="form-control" value="<?= $d['kelas']  ?>">
                    </div>
                </div>
                <div class="col-md-3" style="margin-left: 10px;">

                    <div class="row">

                        <div class="col-md-4">
                            <label>Tanggal</label>
                            <input style="width: 250px;;" type="date" name="tgl_alas" class="form-control" placeholder="Tanggal Alas Hak" value="<?= $d['tgl_alas_hak']  ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 50px;">
                        <label>RT/RW</label>
                        <input style="margin-left: 50px; width: 120px;" type="text" name="rt/rw" placeholder="RT/RW" class="form-control" value="<?= $d['rt/rw']  ?>">
                        <label>Nomor</label>
                        <input style="margin-left: 53px; width: 120px;" type="text" name="no_blok" placeholder="Nomor" class="form-control" value="<?= $d['no_blok']  ?>">
                    </div>
                    <br>
                    <label>Kecamatan</label>
                    <input type="text" name="kecamatan" placeholder="Kecamatan" class="form-control" value="<?= $d['kecamatan']  ?>">
                    <label style="margin-top: 25px;">No. SPPT</label>
                    <input style="  width: 250px;" type="text" name="no_sppt" placeholder="No. SPPT" class="form-control" value="<?= $d['no_sppt']  ?>">


                    <br>
                    <label>Nama SPPT</label>
                    <input type="text" name="nama_sppt" placeholder="Nama pada SPPT" class="form-control" value="<?= $d['nama_sppt']  ?>">
                    <div class="row" style="margin-top: 25px;">
                        <label>Luas</label>
                        <input style="margin-left: 50px;  width: 122px;" type="text" name="luas" placeholder="Luas" class="form-control" value="<?= $d['luas']  ?>">
                        <label>Luas Ukur</label>
                        <input style="margin-left: 10px;   width: 122px;" type="text" name="luas_ukur" placeholder="Luas Ukur" class="form-control" value="<?= $d['luas_ukur']  ?>">
                    </div>
                    <br>

                </div>
                <div class="row" style="margin-left: 40px; margin-top:15px; margin-bottom:10px;">
                    <h5>Batas-Batas Tanah</h5>
                </div>
                <div class="row" style="margin-top: 5px; margin-left:30px; margin-bottom:20px">
                    <div class="col-md-3">
                        <input style="width: 200px;" type="text" class="form-control" name="utara" placeholder="Utara" value="<?= $d['batas_utara']  ?>">
                    </div>
                    <div class="col-md-3">
                        <input style="width: 200px;" type="text" class="form-control" name="selatan" placeholder="Selatan" value="<?= $d['batas_selatan']  ?>">
                    </div>
                    <div class="col-md-3">
                        <input style="width:200px;" type="text" class="form-control" name="timur" placeholder="Timur" value="<?= $d['batas_timur']  ?>">
                    </div>
                    <div class="col-md-3">
                        <input style="width: 200px;" type="text" class="form-control" name="barat" placeholder="Barat" value="<?= $d['batas_barat']  ?>">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px; margin-left:30px">
                <h5>Riwayat Tanah</h5>
            </div>
            <label style="margin-left:30px">Riwayat Penguasaan</label>
            <textarea name="riwayat_penguasaan" placeholder="Riwayat Penguasaan" style="margin-left:30px; resize:none; width: 900px; margin-bottom:10px" class="form-control"><?= $d['riwayat_penguasaan']  ?></textarea>

            <div class="row" style="margin-left:30px">
                <label>Penggunaan Tanah</label>
                <input type="text" name="penggunaan_tanah" style="margin-left:10px; width: 300px; margin-right:20px" placeholder="Penggunaan Tanah" class="form-control" value="<?= $d['penggunaan']  ?>">
                <label>Tanggal Permohonan</label>
                <input type="date" name="tgl_permohonan" style="margin-left:10px; width: 270px;" placeholder="Tanggal Permohonan" class="form-control" value="<?= $d['tgl_permohonan']  ?>">
            </div>

            <div class="row" style="margin-top: 10px; margin-left:30px">
                <h5>Data Pewaris</h5>
            </div>
            <div class="row" style="margin-left: 30px; width:500px; ">
                <label>Nama Pewaris</label>
                <input type="text" style="margin-bottom: 15px;" name="nama_pewaris" id="" placeholder="Nama Pewaris" class="form-control" value="<?= $d['nama_pewaris']  ?>">
                <label>Tahun Meninggal</label>
                <input type="text" style="margin-bottom: 15px;" name="tahun_meninggal" id="" placeholder="Tahun Meninggal" class="form-control" value="<?= $d['tahun_meninggal']  ?>">
                <label>Tempat Meninggal</label>
                <input type="text" style="margin-bottom: 15px;" name="tempat_meninggal" id="" placeholder="Tempat Meninggal" class="form-control" value="<?= $d['tempat_meninggal']  ?>">
                <label>Rencana Penggunaan</label>
                <input type="text" style="margin-bottom: 15px;" name="rencana_penggunaan" id="" placeholder="Rencana Penggunaan" class="form-control" value="<?= $d['rencana_penggunaan']  ?>">
                <div class=" form-group" style="margin-top: 10px; margin-left: 20px; padding-bottom:30px">
                <a href="<?= base_url('Inventarisasi/invTanah'); ?>" class="btn btn-warning">Batal</a>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
            </div>
            
        </form>
    </div>
</div>
<?php endforeach; ?>