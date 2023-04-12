<div class="container col-lg-7" style="margin-top: 60px;">
	<br>
	<h2>Tambah Pemasukan</h2>
	<?php if ($this->session->flashdata('message')) { ?>
	<div class="alert alert-dismissible alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<p class="mb-0"><?php echo $this->session->flashdata('message');?></p>
	</div>
	<?php } ?>
	<div class="card" style="border-radius: 15px;">
		<div class="card-header font-weight-bold text-center text-uppercase"
			style="background:lightcoral; border-radius: 15px; color:lightcyan;">
			Tambah Pemasukan Kas
		</div>
		<div class="card-body font-weight-bold" style="border-radius: 15px; background:whitesmoke;" >
			<form action="<?=base_url('kas/tambah_pemasukan');?>" method="POST" style="padding: 10px;">
				<div class="form-group">
					<label class="col-form-label" for="nomor">Nomor</label>
					<input type="number" class="form-control" name="nomor" id="nomor" value="<?=$nomor;?>"
						style="color: red;" readonly="">
				</div>
				<div class="form-group">
					<label class="col-form-label" for="keterangan">Keterangan</label>
					<textarea class="form-control pre-scrollable" name="keterangan" id="keterangan"
						placeholder="Keterangan" required=""></textarea>
				</div>
				<div class="form-group row">
					<div class="col-sm-6">
						<label class="col-form-label" for="tanggal">Tanggal</label>
						<input type="date" class="form-control" name="tanggal" id="tanggal" value="<?=date('Y-m-d');?>"
							required="">
					</div>
					<div class="col-sm-6">
						<label class="col-form-label" for="jumlah">Jumlah</label>
						<input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah"
							required="">
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-sm"></i> Simpan</button>
			</form>
		</div>
	</div>