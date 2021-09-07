<div class="container-fluid">
	<h2>Input Inventarisasi Tanaman</h2>
	<br>
	<div style="background-color: lightgrey; border-radius: 10px; background-position: center; padding-bottom: 	50px">
		<form class="user" method="post" action="<?= base_url('Inventarisasi/tambahTanaman'); ?>">
			<div class="row">
				<div class="col-md-3" style="margin-left: 30px; margin-top: 10px;">
					<h5>A. Pemilik Tanaman</h5>
				</div>
				<div class="col-md-4" style="margin-left: 10px; margin-top: 10px;">
					<h5>B. Pemilik Tanah</h5>
				</div>
				<div class="col-md-3" style="margin-left: 5px; margin-top: 10px;">
					<h5>C. Keadaan Tanah</h5>
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
					<select id="desa" name="desa" class="form-control">
						<option>-- Desa --</option>
						<?php foreach ($dt as $d) : ?>
							<option><?= $d['desa']; ?></option>
						<?php endforeach; ?>
					</select>
					<br>
					<label for="rtrw">RT/RW</label>
					<select name="rtrw" class="form-control">
						<option value="">-- RT/RW --</option>
						<?php foreach ($dt as $d) : ?>
							<option><?= $d['rt/rw']; ?></option>
						<?php endforeach; ?>
					</select>

					<br>
					<label for="pemilik_tanaman">Nama Pemilik Tanaman</label>
					<input type="text" id="pemilik_tanaman" name="nama_pemilik_tanaman" placeholder="Nama Lengkap" class="form-control">
					<br>
					<label for="tempat">Tempat Lahir</label>
					<input type="text" id="tempat" name="tempat" placeholder="Tempat Lahir" class="form-control">
					<label for="tgl">Tanggal Lahir</label>
					<input type="date" id="tgl" name="tanggal" placeholder="Tanggal Lahir" class="form-control">
					<br>
					<label for="ktp">No. KTP</label>
					<input type="text" id="ktp" name="no_ktp" placeholder="Nomor KTP" class="form-control">
					<br>
					<label for="kerja">Pekerjaan</label>
					<input type="text" id="kerja" name="kerja" placeholder="Pekerjaan" class="form-control">
					<br>
					<label for="alamat">Alamat</label>
					<input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control">
				</div>


				<div class="col-md-4" style="margin-left: 10px; margin-top: 30px;">
					<label for="milik_tanah">Pemilik Tanah</label>
					<select name="nama_pemilik_tanah" id="milik_tanah" class="form-control">
						<option>-- Nama Pemilik Tanah --</option>
						<?php foreach ($dt as $d) : ?>
							<option><?= $d['nama_pemilik']; ?></option>
						<?php endforeach; ?>
					</select>

					<br>
					<label for="kavling">Peta/Kavling</label>
					<input type="text" name="kavling" id="kavling" placeholder="Peta/Kavling" class="form-control">
					<br>
					<label for="luas" Luas></label>
					<input type="text" id="luas" name="luas" placeholder="Luas" class="form-control">
					<br>
					<label for="kec">Kecamatan</label>
					<select name="des_kec" class="form-control" id="kec">
						<option value="">-- Kecamatan --</option>
						<?php foreach ($dt as $d) : ?>
							<option><?= $d['kecamatan']; ?></option>
						<?php endforeach; ?>
					</select>


					<br>
					<label for="alas">Alas Hak</label>
					<select name="alas_hak" id="alas" class="form-control">
						<option>--Alas Hak--</option>
						<option>SHM</option>
						<option>AJB</option>
						<option>Girik</option>
						<option>Letter C</option>
						<option>Surat Keterangan Desa</option>
						<option>SPPT</option>

					</select>
				</div>
				<div class="col-md-3" style="margin-left: 60px;">


					<br>
					<label for="jenis">Jenis Tanaman</label>
					<input type="text" name="jenis" id="jenis" placeholder="Jenis Tanaman" class="form-control">
					<br>
					<label for="ukur">Ukuran Tanaman</label>
					<select name="ukuran" id="ukur" class="form-control">
						<option>-- Ukuran Tanaman --</option>
						<option>Besar</option>
						<option>Sedang</option>
						<option>Kecil</option>
					</select>

					<br>
					<label for="jumlah">Jumlah Tanaman</label>
					<input style="margin-bottom: 30px" id="jumlah" type="text" name="jumlah" placeholder="Jumlah Tanaman" class="form-control">
					<div style="margin-bottom: 	50px">
						<a href="<?= base_url('Inventarisasi/invTanaman'); ?>" class="btn btn-warning">Batal</a>
						<button class="btn btn-primary" type="submit">Simpan</button>
					</div>

				</div>


		</form>
	</div>
</div>