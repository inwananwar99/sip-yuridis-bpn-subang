<!DOCTYPE html>
<html>

<head>
    <title><?= $title_pdf; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
    <div style="text-align:center">
        <h3>Data Inventarisasi Tanaman</h3>
    </div>
    <h4>A. Pemilik Tanaman</h4>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>NIS</th>
                <th>Desa</th>
                <th>RT/RW</th>
                <th>Nama Pemilik Tanaman</th>
                <th>Tempat</th>
                <th>Tanggal Lahir</th>
                <th>No. KTP</th>
                <th>Pekerjaan</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($invTanaman as $d) {


        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d['nis']; ?></td>
                <td><?= $d['desa']; ?></td>
                <td><?= $d['rtrw']; ?></td>
                <td><?= $d['nama']; ?></td>
                <td><?= $d['tempat']; ?></td>
                <td><?=$d['tgl_lahir'] ?></td>
                <td><?= $d['no_ktp']; ?></td>
                <td><?= $d['pekerjaan']; ?></td>
                <td><?= $d['alamat']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <hr><br>
    <h4>B. Pemilik Tanah</h4>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>Nama Pemilik Tanah</th>
                <th>Kavling</th>
                <th>Luas</th>
                <th>Desa/Kecamatan</th>
                <th>Alas Hak</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($invTanaman as $d) {


        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d['nama_pemilik_tanah']; ?></td>
                <td><?= $d['kavling/blok']; ?></td>
                <td><?= $d['luas']; ?></td>
                <td><?= $d['kecamatan']; ?></td>
                <td><?= $d['alas_hak']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <hr><br>
    <h4>C. Keadaan Tanah</h4>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>Jenis Tanaman</th>
                <th>Ukuran</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($invTanaman as $d) {


        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d['jenis_tanaman']; ?></td>
                <td><?= $d['ukuran']; ?></td>
                <td><?= $d['jumlah']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <hr><br>


    </div>


</body>


</html>