

	<div class="container-fluid">
		<h2><?= $judul; ?></h2>
		<div style="background-color: lightgrey; border-radius: 10px; background-position: center;">
			<form class="user" method="post" action="<?= base_url('Inventarisasi/ubahDataInvTanah'); ?>">
				

				<?php foreach ([$data] as $d) {
?>
				<div class="row">
					<div class="col-md-3">
					<label>Pesan Pengajuan</label>
					<input type="" name="" value="<?= $d['pesan_validasi'] ?>" placeholder="Pesan Pengajuan" ><br>
					<label>Data Pengajuan</label>
					<input type="" name="" value="<?= $d['data_pengajuan'] ?>" placeholder="Data Pengajuan" >
					<label>Tanggal Pengajuan</label>
					<input type="" name="" value="<?= $d['tgl_pengajuan'] ?>" placeholder="Data Pengajuan" >
					</div>
					<label>Statu</label>
				</div>
				
					<div class="form-group" style="margin-top: 20px; margin-left: 900px;">
						<a href="<?= base_url('Inventarisasi/invTanah'); ?>" class="btn btn-danger">Batal</a>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				<?php	} ?>
			</div>
			</form>
		</div>
		</div>
