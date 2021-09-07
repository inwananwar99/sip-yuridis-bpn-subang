<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
       <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css') ?>"/>
    </head>
    <body>
        <div style="text-align:center">
            <h3>Data Inventarisasi Tanah</h3>
        </div>
        <h4>A. Letak Tanah</h4>
        <table class="table">
             <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Blok</th>
                <th>RT/RW</th>
                <th>NIS</th>
            </tr>
        </thead>
            <?php
              $no = 1;
                foreach ($invTanah as $d) {

                
                ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $d['kecamatan']; ?></td>
                <td><?= $d['desa']; ?></td>
                <td><?= $d['blok']; ?></td>
                <td><?= $d['rt/rw']; ?></td>
                <td><?= $d['nis']; ?></td>
            </tr>
        <?php } ?>
        </table><hr><br>
        <h4>B. Identitas Pemilik</h4>
        <table class="table">
             <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>Nama Pemilik</th>
                <th>NIK Pemilik</th>
              
            </tr>
        </thead>
            <?php
              $no = 1;
                foreach ($invTanah as $d) {

                
                ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $d['nama_pemilik']; ?></td>
                <td><?= $d['nik_pemilik']; ?></td>
              
            </tr>
        <?php } ?>
        </table><hr><br>
        <h4>C. Identitas Penggarap</h4>
        <table class="table">
             <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>Nama Penggarap</th>
                <th>NIK Penggarap</th>
                <th>Status Garapan</th>
              
            </tr>
        </thead>
            <?php
              $no = 1;
                foreach ($invTanah as $d) {

                
                ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $d['nama_penggarap']; ?></td>
                <td><?= $d['nik_penggarap']; ?></td>
                <td><?= $d['status_penggarap']; ?></td>
              
            </tr>
        <?php } ?>
        </table><hr><br>
        <h4>D. Data Tanah</h4>
        <h5>1. Status Tanah</h5>
        <table class="table">
             <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>SHM</th>
                <th>No. SHM</th>
                <th>No. SPPT</th>
                <th>Kelas</th>
                <th>Atas Nama</th>
                <th>AJB/Hibah/Pembagian</th>
                <th>Tanggal AJB</th>
              <th>No. AJB</th>
              <th>Bukti Garapan</th>
              <th>Tanggal Garapan</th>
               <th> Nomor Garapan</th> 
                <th>Luas Tanah</th>
            </tr>
        </thead>
            <?php
              $no = 1;
                foreach ($invTanah as $d) {

                
                ?>
            <tr>
                <td><?= $no++ ?></td>
                 <td><?= $d['shm']; ?></td>
                    <td><?= $d['no_shm']; ?></td>
                    <td><?= $d['no_sppt']; ?></td>
                    <td><?= $d['kelas']; ?></td>
                    <td><?= $d['atas_nama']; ?></td>
                    <td><?= $d['ajb/hibah/pembagian']; ?></td>
                    <td><?= $d['tgl_ajb']; ?></td>
                    <td><?= $d['no_ajb']; ?></td>
                    <td><?= $d['bukti_garapan']; ?></td>
                    <td><?= $d['tgl_garapan']; ?></td>
                    <td><?= $d['no_garapan']; ?></td>
                    <td><?= $d['luas_tanah']; ?></td>
              
            </tr>
        <?php } ?>
        </table> <hr><br> 
        <h5>2. Luas Tanah</h5>
        <table class="table">
             <thead class="thead-dark">
            <tr>
                <th>No.</th>
               <th>Luas Tanah</th>
            </tr>
        </thead>
            <?php
              $no = 1;
                foreach ($invTanah as $d) {
                ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $d['luas_tanah']; ?></td>
              
            </tr>
        <?php } ?>
        </table>  
                
    </body>
</html>