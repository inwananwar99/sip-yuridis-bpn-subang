<!DOCTYPE html>
<html>

<head>
    <title><?= $judul; ?></title>
</head>

<body>
    <h5 style="margin-left: 30px;"><?= $judul; ?></h5>
    <br>

    <?= $this->session->flashdata('message'); ?><br>
    <a style="margin-left: 30px;" class="btn btn-success" href="<?= base_url('Tanah/tambahPermohonan'); ?>">Tambah</a>
    <br>
    <br>
    <div class="table table-responsive" style="margin-bottom: 203px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable" style="text-align:center; margin-left: 30px; margin-right: 30px;">
            <thead align="center;">

                <th>No.</th>
                <th>NIS</th>
                <th>No. Berkas</th>
                <th>No. Register</th>
                <th>Nama Pemohon</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Umur</th>
                <th>Pekerjaan</th>
                <th>No. KTP</th>
                <th>Alamat</th>
                <th>Alas Hak</th>
                <th>Tanggal Alas Hak</th>
                <th>Jalan/Gang/Blok</th>
                <th>Desa</th>
                <th>No. Letter C</th>
                <th>Nama Letter C</th>
                <th>No. Persil</th>
                <th>Kelas</th>
                <th>RT/RW</th>
                <th>Kecamatan</th>
                <th>No. SPPT</th>
                <th>Nama di SPPT</th>
                <th>Luas</th>
                <th>No. Blok</th>
                <th>Luas Ukur</th>
                <th>Batas Utara</th>
                <th>Batas Selatan</th>
                <th>Batas Timur</th>
                <th>Batas Barat</th>
                <th>Riwayat Penguasaan</th>
                <th>Penggunaan</th>
                <th>Tanggal Permohonan</th>
                <th>Nama Pewaris</th>
                <th>Tahun Meninggal</th>
                <th>Tempat Meninggal</th>
                <th>Rencana Penggunaan</th>
                <th colspan="3">Aksi</th>
            </thead>

            <tbody>
                <?php
                if (!empty($permohonan)) {
                    $no = 1;
                    foreach ($permohonan as $d) {
                        $id = $d['id_permohonan'];

                ?>
                        <td><?= $no++; ?></td>
                        <td><?= $d['nis']; ?></td>
                        <td><?= $d['no_berkas']; ?></td>
                        <td><?= $d['no_register']; ?></td>
                        <td><?= $d['pemohon']; ?></td>
                        <td><?= $d['tempat'] . $d['tgl_lahir']; ?></td>
                        <td><?= $d['umur']; ?></td>
                        <td><?= $d['pekerjaan']; ?></td>
                        <td><?= $d['no_ktp']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                        <td><?= $d['alas_hak']; ?></td>
                        <td><?= $d['tgl_alas_hak']; ?></td>
                        <td><?= $d['blok']; ?></td>
                        <td><?= $d['desa/kelurahan']; ?></td>
                        <td><?= $d['no_letter_c']; ?></td>
                        <td><?= $d['nama_letter_c']; ?></td>
                        <td><?= $d['no_persil']; ?></td>
                        <td><?= $d['kelas']; ?></td>
                        <td><?= $d['rt/rw']; ?></td>
                        <td><?= $d['kecamatan']; ?></td>
                        <td><?= $d['no_sppt']; ?></td>
                        <td><?= $d['nama_sppt']; ?></td>
                        <td><?= $d['luas']; ?></td>
                        <td><?= $d['no_blok']; ?></td>
                        <td><?= $d['luas_ukur']; ?></td>
                        <td><?= $d['batas_utara']; ?></td>
                        <td><?= $d['batas_selatan']; ?></td>
                        <td><?= $d['batas_timur']; ?></td>
                        <td><?= $d['batas_barat']; ?></td>
                        <td><?= $d['riwayat_penguasaan']; ?></td>
                        <td><?= $d['penggunaan']; ?></td>
                        <td><?= $d['tgl_permohonan']; ?></td>
                        <td><?= $d['nama_pewaris']; ?></td>
                        <td><?= $d['tahun_meninggal']; ?></td>
                        <td><?= $d['tempat_meninggal']; ?></td>
                        <td><?= $d['rencana_penggunaan']; ?></td>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="<?= base_url('Tanah/ubahPermohonan/' . $d['id_permohonan']); ?>">Ubah</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="#" data-toggle="modal" data-target="#ModalHapus<?= $id; ?>">Hapus</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="" data-toggle="modal" data-target="#ModalCetak<?= $id;?>">Cetak</a>
                        </td>

            </tbody>
    <?php }
                } else { // Jika data tidak ada
                    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
                }
    ?>
        </table>

    </div>

    <?php foreach ($permohonan as $d) :
        $id = $d['id_permohonan'];
    ?>

        <div class="modal fade" id="ModalHapus<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

                    </div>
                    <div class="modal-body">
                        <h5>Apakah anda yakin ingin menghapus data permohonan tanah dengan NIS <?= $d['nis'];  ?> ?</h5>
                    </div>

                    <div class="modal-footer">
                        <a href="<?= base_url('Tanah/hapusPermohonan/' . $d['id_permohonan']); ?>" class="btn btn-warning">Hapus</a>
                        <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Tutup</button>

                    </div>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
    <?php foreach ($permohonan as $d) :
        $id = $d['id_permohonan'];
    ?>

        <div class="modal fade" id="ModalCetak<?= $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Konfirmasi Cetak</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

                    </div>
                    <div class="modal-body">
                        <h5>Apakah anda yakin ingin mencetak data permohonan dengan NIS <?= $d['nis'];  ?> ?</h5>
                    </div>

                    <div class="modal-footer">
                        <a href="<?= base_url('Tanah/cetakPrm/'.$id)?>" class="btn btn-warning" target="_blank">Cetak</a>
                        <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Tutup</button>

                    </div>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach; ?> 
</body>


</html>