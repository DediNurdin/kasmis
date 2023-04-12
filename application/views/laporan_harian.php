<?php if (empty($tanggal) && empty($result)) { ?>
<div class="alert alert-dismissible alert-warning">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<p class="mb-0">Tanggal harian belum ditentukan</p>
</div>
<?php } else if (!empty($tanggal) && empty($result)) { ?>
<div class="container" style="margin-top: 60px;">
	<br>
	<h2>Laporan Harian</h2>
	<p>Tanggal <strong><?=$tanggal;?></strong></p>
	<table class="table table-hover table-striped">
		<thead class="thead">
			<tr>
				<th scope="col">Nomor</th>
				<th scope="col">Keterangan</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Jenis</th>
				<th scope="col">Jumlah</th>
				<th scope="col">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="6" align="center">Tidak ada data</td>
			</tr>
		</tbody>
	</table>
	<?php } else if (!empty($tanggal) && !empty($result)) { ?>
	<div class="container" style="margin-top: 60px;">
		<br>
		<h2>Laporan Harian</h2>
		<p>Tanggal <strong><?=date('d/m/Y', strtotime($tanggal));?></strong></p>
		<table class="table table-hover table-striped">
			<thead class="theadr">
				<tr>
					<th scope="col">Nomor</th>
					<th scope="col">Keterangan</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Jenis</th>
					<th scope="col">Jumlah</th>
					<?php if ($this->session->userdata('logged_in') == TRUE) { ?>
					<th scope="col" class="text-center">Aksi</th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($result as $data) { ?>
				<tr>
					<td><?=$data->nomor;?></td>
					<td><?=$data->keterangan;?></td>
					<td><?=date('d/m/Y', strtotime($data->tanggal));?></td>
					<td><?=ucwords($data->jenis);?></td>
					<td>Rp <?=number_format($data->jumlah,2,',','.');?></td>
					<?php if ($this->session->userdata('logged_in') == TRUE) { ?>
					<?php
					if ($data->jenis == 'masuk'){
						$uri = 'pemasukan';
					}else{
						$uri = 'pengeluaran';
					}
					?>
					<td class="text-center">
						<a href="<?=base_url('kas/edit_'.$uri.'/'.$data->nomor);?>"><span
								class="badge badge-pill badge-success"><i class="fa fa-edit"></i> Edit</span></a> &nbsp;
						<a href="<?=base_url('kas/hapus_'.$uri.'/'.$data->nomor);?>"
							onclick="return confirm('Anda yakin ingin menghapus data ini?');"><span
								class="badge badge-pill badge-danger"><i class="fa fa-trash"></i> Hapus</span></a>
					</td>
					<?php } ?>
				</tr>
				<?php } ?>
			</tbody>
			<thead>
				<?php
				error_reporting(0);
				foreach ($ttl_masuk as $total_masuk) {
					$jumlah_masuk += $total_masuk->jumlah;
				}
				foreach ($ttl_keluar as $total_keluar) {
					$jumlah_keluar += $total_keluar->jumlah;
				}
				$jumlah = $jumlah_masuk-$jumlah_keluar;
			?>
				<tr>
					<th colspan="4" scope="col">TOTAL <small>(Pemasukan dan Pengeluaran Tanggal
							<?=date('d/m/Y', strtotime($data->tanggal));?>)</small></th>
					<th scope="col">Rp. <?=number_format($jumlah,2,',','.');?></th>
					<?php if ($this->session->userdata('logged_in') == TRUE) { ?>
					<th colspan="2" scope="col">&nbsp;</th>
					<?php } ?>
				</tr>
			</thead>
		</table>
		<?php 
		echo $halaman; 
	} 
	?>