<div class="container-fluid">
	<h2>Input Inventarisasi Bangunan</h2>
	<br>
	<div style="background-color: lightgrey; border-radius: 10px; background-position: center; padding-bottom: 	50px">
		<form class="user" method="post" action="<?= base_url('Inventarisasi/tambahBangunan'); ?>">
			<div class="row">
				<div class="col-md-3" style="margin-left: 30px; margin-top: 10px;">
					<h5>A. Pemilik Bangunan</h5>
				</div>
				<div class="col-md-4" style="margin-left: 10px; margin-top: 10px;">
					<h5>B. Pemilik Tanah</h5>
				</div>
				<div class="col-md-3" style="margin-left: 5px; margin-top: 10px;">
					<h5>C. Keadaan Bangunan</h5>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3" style="margin-left: 30px; margin-top: 30px;">
					<label for="nis">NIS</label>
					<select name="nis" id="nis" class="form-control">
						<option value="">-- NIS Bidang Tanah --</option>
						<?php foreach ($dt as $d) : ?>
							<option><?= $d['nis']; ?></option>
						<?php endforeach; ?>
					</select>
					<br>
					<label for="desa">Desa</label>
					<select name="desa" id="desa" class="form-control">
						<option>-- Desa --</option>
						<?php foreach ($dt as $d) : ?>
							<option><?= $d['desa']; ?></option>
						<?php endforeach; ?>
					</select>

					<br>
					<label for="rtrw"></label>
					<select name="rtrw" id="rtrw" class="form-control">
						<option value="">-- RT/RW --</option>
						<?php foreach ($dt as $d) : ?>
							<option><?= $d['rt/rw']; ?></option>
						<?php endforeach; ?>
					</select>

					<br>
					<label for="pemilik_bangunan">Pemilik Bangunan</label>
					<input type="text" name="nama_pemilik_bangunan" id="pemilik_bangunan" placeholder="Nama Lengkap" class="form-control">
					<br>
					<input type="text" name="ttl" placeholder="Tempat Tanggal Lahir" class="form-control">
					<br>
					<input type="text" name="no_ktp" placeholder="Nomor KTP" class="form-control">
					<br>
					<input type="text" name="kerja" placeholder="Pekerjaan" class="form-control">
					<br>
					<input type="text" name="alamat" placeholder="Alamat" class="form-control">
				</div>


				<div class="col-md-4" style="margin-left: 10px; margin-top: 30px;">

					<select name="nama_pemilik_tanah" class="form-control">
						<option>-- Nama Pemilik Tanah --</option>
						<?php foreach ($dt as $d) : ?>
							<option><?= $d['nama_pemilik']; ?></option>
						<?php endforeach; ?>
					</select>

					<br>
					<input type="text" name="kavling" placeholder="Peta/Kavling" class="form-control">
					<br>

					<input type="text" name="luas" placeholder="Luas" class="form-control">
					<br>

					<select name="kecamatan" class="form-control">
						<option value="">-- Kecamatan --</option>
						<?php foreach ($dt as $d) : ?>
							<option><?= $d['kecamatan']; ?></option>
						<?php endforeach; ?>
					</select>



				</div>
				<div class="col-md-3" style="margin-left: 60px;">


					<br>
					<input type="text" name="jenis_konstruksi" placeholder="Jenis Konstruksi" class="form-control">
					<br>
					<input type="text" name="luas_bangunan" placeholder="Luas Bangunan" class="form-control">

					<br>
					<input type="text" name="kelas_konstruksi" placeholder="Kelas Konstruksi" class="form-control">
					<br>
					<input style="margin-bottom: 30px" type="text" name="kondisi" placeholder="Kondisi" class="form-control">
					<div style="margin-bottom: 	50px">
						<a href="<?= base_url('Inventarisasi/invTanaman'); ?>" class="btn btn-warning">Batal</a>
						<button class="btn btn-primary" type="submit">Simpan</button>
					</div>

				</div>


		</form>
	</div>
</div>