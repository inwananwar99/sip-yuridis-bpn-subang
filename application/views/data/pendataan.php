<div class="container-fluid" style="margin-bottom: 273px;">
    <h5 style="margin-left: 30px;"><?= $judul; ?></h5>
    <br>

    <?= $this->session->flashdata('message'); ?><br>
    <a style="margin-left: 30px;" class="btn btn-success" href="#" data-toggle="modal" data-target="#ModalTambah">Tambah</a>
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
                <th colspan="2">Aksi</th>
            </thead>
            <?php
            $no = 1;
            foreach ($pdtn as $d) {
                $id = $d['id_pendataan'];

            ?>
                <tbody>

                    <td><?= $no++; ?></td>
                    <td><?= $d['kecamatan']; ?></td>
                    <td><?= $d['desa']; ?></td>
                    <td><?= $d['estimasi_waktu']; ?> Hari</td>
                    <td><?= $d['jumlah_bidang_tanah']; ?> Bidang</td>
                    <td>
                        <a class="btn btn-primary" href="<?= base_url('Tanah/ubahRekap/' . $d['id_pendataan']) ?>">Ubah</a>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="" data-toggle="modal" data-target="#ModalHapus">Hapus</a>
                    </td>
                </tbody>
            <?php } ?>


        </table>

    </div>
</div>
</div>
<div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="myModalLabel">Input Rekap Pendataan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form class="user" method="post" action="<?= base_url('Tanah/tambahDataRekap'); ?>">

                    <div class="row">
                        <div style="margin-left: 30px; margin-top: 30px; ">
                            <label for="input">Kecamatan</label>
                            <input type="text" name="kecamatan" placeholder="Kecamatan" class="form-control">
                            <br>
                            <label for="input">Desa</label>
                            <input type="text" name="desa" placeholder="Desa" class="form-control">
                            <br>
                            <label>ID Estimasi Waktu</label>
                            <select id="est" onchange="estimasi()" class="form-control">
                                <option>-- ID Estimasi --</option>
                                <?php foreach ($estimasi as $est) : ?>
                                    <option value="<?= $est['id_estimasi']; ?>"><?= $est['id_estimasi'] . ' - ' . $est['hasil_estimasi'] . ' Hari'; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <input type="hidden" name="ids" id="esti" readonly="" class="form-control">
                            <br>
                            <label>Estimasi Waktu</label>
                            <input type="text" name="estim" class="form-control">
                            <br>
                            <label>Jumlah Bidang Tanah</label>
                            <input type="text" name="jumlah_bidang" placeholder="Jumlah Bidang Tanah" class="form-control">
                            <br>
                            <a href="<?= base_url('Tanah/detilPendataan'); ?>" class="btn btn-warning">Batal</a>
                            <button class="btn btn-success" type="submit">Simpan</button>

                </form>

            </div>
        </div>
    </div>