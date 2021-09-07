<div class="row" style="margin-left: 30px; margin-bottom:20px;">
    <h5></h5>
</div>
<div class="row">

    <div class="col-md-3">
        <a style="margin-left: 30px;" class="btn btn-success" href="<?= base_url('Inventarisasi/tambahInvBangunan'); ?>">Tambah</a>
    </div>
    <div class="col-md-3" style="margin-left: 500px;">
        <?= form_open('Inventarisasi/cariBangunan') ?>
        <input type="text" name="katakunci" class="form-control" placeholder="Cari berdasarkan NIS/Blok/Nama" autofocus="">
        <div style="margin-top: 10px; margin-left:130px">
            <button type="submit" id="btn-search" class="btn btn-primary">Cari</button>
            <a class="btn btn-warning" href="<?php echo base_url('index.php/Inventarisasi/invBangunan'); ?>">Reset</a>
        </div>
        <?= form_close() ?>

    </div>
</div>

<?= $this->session->flashdata('message'); ?><br>

<div class="table table-responsive" style="margin-bottom: 162px;">
    <table class="table table-striped table-bordered w-100 dt-responsive nowrap" id="dataTable" style="margin-left: 30px; margin-right: 30px;">
        <thead align="center;">
            <tr>
                <th>No.</th>
                <th>NIS</th>
                <th>Desa</th>
                <th>RT/RW</th>
                <th>Nama Pemilik Bangunan</th>
                <th>Tempat Tanggal Lahir</th>
                <th>No. KTP</th>
                <th>Pekerjaan</th>
                <th>Alamat</th>
                <th>Nama Pemilik Tanah</th>
                <th>Kavling</th>
                <th>Luas</th>
                <th>Kecamatan</th>
                <th>Jenis Konstruksi</th>
                <th>Luas Bangunan</th>
                <th>Kelas Kontruksi</th>
                <th>Kondisi</th>
                <th colspan="2">Aksi</th>
        </thead>
        </tr>
        <tbody>
            <?php

            if (!empty($invBangunan)) {
                $no = $this->uri->segment('3') + 1;
                foreach ($invBangunan as $d) {
            ?><tr>

                        <td><?= $no++; ?></td>
                        <td><?= $d['nis']; ?></td>
                        <td><?= $d['desa']; ?></td>
                        <td><?= $d['rtrw']; ?></td>
                        <td><?= $d['nama_pemilik_bangunan']; ?></td>
                        <td><?= $d['ttl']; ?></td>
                        <td><?= $d['no_ktp']; ?></td>
                        <td><?= $d['pekerjaan']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                        <td><?= $d['nama_pemilik_tanah']; ?></td>
                        <td><?= $d['kavling']; ?></td>
                        <td><?= $d['luas']; ?></td>
                        <td><?= $d['kecamatan']; ?></td>
                        <td><?= $d['jenis_konstruksi']; ?></td>
                        <td><?= $d['luas_bangunan']; ?></td>
                        <td><?= $d['kelas_konstruksi']; ?></td>
                        <td><?= $d['kondisi']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="<?= base_url('Inventarisasi/ubahInvBangunan/' . $d['id_bangunan']); ?>">Ubah</a>

                        </td>
                        <td>
                            <a class="btn btn-warning" href="" data-toggle="modal" data-target="#ModalHapus">Hapus</a>
                        </td>
                <?php }
            } else { // Jika data tidak ada
                echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
            }

                ?>
                    </tr>
        </tbody>

    </table><br>
    <nav class="pagination" aria-label="Page navigation" style="margin-left: 30px;">

        <?php
        echo $this->pagination->create_links();
        ?>

    </nav>

</div>
<?php
foreach ($invBangunan as $d) {

?>
    <!-- Modal Hapus Produk-->
    <form id="add-row-form" action="<?= base_url() . 'Inventarisasi/hapusInvBangunan/' . $d['id_bangunan'] ?>">
    <?php } ?>
    <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">


                    <strong>Apakah anda yakin ingin menghapus data ini?</strong>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" id="add-row" class="btn btn-success">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    </form>

    </body>


    </html>