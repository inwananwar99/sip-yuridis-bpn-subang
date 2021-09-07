<div class="container-fluid">

    <h5 style="margin-left: 30px;"><?= $judul; ?></h5>
    <br>
    <div class="row">
        <div class="col-md-3" style="margin-left: 800px;">
            <?= form_open('Tanah/cariPengajuan'); ?>
            <input type="text" name="katakunci" class="form-control" placeholder="Cari berdasarkan NIS/Nama Pemilik" autofocus="">
            <div style="margin-top: 10px; margin-left:100px">
                <button type="submit" id="btn-search" class="btn btn-primary">Cari</button>
                <a class="btn btn-warning" href="<?php echo base_url('Tanah/pengajuanValidasi'); ?>">Reset</a>
            </div>
            <?= form_close() ?>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?><br>


    <div class="table table-responsive" style="margin-bottom: 207px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable" style="margin-left: 30px; margin-right: 30px;">
            <thead align="center;">

                <th>No.</th>
                <th>NIS</th>
                <th>Nama Pemilik Tanah</th>
                <th>Jenis Data Tanah</th>
                <th>Nama Petugas Desa</th>
                <th>Data Pengajuan</th>
                <th>Status Pengajuan</th>
                <th>Tanggal Pengajuan</th>
                <th colspan="2">Aksi</th>
            </thead>

            <tbody>
                <?php
                if (!empty($pengajuan)) {
                    $no = 1;
                    foreach ($pengajuan as $d) {
                        $id = $d['id_pengajuan'];
                ?>
                        <td><?= $no++; ?></td>
                        <td><?= $d['nis']; ?></td>
                        <td><?= $d['nama_pemilik']; ?></td>
                        <td><?= $d['jenis_data_tanah']; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['data_pengajuan']; ?></td>
                        <td><?= $d['status_pengajuan']; ?></td>
                        <td><?= $d['tgl_pengajuan']; ?></td>


                        </td>
                        <td>
                            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#ModalStatus<?= $id; ?>">Ubah</a>

                        </td>
                        <td>
                            <a class="btn btn-warning" href="#" data-toggle="modal" data-target="#ModalHapus<?= $id; ?>">Hapus</a>
                        </td>

            </tbody>
    <?php }
                } else { // Jika data tidak ada
                    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
                }
    ?>
        </table>

    </div>
</div>
<?php foreach ($pengajuan as $pen) :
    $id = $pen['id_pengajuan'];
?>

    <div class="modal fade" id="ModalStatus<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Status Pengajuan</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

                </div>
                <div class="col-md-8">

                    <table class="table">
                        <tr>
                            <td>Pesan Pengajuan</td>
                            <td><strong><?= $pen['pesan_pengajuan'] ?></strong></td>
                        </tr>

                        <tr>
                            <td>Tanggal Pengajuan</td>
                            <td><strong><?= $pen['tgl_pengajuan'] ?></strong></td>
                        </tr>
                        <tr>
                            <td>Status Pengajuan</td>
                            <form method="post" action="<?= base_url('Tanah/ubahDataPengajuan/' . $id); ?>">

                                <td>
                                <?php foreach([$admin] as $adm): ?>
                                    <input type="hidden" name="id_adm" value="<?= $adm['id_admin']; ?>">
                                <?php endforeach; ?>
                                    <select name="status" class="form-control" style="width:300px">
                                        <option><?= $pen['status_pengajuan']; ?></option>
                                        <option>Belum diproses</option>
                                        <option>Sedang diproses</option>
                                        <option>Selesai diproses</option>
                                    </select>
                                </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Tutup</button>

                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
    <?php foreach ($pengajuan as $pen) :
        $id = $pen['id_pengajuan'];
    ?>

        <div class="modal fade" id="ModalHapus<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

                    </div>
                    <div class="modal-body">
                        <h5>Apakah anda yakin ingin menghapus data pengajuan dengan NIS <?= $pen['nis'];  ?> ?</h5>
                    </div>

                    <div class="modal-footer">
                        <a href="<?= base_url('Tanah/hapusPengajuan/' . $pen['id_pengajuan']); ?>" class="btn btn-warning">Hapus</a>
                        <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Tutup</button>

                    </div>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach; ?>