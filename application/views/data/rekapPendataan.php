<body>
    <div class="container-fluid" style="margin-bottom: 336px;">
        <h5 style="margin-left: 30px;"><?= $judul; ?></h5>
        <br>

        <?= $this->session->flashdata('message'); ?><br>
        <a style="margin-left: 30px;" class="btn btn-success" href="#" data-toggle="modal" data-target="#ModalCetak">Cetak</a>
        <br>
        <br>
        <div class="table" style="margin-bottom: 110px;">
            <table id="dataTable" style="margin-left: 30px; margin-right: 30px;">
                <thead align="center;">

                    <th>No.</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    <th>Estimasi Waktu</th>
                    <th>Jumlah Bidang Tanah</th>
                </thead>
                <?php
                $no = 1;
                foreach ($pendataan as $d) {

                ?>
                    <tbody>

                        <td><?= $no++; ?></td>
                        <td><?= $d['kecamatan']; ?></td>
                        <td><?= $d['desa']; ?></td>
                        <td><?= $d['estimasi_waktu']; ?> Hari</td>
                        <td><?= $d['jumlah_bidang_tanah']; ?> Orang</td>

                    </tbody>
                <?php } ?>


            </table>

        </div>
    </div>
    <?php foreach ([$pendataan] as $d) :

    ?>

        <div class="modal fade" id="ModalCetak" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Konfirmasi Cetak</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

                    </div>
                    <div class="modal-body">
                        <h5>Apakah anda yakin ingin mencetak rekap pendataan?</h5>
                    </div>

                    <div class="modal-footer">
                        <a href="<?= base_url('Tanah/cetakRekap/'); ?>" class="btn btn-warning" target="_blank">Cetak</a>
                        <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Tutup</button>

                    </div>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</body>