<div class="container col-lg-4" style="margin-top: 60px;">
	<br>
	<div class="card" style="border-radius: 15px;">
		<div class="card-header font-weight-bold text-center text-uppercase"
			style="background:lightcoral; border-radius: 15px; color:lightcyan;">
			Laporan Pemasukan dan Pengeluaran Kas
		</div>
		<small class="text-warning text-center" style="background: whitesmoke;"><i>*Filter berdasarkan*</i></small>
		<div class="card-body" style="border-radius: 15px; background:whitesmoke;">
			<ul class="nav nav-pills card-header-pills justify-content-center">
				<li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#harian">Harian</a>
				</li>
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#periode">Periode</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active show font-weight-bold" id="harian"><br />
					<form action="<?=base_url('kas/laporan_harian');?>" method="POST">
						<div class="form-group">
							<label for="">Pilih Tanggal</label>
							<input class="form-control" type="date" name="tanggal" id="tanggal"
								value="<?=date('Y-m-d');?>" required="">
						</div>
						<div class="row justify-content-center">
							<button type="submit" class="btn btn-primary">Lihat Laporan</button>
						</div>
					</form>
				</div>
				<div class="tab-pane fade font-weight-bold" id="periode"><br />
					<form action="<?=base_url('kas/laporan_periode');?>" method="POST">
						<div class="form-group">
							<label for="tgl_mulai">Mulai</label>
							<input class="form-control" type="date" name="tgl_mulai" id="tgl_mulai"
								value="<?php $bulan = mktime(0,0,0, date('m')-1, date('d'), date('Y')); echo date('Y-m-d', $bulan);?>"
								prequired="">
						</div>
						<div class="form-group">
							<label for="tgl_sampai">Sampai</label>
							<input class="form-control" type="date" name="tgl_sampai" id="tgl_sampai"
								value="<?=date('Y-m-d');?>" required="">
						</div>
						<div class="row justify-content-center">
							<button type="submit" class="btn btn-primary">Lihat Laporan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>