<div class="container-fluid">
    <h2>Tambah Permohonan Tanah</h2>
    <br>
    <div style="background-color: lightgrey; border-radius: 10px; background-position: center; ">
        <form style="margin-left: 30px;" class="user" method="post" action="<?= base_url('Tanah/tambahDataPermohonan'); ?>">
            <div class="row">
                <div class="col-md-3" style="margin-left: 30px; margin-bottom:30px; margin-top:15px; ">
                    <?php foreach([$admin] as $adm) : ?>
                    <input type="hidden" name="id_adm" value="<?= $adm['id_admin']; ?>">
                    <?php endforeach; ?>
                    <label>NIS</label>
                    <select name="nis" style="width: 120px;" name="nis" class="form-control">
                        <option>-- NIS --</option>
                        <?php
                        $nis = $this->db->query("SELECT nis FROM tanah")->result_array();
                         foreach($nis as $d) :
                         ?>
                        <option><?= $d['nis']; ?></option>
                    <?php endforeach; ?>
                    </select>
                    
                </div>
                <div class="col-md-3" style="margin-top:15px;">
                    <label>No. Berkas</label>
                    <input style="width: 120px;" type="text" name="no_berkas" class="form-control" placeholder="No. Berkas">
                </div>
                <div class="col-md-3" style="margin-top:15px;">
                    <label>No. Register</label>
                    <input style="width: 120px;" type="text" name="no_register" class="form-control" placeholder="No. Register">
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
                    <input type="text" name="nama_pemohon" placeholder="Nama Pemohon" class="form-control">
                    <br>
                    <label>Tempat Tanggal Lahir</label>
                    <input type="text" name="tempat" placeholder="Tempat" class="form-control">
                    <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control">
                    <br>
                    <label>Umur</label>
                    <input type="text" name="umur" placeholder="Umur" class="form-control">
                    <br>
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control">
                    <br>
                    <label>No. KTP</label>
                    <input type="text" name="no_ktp" placeholder="No. KTP" class="form-control">
                    <br>
                    <label>Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                </div>


                <div class="col-md-4" style="margin-left: 10px; ">
                    <label>Alas Hak</label>
                    <input style="margin-bottom :25px;" type="text" name="alas_hak" class="form-control" placeholder="Alas Hak">
                    <label>Jalan/Gang/Blok</label>
                    <input style="margin-bottom:60px" type="text" name="blok" placeholder="Jalan/Gang/Blok" class="form-control">
                    
                    <label>Desa/Kelurahan</label>
                    <input type="text" name="desa" placeholder="Desa/Kelurahan" class="form-control">
                    <br>
                    <label>No. Letter C</label>
                    <input type="text" name="no_letter_c" placeholder="No. Letter C" class="form-control">
                    <br>
                    <label>Nama Letter C</label>
                    <input type="text" name="nama_letter_c" placeholder="Nama pada Letter C" class="form-control">
                    <br>
                    <div class="row" style="margin-left: 5px;">
                        <label>No. Persil</label>
                        <input style="margin-left: 90px; width: 167px;" type="text" name="no_persil" placeholder="No. Persil" class="form-control">
                        <label>Kelas</label>
                        <input style="margin-left: 120px; width: 167px;" type="text" name="kelas" placeholder="Kelas" class="form-control">
                    </div>
                </div>
                <div class="col-md-3" style="margin-left: 10px;">

                    <div class="row">

                        <div class="col-md-4">
                            <label>Tanggal</label>
                            <input style="width: 250px;;" type="date" name="tgl_alas" class="form-control" placeholder="Tanggal Alas Hak">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 50px;">
                        <label>RT/RW</label>
                        <input style="margin-left: 50px; width: 120px;" type="text" name="rt/rw" placeholder="RT/RW" class="form-control">
                        <label>Nomor</label>
                        <input style="margin-left: 53px; width: 120px;" type="text" name="no_blok" placeholder="Nomor" class="form-control">
                    </div>
                    <br>
                    <label>Kecamatan</label>
                    <input type="text" name="kecamatan" placeholder="Kecamatan" class="form-control">
                    <label style="margin-top: 25px;">No. SPPT</label>
                    <input style="  width: 250px;" type="text" name="no_sppt" placeholder="No. SPPT" class="form-control">


                    <br>
                    <label>Nama SPPT</label>
                    <input type="text" name="nama_sppt" placeholder="Nama pada SPPT" class="form-control">
                    <div class="row" style="margin-top: 25px;">
                        <label>Luas</label>
                        <input style="margin-left: 50px;  width: 122px;" type="text" name="luas" placeholder="Luas" class="form-control">
                        <label>Luas Ukur</label>
                        <input style="margin-left: 10px;   width: 122px;" type="text" name="luas_ukur" placeholder="Luas Ukur" class="form-control">
                    </div>
                    <br>

                </div>
                <div class="row" style="margin-left: 40px; margin-top:15px; margin-bottom:10px;">
                    <h5>Batas-Batas Tanah</h5>
                </div>
                <div class="row" style="margin-top: 5px; margin-left:30px; margin-bottom:20px">
                    <div class="col-md-3">
                        <input style="width: 200px;" type="text" class="form-control" name="utara" placeholder="Utara">
                    </div>
                    <div class="col-md-3">
                        <input style="width: 200px;" type="text" class="form-control" name="selatan" placeholder="Selatan">
                    </div>
                    <div class="col-md-3">
                        <input style="width:200px;" type="text" class="form-control" name="timur" placeholder="Timur">
                    </div>
                    <div class="col-md-3">
                        <input style="width: 200px;" type="text" class="form-control" name="barat" placeholder="Barat">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px; margin-left:30px">
                <h5>Riwayat Tanah</h5>
            </div>
            <label style="margin-left:30px">Riwayat Penguasaan</label>
            <textarea name="riwayat_penguasaan" placeholder="Riwayat Penguasaan" style="margin-left:30px; resize:none; width: 900px; margin-bottom:10px" class="form-control"></textarea>

            <div class="row" style="margin-left:30px">
                <label>Penggunaan Tanah</label>
                <input type="text" name="penggunaan_tanah" style="margin-left:10px; width: 300px; margin-right:20px" placeholder="Penggunaan Tanah" class="form-control">
                <label>Tanggal Permohonan</label>
                <input type="date" name="tgl_permohonan" style="margin-left:10px; width: 270px;" placeholder="Tanggal Permohonan" class="form-control">
            </div>

            <div class="row" style="margin-top: 10px; margin-left:30px">
                <h5>Data Pewaris</h5>
            </div>
            <div class="row" style="margin-left: 30px; width:500px; ">
                <label>Nama Pewaris</label>
                <input type="text" style="margin-bottom: 15px;" name="nama_pewaris" id="" placeholder="Nama Pewaris" class="form-control">
                <label>Tahun Meninggal</label>
                <input type="text" style="margin-bottom: 15px;" name="tahun_meninggal" id="" placeholder="Tahun Meninggal" class="form-control">
                <label>Tempat Meninggal</label>
                <input type="text" style="margin-bottom: 15px;" name="tempat_meninggal" id="" placeholder="Tempat Meninggal" class="form-control">
                <label>Rencana Penggunaan</label>
                <input type="text" style="margin-bottom: 15px;" name="rencana_penggunaan" id="" placeholder="Rencana Penggunaan" class="form-control">
                <div class=" form-group" style="margin-top: 10px; margin-left: 20px; padding-bottom:30px">
                <a href="<?= base_url('Tanah/prmTanah'); ?>" class="btn btn-warning">Batal</a>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
            </div>
            
        </form>
    </div>
</div>