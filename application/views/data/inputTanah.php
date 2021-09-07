<div class="container-fluid">
	<h2>Input Inventarisasi Tanah</h2>

	<div style="background-color: lightgrey; border-radius: 10px; background-position: center;">
		<form class="user" method="post" action="<?= base_url('Inventarisasi/tambahTanah'); ?>">
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
					<?php foreach($satgas as $stg) : ?>
					<input type="hidden" name="id_satgas" value="<?= $satgas['id_satgas']; ?>">
				<?php endforeach; ?>
					<label for="kec">Kecamatan</label>
					<input type="text" id="kec" name="kec" placeholder="Kecamatan" class="form-control">
					<br>
					<label for="des">Desa</label>
					<input type="text" id="des" name="des" placeholder="Desa" class="form-control">
					<br>
					<label for="blk">Blok/Tanah</label>
					<input type="text" id="blk" name="blk" placeholder="Blok/Tanah" class="form-control">
					<br>
					<label for="rtrw">RT/RW</label>
					<input type="text" id="rtrw" name="rtrw" placeholder="RT/RW" class="form-control">
					<br>
					<label for="nis">NIS</label>
					<input type="text" id="nis" name="nis" placeholder="NIS" class="form-control">
				</div>


				<div class="col-md-4" style="margin-left: 10px; margin-top: 30px;">
					<label for="pemilik">Nama Pemilik</label>
					<input type="text" id="pemilik" name="nama_pemilik" placeholder="Nama Pemilik" class="form-control">
					<br>
					<label for="nik_pemilik">NIK Pemilik</label>
					<input type="text" id="nik_pemilik" name="nik_pemilik" placeholder="Nomor KTP" class="form-control">
					<br>
					<h5>C. Identitas Penggarap</h5>
					<label for="nama_penggarap">Nama Penggarap</label>
					<input type="text" id="nama_penggarap" name="nama_penggarap" placeholder="Nama" class="form-control">
					<br>
					<label for="nik_penggarap">NIK Penggarap</label>
					<input type="text" id="nik_penggarap" name="nik_penggarap" placeholder="Nomor KTP" class="form-control">
					<br>
					<label for="status">Status Garapan</label>
					<select name="status_garapan" id="status" class="form-control">
						<option></option>
						<option>Menguasai</option>
						<option>Menggarap</option>
						<option>Menyewa</option>
					</select>
				</div>
				<div class="col-md-3" style="margin-left: 60px;">

					<h6 style="font-size: 14pt;">1. Status Tanah</h6>
					<div class="row">
						<label for="shm">Sertifikat Hak</label>
						<input style="margin-left: 60px; width: 120px;" id="shm" type="text" name="shm" placeholder="Sertifikat Hak" class="form-control"><br>
						<br>
						<label for="no_shm">Nomor Sertifikat Hak</label>
						<input style="margin-left: 5px; width: 120px;" type="text" id="no_shm" name="no_shm" placeholder="Nomor" class="form-control">
					</div>
					<br>
					<label for="c_sppt">Hak Milik Adat No.C/SPPT</label>
					<input type="text" id="c_sppt" name="sppt" placeholder="Hak Milik Adat No.C/SPPT" class="form-control">
					<div class="row">
						<label for="kelas">Kelas</label>
						<input style="margin-left: 100px; margin-top: 5px; width: 80px;" id="kelas" type="text" name="kelas" placeholder="Kelas" class="form-control"><br><br>
						<label for="an">Atas Nama</label>
						<input style="margin-left: 60px;  margin-top: 5px; width: 110px;" id="an" type="text" name="an" placeholder="Atas Nama" class="form-control">
					</div>
					<br>
					<label for="perolehan">Perolehan Tanah</label>
					<select class="form-control" id="perolehan" name="perolehan">
						<option value="">-- Perolehan Tanah --</option>
						<option>Akta Jual Beli</option>
						<option>Hibah</option>
						<option>Pembagian Bersama</option>
					</select>

					<div class="row">
						<input style="margin-left: 10px; margin-top: 5px; width: 155px;" type="date" name="tgl_perolehan" placeholder="Tanggal" class="form-control">
						<input style="margin-left: 10px;  margin-top: 5px; width: 80px;" type="text" name="no_perolehan" placeholder="Nomor" class="form-control">
					</div>
					<br>
					<label for="bukti">Bukti Garapan</label>
					<input type="text" id="bukti" name="buk_garapan" placeholder="Bukti Garapan" class="form-control">
					<div class="row">
						<input style="margin-left: 10px; margin-top: 5px; width: 155px;" type="date" name="tgl_garapan" placeholder="Tanggal" class="form-control">
						<input style="margin-left: 10px;  margin-top: 5px; width: 80px;" type="text" name="no_garapan" placeholder="Nomor" class="form-control">
					</div>
					<br>
					<h6 style="font-size: 14pt; ">2. Luas Tanah</h6>
					<input type="text" name="luas" placeholder="Luas" class="form-control">
				</div>
				<div class="form-group" style="margin-top: 20px; margin-left: 900px;">
					<a href="<?= base_url('Inventarisasi/invTanah'); ?>" class="btn btn-danger">Batal</a>
					<button class="btn btn-primary" type="submit">Simpan</button>
				</div>
		</form>
	</div>
</div>
</div>