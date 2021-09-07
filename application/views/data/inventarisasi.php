<!DOCTYPE html>
<html>

<head>
  <link href="<?= base_url(); ?>assets/img/608px-Logo_BPN-KemenATR_(2017).png" rel="icon">
  <title><?= $title; ?></title>
</head>

<body>
  <div class="container-fluid" style="margin-bottom: 293px;">
    <div class="row" style="padding-left: 57px;">
      <div class="col-md-4" style="color: green;">
        <div class="card" style="width: 16rem;">
          <div class="card-body">
            <img src="" class="card-img-top" alt="Belum ada gambar">
            <h3 class="card-title"><a style="margin-left: 30px; margin-bottom: 50px;" href="<?= base_url('Inventarisasi/invTanah'); ?>" class="btn btn-primary">Inventarisasi Tanah</a></h3>
            <small></small> <br> <span class="badge badge-pill badge-success"></span> <br>
          </div>
        </div>
      </div>
      <div class="col-md-4" style="color: green;">
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <img src="" class="card-img-top" alt="Belum ada gambar">
            <h3 class="card-title"><a style="margin-left: 30px; margin-bottom: 50px;" href="<?= base_url('Inventarisasi/invTanaman') ?>" class="btn btn-success">Inventarisasi Tanaman</a></h3>
            <small></small> <br> <span class="badge badge-pill badge-success"></span> <br>
          </div>
        </div>
      </div>
      <div class="col-md-4" style="color: green;">
        <div class="card" style="width: 16rem;">
          <div class="card-body">
            <img src="" class="card-img-top" alt="Belum ada gambar">
            <h3 class="card-title"><a style="margin-left: 30px; " href="<?= base_url('Inventarisasi/invBangunan') ?>" class="btn btn-danger">Inventarisasi Bangunan</a></h3>
            <small></small> <br> <span class="badge badge-pill badge-success"></span> <br>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>