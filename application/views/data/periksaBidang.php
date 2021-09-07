<div class="container-fluid	">	
	<div class="row">
			<div class="col-md-3">
					<h5>Data Inventarisasi Tanah</h5>
			</div>
		
		
	</div>


	<?= $this->session->flashdata('message'); ?><br>

	<div class="table table-responsive" style="margin-bottom: 15px;">
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
								<a class="btn btn-primary" href="" data-toggle="modal" data-target="#ModalTanah<?= $id;?>">Detail</a>

							</td>
							<td>
								<a class="btn btn-info" target="_blank" href="<?= base_url('Tanah/laporanTanah'); ?>">Unduh</a>
							</td>
						</tr>
			</tbody>
	<?php }
				} else { // Jika data tidak ada
					echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
				}
	?>

		</table><br>
		
	</div>
	
<hr style="size:10px; color:black;">	
	<div class="row">

    <div class="col-md-3">
       <h5>Data Inventarisasi Tanaman</h5>
    </div>
   
</div>


<?= $this->session->flashdata('message'); ?><br>


<div class="table-responsive" style="margin-bottom: 100px;">
    <table class="table table-striped table-bordered w-100 dt-responsive nowrap" id="dataTable" style="margin-left: 30px; margin-right: 30px;">

        <thead align="center;">
            <tr>
                <th>No.</th>
                <th>NIS</th>
                <th>Desa</th>
                <th>RT/RW</th>
                <th>Nama Pemilik Tanaman</th>
                <th>Tempat</th>
                <th>Tanggal Lahir</th>
                <th>No. KTP</th>
                <th>Pekerjaan</th>
                <th>Alamat</th>
                <th>Nama Pemilik Tanah</th>
                <th>Kavling</th>
                <th>Luas</th>
                <th>Desa/Kecamatan</th>
                <th>Alas Hak</th>
                <th>Jenis Tanaman</th>
                <th>Ukuran</th>
                <th>Jumlah</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>


        <tbody>
            <?php
            if (!empty($invTanaman)) {
                $no = $this->uri->segment('3') + 1;
                foreach ($invTanaman as $d) {
            ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d['nis']; ?></td>
                        <td><?= $d['desa']; ?></td>
                        <td><?= $d['rtrw']; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['tempat'];  ?></td>
                        <td><?= $d['tgl_lahir']; ?></td>
                        <td><?= $d['no_ktp']; ?></td>
                        <td><?= $d['pekerjaan']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                        <td><?= $d['nama_pemilik_tanah']; ?></td>
                        <td><?= $d['kavling/blok']; ?></td>
                        <td><?= $d['luas']; ?></td>
                        <td><?= $d['kecamatan']; ?></td>
                        <td><?= $d['alas_hak']; ?></td>
                        <td><?= $d['jenis_tanaman']; ?></td>
                        <td><?= $d['ukuran']; ?></td>
                        <td><?= $d['jumlah']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="<?= base_url('Inventarisasi/ubahInvTanaman/' . $d['id_tanaman']); ?>">Detail</a>

                        </td>
                        <td>
                            <a class="btn btn-info" href="" data-toggle="modal" data-target="#ModalHapus">Unduh</a>
                        </td>

                    </tr>
        </tbody>
<?php }
            } else { // Jika data tidak ada
                echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
            }
?>
    </table>
</div><hr>
<div class="row">

    <div class="col-md-3">
        <h5>Data Inventarisasi Bangunan</h5>
    </div>
    <div class="col-md-3" style="margin-left: 500px;">
        <?= form_open('Inventarisasi/cariBangunan') ?>
        <input type="text" name="katakunci" class="form-control" placeholder="Cari berdasarkan NIS/Blok/Nama" autofocus="">
        <div style="margin-top: 10px; margin-left:100px">
            <button type="submit" id="btn-search" class="btn btn-primary">Cari</button>
            <a class="btn btn-warning" href="<?php echo base_url('index.php/Tanah/bidangTanah'); ?>">Reset</a>
        </div>
        <?= form_close() ?>

    </div>
</div>

<?= $this->session->flashdata('message'); ?><br>

