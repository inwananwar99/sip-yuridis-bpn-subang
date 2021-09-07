<div class="container-fluid" style="background-image: url(<?= base_url() ?>assets/img/bpn-ri.jpg); padding-bottom: 317px;">
<?= $this->session->flashdata('message'); ?>
	<body>
		<div class="row" style="margin-left:90px">
			
			<div class="row">
				<div class="col-md-4" style="color: green;">
					<div class="card">
						<div class="icon-boxes">
							<!-- <img style="margin-bottom: 30px;" width="90px" height="250px" src="<?= base_url(); ?>assets/img/tanahcampuran2.jpg" class="card-img-top" alt="Belum ada gambar"> -->

							<h4 style="text-align: center; color:black"><?= $this->db->get('tanah')->num_rows(); ?> Bidang</h4>


							<h5 style="margin-left: 60px; color:black" class="card-title">Inventarisasi Tanah</h5 style="margin-left: 60px; color:black">
							<small></small> <br> <span class="badge badge-pill badge-success"></span> <br>
						</div>
					</div>
				</div>
				<div class="col-md-4" style="color: green;">
					<div class="card">
						<div class="icon-boxes">
							<!-- <img style="margin-bottom: 30px;" width="90px" height="250px" src="<?= base_url(); ?>assets/img/tanaman.jpg" class="card-img-top" alt="Belum ada gambar"> -->
							<h4 style="text-align: center; color:black"><?= $this->db->get('tanaman')->num_rows(); ?> Bidang</h4>
							<h5 style="margin-left: 60px; color:black" class="card-title">Inventarisasi Tanaman</h5 style="margin-left: 60px; color:black">
							<small></small> <br> <span class="badge badge-pill badge-success"></span> <br>
						</div>
					</div>
				</div>
				<div class="col-md-4" style="color: green;">
					<div class="card">
						<div class="icon-boxes">
							<!-- <img style="margin-bottom: 30px; height:250px;" src="<?= base_url(); ?>assets/img/bangunan.jpg" class="card-img-top" alt="Belum ada gambar"> -->
							<h4 style="text-align: center; color:black"><?= $this->db->get('bangunan')->num_rows(); ?> Bidang</h4>
							<h5 style="margin-left: 60px; color:black" class="card-title">Inventarisasi Bangunan</h5 style="margin-left: 60px; color:black">

							<small></small> <br> <span class="badge badge-pill badge-success"></span> <br>
						</div>
					</div>
				</div>
			</div>



		</div>
</div>
</body>
</div>