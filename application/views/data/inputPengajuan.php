<div class="container-fluid">
    <h2><?= $judul ?></h2>
    <br>
    <?= $this->session->flashdata('message'); ?>
    <div style="background-color: lightgrey; border-radius: 10px;margin-bottom:147px;">
        <form class="user" method="post" action="<?= base_url('Tanah/inputDataPengajuan'); ?>" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-3" style="margin-left: 30px; margin-top: 30px; ;">
                    <?php foreach ([$pengguna] as $pemdes) : ?>
                        <input type="hidden" name="id_pemdes" value="<?= $pemdes['id_pemdes']; ?>">
                    <?php endforeach; ?>
                    <input type="hidden" name="status" value="Belum diproses">
                    <div class="form-group row">
                        <label for="input">NIS Pemilik Tanah</label>
                        <div class="col-sm-10">
                            <select name="nis" id="" class="form-control" style="width: 250px">
                                <option>-- NIS Pemilik Tanah --</option>
                                <?php $query = $this->db->query("SELECT * from tanah")->result_array();
                                foreach ($query as $q) {
                                ?>
                                    <option value="<?= $q['nis'] ?>"><?= $q['nis'] . ' - ' . $q['nama_pemilik']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="input">Jenis Data</label>
                        <div class="col-sm-10">
                            <select name="bidang" id="" class="form-control" style="width: 250px">
                                <option>-- Jenis Data Bidang Tanah --</option>
                                <option>Inventarisasi Tanah</option>
                                <option>Inventarisasi Tanaman</option>
                                <option>Inventarisasi Bangunan</option>
                                <option>Permohonan Tanah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input">Perihal Validasi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="perihal" style="width: 250px">
                    </textarea>
                        </div>
                    </div>

                </div>
                <div class="col-md-3" style=" margin-top: 30px;">
                    <div class="form-group row">

                        <label for="data">Data Bukti Pengajuan</label>
                        <div class="col-sm-10">
                            <input style="width: 250px" type="file" class="form-control" class="custom-file-input" id="data" name="data">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input">Tanggal Pengajuan</label>
                        <div class="col-sm-10">
                            <input style="width: 250px" type="date" name="tgl" class="form-control">
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 50px;">
                        <a href="<?= base_url('Tanah/inputDataPengajuan'); ?>" class="btn btn-warning">Batal</a>
                        <button class="btn btn-primary" type="submit">Simpan</button>

                    </div>
                </div>
                <div class="col-md-3">
                    <h5 style="margin-top: 30px;">Jumlah Data Pengajuan : <?= $this->db->get('pengajuan')->num_rows(); ?></h5>
                </div>
            </div>
    </div>
</div>