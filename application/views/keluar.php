<div class="container" style="margin-top: 60px;">
	<br>
	<h2>List Pengeluaran <a href="<?=base_url('kas/pengeluaran');?>" title="Tambah"><i class="fa fa-plus-square"
				style="color: royalblue;"></i></a></h2>
	<?php if ($this->session->flashdata('message')) { ?>
	<div class="alert alert-dismissible alert-success" style="border-radius: 15px;">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<p class="mb-0"><?php echo $this->session->flashdata('message');?></p>
	</div>
	<?php } ?>
	<table class="table table-hover table-striped">
		<thead class="thead">
			<tr>
				<th scope="col">Nomor</th>
				<th scope="col">Keterangan</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Jumlah</th>
				<th scope="col" class="text-center">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($result as $data) { ?>
			<tr>
				<td><?=$data->nomor;?></td>
				<td><?=$data->keterangan;?></td>
				<td><?=date('d/m/Y', strtotime($data->tanggal));?></td>
				<td>Rp <?=number_format($data->jumlah,2,',','.');?></td>
				<td class="text-center">
					<a href="<?=base_url('kas/edit_pengeluaran/'.$data->nomor);?>"><span
							class="badge badge-pill badge-success"><i class="fa fa-edit"></i> Edit</span></a> &nbsp;
					<a href="<?=base_url('kas/hapus_pengeluaran/'.$data->nomor);?>"
						onclick="return confirm('Anda yakin ingin menghapus data ini?');"><span
							class="badge badge-pill badge-danger"><i class="fa fa-trash"></i> Hapus</span></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
		<thead>
			<?php
		error_reporting(0);
		foreach ($ttl as $total) {
			$jumlah += $total->jumlah;
		}
	?>
			<tr>
				<th colspan="3" scope="col">TOTAL <small>(Pengeluaran)</small></th>
				<th scope="col">Rp. <?=number_format($jumlah,2,',','.');?></th>
				<th scope="col">&nbsp;</th>
			</tr>
		</thead>
	</table>
	<?=$halaman;?>