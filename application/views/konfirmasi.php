<?php if ($this->session->flashdata('message')) { ?>
<div class="alert alert-dismissible alert-success">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<p class="mb-0"><?php echo $this->session->flashdata('message');?></p>
</div>
<?php } ?>
<div class="container col-lg-4" style="margin-top: 60px;">
	<br>
	<div class="card" style="border-radius: 15px;">
		<div class="card-header font-weight-bold text-uppercase text-center"
			style="background:lightcoral; border-radius: 15px; color:lightcyan;">Hapus Seluruh Data
		</div>
		<div class="card-body justify-content-center" style="border-radius: 15px; background:whitesmoke;">
			<ul>
				<li>Tekan <strong>YA, BERSIHKAN DATA</strong> untuk menghapus semua data dari database dan data tidak
					dapat
					dikembalikan.</li>
				<li>Tekan <strong>TIDAK, JANGAN BERSIHKAN</strong> untuk membatalkan.</li>
			</ul>
			<div class="row justify-content-center">
				<div class="btn-group" role="group" aria-label="Basic example">
					<a href="<?=base_url('kas/konf_hapus_all');?>"
						onclick="return confirm('Anda yakin ingin menghapus seluruh data?');"><button type="button"
							class="btn btn-danger">YA, BERSIHKAN DATA</button></a> &nbsp;
					<a href="<?=base_url();?>"><button type="button" class="btn btn-primary">TIDAK, JANGAN
							BERSIHKAN</button></a>
				</div>
			</div>
		</div>
	</div>
</div>