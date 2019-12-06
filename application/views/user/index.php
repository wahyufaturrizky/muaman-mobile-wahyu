<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Beranda Saya</h1>
	</div>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-success">Profil Saya</h6>
		</div>
		<div class="card-body">

			<div class="row">
				<div class="col-4">
					<img class="img-fluid border border-success rounded-circle px-sm-4 mb-4" style="width: 25rem;"
						src="https://source.unsplash.com/AndE50aaHn4/120x120" alt="">

				</div>

				<div class="col-8">
					<h6 class="font-weight-bold text-success">PT Trigatra Adyatama</h6>
					<p>Aufar Rizki Putra</p>
					<p>Operations Manager</p>
				</div>

			</div>
		</div>
	</div>

	<a href="<?= base_url('user/tertanggung'); ?>" class="btn btn-success btn-user btn-block mb-4">
		Ajukan Asuransi Baru
	</a>

	<!-- Project Card Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Asuransi Aktif</h6>
		</div>
		<div class="card-body">
			<h4 class="small font-weight-bold">Personal Accident <span
					class="float-right badge badge-pill badge-success">14</span></h4>
			<div class="progress mb-4">
				<div class="progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 20%"
					aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<hr>
			<h4 class="small font-weight-bold">Kerugian Pihak Ketiga<span
					class="float-right badge badge-pill badge-success">1</span></h4>
			<div class="progress mb-4">
				<div class="progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 40%"
					aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<hr>
			<h4 class="small font-weight-bold">Barang Pengiriman<span
					class="float-right badge badge-pill badge-success">24</span></h4>
			<div class="progress mb-4">
				<div class="progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 60%"
					aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<hr>
			<a href="index.html" class="btn btn-success btn-user btn-block mb-4">
				Lihat Selengkapnya
			</a>
		</div>
	</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
