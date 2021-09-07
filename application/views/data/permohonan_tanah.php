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
        
    </div>
    <hr style="color:black" size="5px">
    <div style="text-align:center">
        <h3>Data Permohonan Tanah</h3>
    </div>

    <?php
    foreach ([$permohonan] as $d) : ?>
        <div class="row">
        <div class="col-md-8">
            <table class="table">
                <tr>
                    <td>NIS</td>
                    <td> <strong><?= ':   ' . $d['nis']; ?></strong></td>
                    <td>Tanggal Permohonan</td>
                    <td> <strong><?= ':   ' . $d['tgl_permohonan']; ?></strong></td>
                </tr>
                <tr>
                    <td>Nama Pemohon</td>
                    <td> <strong><?= ':   ' . $d['pemohon'] ?></strong></td>
                </tr>

                <tr>
                    <td>Alamat Tanah</td>
                    <td> <strong><?= ':   ' . $d['alamat'] ?></strong></td>
                </tr>
               
               
            </table>
        </div>
        </div>
       
        
    <?php endforeach; ?>

</body>

</html>