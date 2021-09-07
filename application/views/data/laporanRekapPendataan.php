<title><?= $title_pdf; ?></title>
<h4><?= $title_pdf; ?></h4>


        <table class="table" style="margin-left: 30px; margin-right: 30px;">
            <tr align="center;">

                <th>No.</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Estimasi Waktu</th>
                <th>Jumlah Bidang Tanah</th>
            </tr>
            <?php
            $no = 1;
            foreach ($pendataan as $d) {


            ?>
                <tr>

                    <td><?= $no++; ?></td>
                    <td><?= $d['kecamatan']; ?></td>
                    <td><?= $d['desa']; ?></td>
                    <td><?= $d['estimasi_waktu']; ?> Hari</td>
                    <td><?= $d['jumlah_bidang_tanah']; ?> Orang</td>
                 
                </tr>
            <?php } ?>


        </table>