<div class="table table-responsive" style="margin-bottom: 100px;">
    <table class="table table-striped table-bordered w-100 dt-responsive nowrap" id="dataTable" style="margin-left: 30px; margin-right: 30px;">
        <thead align="center;">
            <tr>
                <th>No.</th>
                <th>NIS</th>
                <th>Desa</th>
                <th>RT/RW</th>
                <th>Nama Pemilik Bangunan</th>
                <th>Tempat Tanggal Lahir</th>
                <th>No. KTP</th>
                <th>Pekerjaan</th>
                <th>Alamat</th>
                <th>Nama Pemilik Tanah</th>
                <th>Kavling</th>
                <th>Luas</th>
                <th>Kecamatan</th>
                <th>Jenis Konstruksi</th>
                <th>Luas Bangunan</th>
                <th>Kelas Kontruksi</th>
                <th>Kondisi</th>
                <th colspan="2">Aksi</th>
        </thead>
        </tr>
        <tbody>
            <?php

            if (!empty($invBangunan)) {
                $no = $this->uri->segment('3') + 1;
                foreach ($invBangunan as $d) {
            ?><tr>

                        <td><?= $no++; ?></td>
                        <td><?= $d['nis']; ?></td>
                        <td><?= $d['desa']; ?></td>
                        <td><?= $d['rtrw']; ?></td>
                        <td><?= $d['nama_pemilik_bangunan']; ?></td>
                        <td><?= $d['ttl']; ?></td>
                        <td><?= $d['no_ktp']; ?></td>
                        <td><?= $d['pekerjaan']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                        <td><?= $d['nama_pemilik_tanah']; ?></td>
                        <td><?= $d['kavling']; ?></td>
                        <td><?= $d['luas']; ?></td>
                        <td><?= $d['kecamatan']; ?></td>
                        <td><?= $d['jenis_konstruksi']; ?></td>
                        <td><?= $d['luas_bangunan']; ?></td>
                        <td><?= $d['kelas_konstruksi']; ?></td>
                        <td><?= $d['kondisi']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="<?= base_url('Inventarisasi/ubahInvBangunan/' . $d['id_bangunan']); ?>">Detail</a>

                        </td>
                        <td>
                            <a class="btn btn-info" href="" data-toggle="modal" data-target="#ModalHapus">Unduh</a>
                        </td>
                <?php }
            } else { // Jika data tidak ada
                echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
            }

                ?>
                    </tr>
        </tbody>

    </table>	
