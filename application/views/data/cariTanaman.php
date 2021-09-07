<html>

<head>
  <title><?= $judul; ?></title>
  <script>
    var baseurl = "<?php echo base_url("index.php"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
  </script>
  <script src="<?php echo base_url("js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
  <script src="<?php echo base_url("js/tanaman/config.js"); ?>">
  </script>
</head>

<body>
  <h4 style="margin-left: 25px;"><?= $judul; ?></h4>
  <hr>
  <div class="row">

    <div class="col-md-3">
      <a style="margin-left: 30px;" class="btn btn-success" href="<?= base_url('Inventarisasi/tambahInvTanaman'); ?>">Tambah</a>
    </div>
    <div class="col-md-3" style="margin-left: 500px;">
      <input type="text" id="keyword" class="form-control" placeholder="Cari berdasarkan NIS/Nama">
      <div style="margin-top: 10px; margin-left:130px">
        <button type="button" id="btn-search" class="btn btn-primary">Cari</button>
        <a class="btn btn-warning" href="<?php echo base_url('index.php/Inventarisasi/invTanaman'); ?>">Reset</a>
      </div>
    </div>
  </div>
  <div id="view">
    <?php
    $this->load->view('data/tanaman', ['invTanaman' => $invTanaman]); // Load file view.php dan kirim data siswanya 
    ?>
  </div>

</body>

</html>