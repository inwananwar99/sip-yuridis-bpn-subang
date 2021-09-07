<div class="container">
<div class="row" style="margin-left: 30px; margin-bottom:20px;">
	<h5><?= $judul; ?></h5>
</div>
<div class="row">

	<div class="col-md-3">
		<a style="margin-left: 30px;" class="btn btn-success" href="<?= base_url('Inventarisasi/tambahInvTanah'); ?>">Tambah</a>
	</div>
	<div class="col-md-3" style="margin-left: 500px;">
		<?= form_open('Inventarisasi/cariTanah') ?>
		<input type="text" name="katakunci" class="form-control" placeholder="Cari berdasarkan NIS/Blok/Nama" autofocus="">
		<div style="margin-top: 10px; margin-left:100px">
			<button type="submit" id="btn-search" class="btn btn-primary">Cari</button>
			<a class="btn btn-warning" href="<?php echo base_url('index.php/Inventarisasi/invTanah'); ?>">Reset</a>
		</div>
		<?= form_close() ?>

	</div>
</div>


<?= $this->session->flashdata('message'); ?><br>

<div class="table table-responsive" style="margin-bottom: 185px;">
	<table class="table table-striped table-bordered w-100 dt-responsive nowrap" id="dataTable" style="margin-left: 30px; margin-right: 30px;">
		<thead align="center;">
			<tr>
				<th>No.</th>
				<th>Kecamatan</th>
				<th>Desa</th>
				<th>Blok/Tanah</th>
				<th>RT/RW</th>
				<th>NIS</th>
				<th>Nama Pemilik</th>
				<th>NIK Pemilik</th>
				<th>Nama Penggarap</th>
				<th>NIK Penggarap</th>
				<th>Status</th>
				<th>SHM</th>
				<th>No. SHM</th>
				<th>No. SPPT</th>
				<th>Kelas</th>
				<th>Atas Nama</th>
				<th>Perolehan Tanah</th>
				<th>Tanggal Perolehan</th>
				<th>No. Perolehan</th>
				<th>Bukti Garapan</th>
				<th>Tanggal Garapan</th>
				<th>Nomor Garapan</th>
				<th>Luas Tanah</th>
				<th colspan="2">Aksi</th>
			</tr>
		</thead>

		<tbody>
			<?php
			if (!empty($invTanah)) {
				$no = $this->uri->segment('3') + 1;
				foreach ($invTanah as $d) {
					$id = $d['id_tanah'];
			?>
					<tr>
						<td><?= $no++; ?></td>
						<td><?= $d['kecamatan']; ?></td>
						<td><?= $d['desa']; ?></td>
						<td><?= $d['blok']; ?></td>
						<td><?= $d['rt/rw']; ?></td>
						<td><?= $d['nis']; ?></td>
						<td><?= $d['nama_pemilik']; ?></td>
						<td><?= $d['nik_pemilik']; ?></td>
						<td><?= $d['nama_penggarap']; ?></td>
						<td><?= $d['nik_penggarap']; ?></td>
						<td><?= $d['status_penggarap']; ?></td>
						<td><?= $d['shm']; ?></td>
						<td><?= $d['no_shm']; ?></td>
						<td><?= $d['no_sppt']; ?></td>
						<td><?= $d['kelas']; ?></td>
						<td><?= $d['atas_nama']; ?></td>
						<td><?= $d['perolehan_tanah']; ?></td>
						<td><?= $d['tgl_perolehan']; ?></td>
						<td><?= $d['no_perolehan']; ?></td>
						<td><?= $d['bukti_garapan']; ?></td>
						<td><?= $d['tgl_garapan']; ?></td>
						<td><?= $d['no_garapan']; ?></td>
						<td><?= $d['luas_tanah']; ?></td>
						<td>
							<a class="btn btn-primary" href="<?= base_url('Inventarisasi/ubahInvTanah/' . $d['id_tanah']); ?>">Ubah</a>

						</td>
						<td>
							<a class="btn btn-warning" href="" data-toggle="modal" data-target="#ModalHapus<?= $id;?>">Hapus</a>
						</td>
					</tr>
		</tbody>
<?php }
			} else { // Jika data tidak ada
				echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
			}
?>
<nav class="pagination" aria-label="Page navigation" style="margin-left: 30px;">

		<?php
		echo $this->pagination->create_links();
		?>

	</nav>
	</table><br>
	
</div>
</div>
<?php foreach ($invTanah as $tnh) :
        $id = $tnh['id_tanah'];
    ?>

     <div class="modal fade" id="ModalHapus<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h3 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h3>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

                 </div>
                 <div class="col-md-8">
                    Apakah anda yakin ingin menghapus data dengan NIS <?= $tnh['nis']; ?> ?
                 </div>
                 <div class="modal-footer">
                     <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Tutup</button>
                     <a class="btn btn-success" href="<?=base_url('Inventarisasi/hapusInvTanah/'.$tnh['id_tanah']); ?>">Hapus</a>
                 </div>
                 </form>
             </div>
         </div>
     </div>

 <?php endforeach; ?>