</div>    
<hr>
    <div class="row">
    	<div class="col-md-3">
    		<h5>Data Permohonan Tanah</h5>
    	</div>
    	<div class="col-md-3" style="margin-left: 500px;">
        <?= form_open('Inventarisasi/cariBangunan') ?>
        <input type="text" name="katakunci" class="form-control" placeholder="Cari berdasarkan NIS/Blok/Nama" autofocus="">
        <div style="margin-top: 10px; margin-left:100px">
            <button type="submit" id="btn-search" class="btn btn-primary">Cari</button>
            <a class="btn btn-warning" href="<?php echo base_url('index.php/Tanah/bidangTanah'); ?>">Reset</a>
        </div>
        <?= form_close() ?>

    </div>
  </div>  
    	<div class="table table-responsive" style="margin-bottom: 100px;">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable" style="text-align:center; margin-left: 30px; margin-right: 30px;">
            <thead align="center;">

                <th>No.</th>
                <th>NIS</th>
                <th>No. Berkas</th>
                <th>No. Register</th>
                <th>Nama Pemohon</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Umur</th>
                <th>Pekerjaan</th>
                <th>No. KTP</th>
                <th>Alamat</th>
                <th>Alas Hak</th>
                <th>Tanggal Alas Hak</th>
                <th>Jalan/Gang/Blok</th>
                <th>Desa</th>
                <th>No. Letter C</th>
                <th>Nama Letter C</th>
                <th>No. Persil</th>
                <th>Kelas</th>
                <th>RT/RW</th>
                <th>Kecamatan</th>
                <th>No. SPPT</th>
                <th>Nama di SPPT</th>
                <th>Luas</th>
                <th>No. Blok</th>
                <th>Luas Ukur</th>
                <th>Batas Utara</th>
                <th>Batas Selatan</th>
                <th>Batas Timur</th>
                <th>Batas Barat</th>
                <th>Riwayat Penguasaan</th>
                <th>Penggunaan</th>
                <th>Tanggal Permohonan</th>
                <th>Nama Pewaris</th>
                <th>Tahun Meninggal</th>
                <th>Tempat Meninggal</th>
                <th>Rencana Penggunaan</th>
                <th colspan="3">Aksi</th>
            </thead>

            <tbody>
                <?php
                if (!empty($permohonan)) {
                    $no = 1;
                    foreach ($permohonan as $d) {
                        $id = $d['id_permohonan'];

                ?>
                        <td><?= $no++; ?></td>
                        <td><?= $d['nis']; ?></td>
                        <td><?= $d['no_berkas']; ?></td>
                        <td><?= $d['no_register']; ?></td>
                        <td><?= $d['pemohon']; ?></td>
                        <td><?= $d['tempat'] . $d['tgl_lahir']; ?></td>
                        <td><?= $d['umur']; ?></td>
                        <td><?= $d['pekerjaan']; ?></td>
                        <td><?= $d['no_ktp']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                        <td><?= $d['alas_hak']; ?></td>
                        <td><?= $d['tgl_alas_hak']; ?></td>
                        <td><?= $d['blok']; ?></td>
                        <td><?= $d['desa/kelurahan']; ?></td>
                        <td><?= $d['no_letter_c']; ?></td>
                        <td><?= $d['nama_letter_c']; ?></td>
                        <td><?= $d['no_persil']; ?></td>
                        <td><?= $d['kelas']; ?></td>
                        <td><?= $d['rt/rw']; ?></td>
                        <td><?= $d['kecamatan']; ?></td>
                        <td><?= $d['no_sppt']; ?></td>
                        <td><?= $d['nama_sppt']; ?></td>
                        <td><?= $d['luas']; ?></td>
                        <td><?= $d['no_blok']; ?></td>
                        <td><?= $d['luas_ukur']; ?></td>
                        <td><?= $d['batas_utara']; ?></td>
                        <td><?= $d['batas_selatan']; ?></td>
                        <td><?= $d['batas_timur']; ?></td>
                        <td><?= $d['batas_barat']; ?></td>
                        <td><?= $d['riwayat_penguasaan']; ?></td>
                        <td><?= $d['penggunaan']; ?></td>
                        <td><?= $d['tgl_permohonan']; ?></td>
                        <td><?= $d['nama_pewaris']; ?></td>
                        <td><?= $d['tahun_meninggal']; ?></td>
                        <td><?= $d['tempat_meninggal']; ?></td>
                        <td><?= $d['rencana_penggunaan']; ?></td>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="" data-toggle="modal" data-target="#ModalMohon<?= $id;?>">Detail</a>
                        </td>
                        <td>
                            <a class="btn btn-info" target="_blank" href="<?= base_url('Tanah/cetakPrm/'.$id)?>" >Unduh</a>
                        </td>
                       

            </tbody>
    <?php }
                } else { // Jika data tidak ada
                    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
                }
    ?>
        </table>

    </div>	 
</div>
<?php
foreach ($invTanah as $d) {
$id = $d['id_tanah'];
?>
    
   <div class="modal fade" id="ModalTanah<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h3 class="modal-title" id="myModalLabel">Detail Inventarisasi Tanah</h3>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

                 </div>
                 <div class="col-md-8">

                     <table class="table">
                         <tr>
                             <td>NIS</td>
                             <td><strong><?= $d['nis'] ?></strong></td>
                         </tr>

                         <tr>
                             <td>Nama Pemilik</td>
                             <td><strong><?= $d['nama_pemilik'] ?></strong></td>
                         </tr>
                         <tr>
                             <td>Luas Tanah</td>
                           <td><strong><?= $d['luas_tanah'] ?></strong></td>
                            </td>
                         </tr>
                     </table>
                 </div>
                 <div class="modal-footer">
                     <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Tutup</button>
                     
                 </div>
                 </form>
             </div>
         </div>
     </div>
    <?php } ?>


<?php
foreach ($permohonan as $d) {
$id = $d['id_permohonan'];
?>
    
   <div class="modal fade" id="ModalMohon<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h3 class="modal-title" id="myModalLabel">Detail Permohonan Tanah</h3>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

                 </div>
                 <div class="col-md-8">

                     <table class="table">
                         <tr>
                             <td>NIS</td>
                             <td><strong><?= $d['nis'] ?></strong></td>
                         </tr>

                         <tr>
                             <td>Pemohon</td>
                             <td><strong><?= $d['pemohon'] ?></strong></td>
                         </tr>
                         <tr>
                             <td>Luas Ukur</td>
                           <td><strong><?= $d['luas_ukur'] ?></strong></td>
                            </td>
                         </tr>
                     </table>
                 </div>
                 <div class="modal-footer">
                     <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Tutup</button>
                     
                 </div>
                 </form>
             </div>
         </div>
     </div>
    <?php } ?>


    </body>


    </html>
	</div>