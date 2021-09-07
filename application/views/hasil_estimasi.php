<div class="jumbotron">
  <h2>Hasil Estimasi Waktu Pendataan</h2>
  <hr>
  <p>Hasil Estimasi Waktu : <?php echo $_POST['bidang']; ?> Bidang</p>
  <h2 class="text-danger">
    <?php
    $this->load->library('regresilinear');
    echo $this->regresilinear->forecast($_POST['bidang']) . ' Hari Pendataan'; ?>

  </h2>

  <a href="<?= base_url('Tanah/estimasi'); ?>">
    << Kembali</a>


</div>
</div>