<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
    <div class="row" style="margin-bottom:10px;">
        <div class="col-md-8">
            <img align="left" width="110px" height="110px" style="margin-right: 30px" src="<?= base_url(); ?>assets/img/Lambang_Kabupaten_Subang.jpeg">
            <?php foreach ([$bukti] as $data) : ?>
                <strong>
                    <h4 style="font-size: 24pt;">DESA <?= $data['desa']; ?></h4>
                </strong>
            <?php endforeach; ?>
        </div>
    </div>
    <hr style="color:black" size="5px">
    <div style="text-align:center">
        <h3>Bukti Pengajuan</h3>
    </div>

    <?php
    foreach ([$bukti] as $d) : ?>
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <td>Tanggal Pengajuan</td>
                        <td> <strong><?= ':   ' . date($d['tgl_pengajuan']); ?></strong></td>
                    </tr>
                    <tr>
                        <td>Nama Petugas Desa</td>
                        <td> <strong><?= ':   ' . $d['nama'] ?></strong></td>
                    </tr>

                    <tr>
                        <td>Nama Pemilik Tanah</td>
                        <td> <strong><?= ':   ' . $d['nama_pemilik'] ?></strong></td>
                    </tr>
                    <tr>
                        <td>Pesan Pengajuan</td>
                        <td> <strong><?= ':   ' . $d['pesan_pengajuan'] ?></strong></td>
                    </tr>
                    <tr>
                        <td>Data Pengajuan</td>
                        <td><strong><?= ':   ' . $d['data_pengajuan']; ?></strong></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <table style="margin-top:100px;">

                <tr>
                    <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petugas Desa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemilik Tanah <br><br><br><br><br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...................... &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;......................</strong></td>

                </tr>
            </table>
        </div>

    <?php endforeach; ?>

</body>

</html>