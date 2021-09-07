<!DOCTYPE html>
<html>

<head>
    <title><?= $title_pdf; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
    <div style="text-align:center">
        <h3>Data Inventarisasi Bangunan</h3>
    </div>
    <h4>A. Pemilik Bangunan</h4>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>Desa</th>
                <th>RT/RW</th>
                <th>Nama Pemilik Bangunan</th>
                <th>Tempat Tanggal Lahir</th>
                <th>No. KTP</th>
                <th>Pekerjaan</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($invBangunan as $d) {


        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d['desa']; ?></td>
                <td><?= $d['rtrw']; ?></td>
                <td><?= $d['nama_pemilik_bangunan']; ?></td>
                <td><?= $d['ttl']; ?></td>
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
                <th>Kecamatan</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($invBangunan as $d) {


        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d['nama_pemilik_tanah']; ?></td>
                <td><?= $d['kavling']; ?></td>
                <td><?= $d['luas']; ?></td>
                <td><?= $d['kecamatan']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <hr><br>
    <h4>C. Keadaan Bangunan</h4>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>Jenis Konstruksi</th>
                <th>Luas Bangunan</th>
                <th>Kelas Kontruksi</th>
                <th>Kondisi</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($invBangunan as $d) {


        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d['jenis_konstruksi']; ?></td>
                <td><?= $d['luas_bangunan']; ?></td>
                <td><?= $d['kelas_konstruksi']; ?></td>
                <td><?= $d['kondisi']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <hr><br>


    </div>


</body>


</html>