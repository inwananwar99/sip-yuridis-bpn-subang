<?php foreach ($invTanah as $tnh) {
?>


	<div class="container-fluid">
		<h2>Ubah Inventarisasi Tanah</h2>
		<div style="background-color: lightgrey; border-radius: 10px; background-position: center;">
			<form class="user" method="post" action="<?= base_url('Inventarisasi/ubahDataInvTanah'); ?>">
				<div class="row">
					<div class="col-md-3" style="margin-left: 30px; margin-top: 10px;">
						<h5>A. Letak Tanah</h5>
					</div>
					<div class="col-md-4" style="margin-left: 10px; margin-top: 10px;">
						<h5>B. Identitas Pemilik</h5>
					</div>
					<div class="col-md-2" style="margin-left: 0px; margin-top: 10px;">
						<h5>D. Data Tanah</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3" style="margin-left: 30px; margin-top: 30px;">

						<input type="hidden" name="id" value="<?= $tnh['id_tanah']; ?>">
						<label for="kec">Kecamatan</label>
						<input type="text" name="kec" placeholder="Kecamatan" class="form-control" value="<?= $tnh['kecamatan']; ?>">
						<br>
						<label for="des">Desa</label>
						<input type="text" name="des" placeholder="Desa" class="form-control" value="<?= $tnh['desa']; ?>">
						<br>
						<label for="blk">Blok/Tanah</label>
						<input type="text" name="blk" placeholder="Blok/Tanah" class="form-control" value="<?= $tnh['blok']; ?>">
						<br>
						<label for="rtrw">RT/RW</label>
						<input type="text" name="rtrw" placeholder="RT/RW" class="form-control" value="<?= $tnh['rt/rw']; ?>">
						<br>
						<label for="nis">NIS</label>
						<input type="text" name="nis" placeholder="NIS" class="form-control" value="<?= $tnh['nis']; ?>">
					</div>


					<div class="col-md-4" style="margin-left: 10px; margin-top: 30px;">
						<label for="pemilik">Nama Pemilik</label>
						<input type="text" name="nama_pemilik" placeholder="Nama Pemilik" class="form-control" value="<?= $tnh['nama_pemilik']; ?>">
						<br>
						<label for="nik_pemilik">NIK Pemilik</label>
						<input type="text" name="nik_pemilik" placeholder="Nomor KTP" class="form-control" value="<?= $tnh['nik_pemilik']; ?>">
						<br>

						<h5>C. Identitas Penggarap</h5>
						<label for="nama_penggarap">Nama Penggarap</label>
						<input type="text" name="nama_penggarap" placeholder="Nama" class="form-control" value="<?= $tnh['nama_penggarap']; ?>">
						<br>
						<label for="nik_penggarap">NIK Penggarap</label>
						<input type="text" name="nik_penggarap" placeholder="Nomor KTP" class="form-control" value="<?= $tnh['nik_penggarap']; ?>">
						<br>
						<label for="status">Status Garapan</label>
						<select name="status_garapan" class="form-control">
							<option><?= $tnh['status_penggarap']; ?></option>
							<option>Menguasai</option>
							<option>Menggarap</option>
							<option>Menyewa</option>
						</select>
					</div>
					<div class="col-md-3" style="margin-left: 60px;">

						<h6 style="font-size: 14pt;">1. Status Tanah</h6>
						<div class="row">
							<label for="shm">Sertifikat Hak</label>
							<input style="margin-left: 10px; width: 120px;" type="text" name="shm" placeholder="Sertifikat Hak" class="form-control" value="<?= $tnh['shm']; ?>">
							<label for="no_shm">Nomor Sertifikat Hak</label>
							<input style="margin-left: 10px; width: 80px;" type="text" name="no_shm" placeholder="Nomor" class="form-control" value="<?= $tnh['no_shm']; ?>">
						</div>
						<br>
						<label for="c_sppt">Hak Milik Adat No.C/SPPT</label>
						<input type="text" name="sppt" placeholder="Hak Milik Adat No.C/SPPT" class="form-control" value="<?= $tnh['no_sppt']; ?>">
						<div class="row">
							<label for="kelas">Kelas</label>
							<input style="margin-left: 10px; margin-top: 5px; width: 80px;" type="text" name="kelas" placeholder="Kelas" class="form-control" value="<?= $tnh['kelas']; ?>">
							<label for="an">Atas Nama</label>
							<input style="margin-left: 10px;  margin-top: 5px; width: 110px;" type="text" name="an" placeholder="Atas Nama" class="form-control" value="<?= $tnh['atas_nama']; ?>">
						</div>
						<br>
						<label for="perolehan">Perolehan Tanah</label>
						<input type="text" name="perolehan" placeholder="Perolehan Tanah*" class="form-control" value="<?= $tnh['perolehan_tanah']; ?>">
						<div class="row">
							<input style="margin-left: 10px; margin-top: 5px; width: 155px;" type="date" name="tgl_perolehan" placeholder="Tanggal" class="form-control" value="<?= $tnh['tgl_perolehan']; ?>">
							<input style="margin-left: 10px;  margin-top: 5px; width: 80px;" type="text" name="no_ajb" placeholder="Nomor Perolehan" class="form-control" value="<?= $tnh['no_perolehan']; ?>">
						</div>
						<br>
						<input type="text" name="buk_garapan" placeholder="Bukti Garapan" class="form-control" value="<?= $tnh['bukti_garapan']; ?>">
						<div class="row">
							<input style="margin-left: 10px; margin-top: 5px; width: 155px;" type="date" name="tgl_garapan" placeholder="Tanggal" class="form-control" value="<?= $tnh['tgl_garapan']; ?>">
							<input style="margin-left: 10px;  margin-top: 5px; width: 80px;" type="text" name="no_garapan" placeholder="Nomor" class="form-control" value="<?= $tnh['no_garapan']; ?>">
						</div>
						<br>
						<h6 style="font-size: 14pt; ">2. Luas Tanah</h6>
						<input type="text" name="luas" placeholder="Luas" class="form-control" value="<?= $tnh['luas_tanah']; ?>">
					</div>
					<div class="form-group" style="margin-top: 20px; margin-left: 900px;">
						<a href="<?= base_url('Inventarisasi/invTanah'); ?>" class="btn btn-danger">Batal</a>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				<?php	} ?>
			</form>
		</div>
	</div>
	</div>