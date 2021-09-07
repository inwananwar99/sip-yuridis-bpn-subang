<?php foreach ([$pendataan] as $pen) :
        $id = $pen['id_pendataan'];
    ?>
    <div class="container" style="margin-bottom:210px">
                <h5 >Ubah Rekap Pendataan</h5>
            
           

                <form class="user" method="post" action="<?= base_url('Tanah/ubahDataRekap'); ?>">

                    <div class="row">
                        <div style="margin-left: 30px; ">
                            <input type="hidden" name="id" value="<?= $id; ?>">
                            <label>Kecamatan</label>
                            <input type="text" name="kecamatan" placeholder="Kecamatan" class="form-control" value="<?= $pen['kecamatan']; ?>">
                            <br>
                            <label>Desa</label>
                            <input type="text" name="desa" placeholder="Desa" class="form-control" value="<?= $pen['desa']; ?>">
                            <br>
                            <label>Estimasi Waktu</label>
                            <input type="text" name="estimasi" placeholder="Estimasi" class="form-control" value="<?= $pen['estimasi_waktu']; ?>">
                            <br>
                            <label>Jumlah Petugas</label>
                            <input type="text" name="jumlah" placeholder="Jumlah Petugas" class="form-control" value="<?= $pen['jumlah_petugas']; ?>">
                            <br>
                            <label>Jumlah Bidang Tanah</label>
                            <input type="text" name="jumlah_bidang" placeholder="Jumlah Bidang" class="form-control" value="<?= $pen['jumlah_bidang_tanah']; ?>">
                            <br>
                            <a href="<?= base_url('Tanah/rekapPendataan'); ?>" class="btn btn-warning">Batal</a>
                            <button class="btn btn-success" type="submit">Simpan</button>

                </form>
</div>
        
 <?php endforeach; ?>
 </div>
</div>