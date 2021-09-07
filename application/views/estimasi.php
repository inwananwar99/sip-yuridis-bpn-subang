<div class="jumbotron">
  <h2>Estimasi Waktu Pendataan</h2>
  <hr>
  <p>Lakukan Estimasi Waktu</p>
  <form class="form-inline" action="<?= base_url('index.php/Tanah/hitungEstimasi'); ?>" method="post">
    <label class="sr-only" for="inlineFormInputName2">Name</label>
    <?php foreach ([$satgas] as $stgs) : ?>
      <input type="hidden" name="satgas" value="<?= $stgs['id_satgas']; ?>">
    <?php endforeach; ?>
    <input type="text" style="width: 300px;" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="bidang" placeholder="Masukkan Jumlah Bidang Tanah" autocomplete="off" autofocus="">

    <button type="submit" class="btn btn-primary mb-2">Hitung</button>
  </form>


</div>
</div>