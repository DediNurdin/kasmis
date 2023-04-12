<div class="container col-lg-4" style="margin-top: 60px;">
	<h2>Profile</h2>
	<div class="card" style="border-radius: 15px;">
		<div class="card-header text-center font-weight-bold"
			style="background:lightcoral; border-radius: 15px; color:lightcyan;">
			Profile Anda
		</div>
		<div class="card-body font-weight-bold" style="border-radius: 15px; background:whitesmoke;">
			<?php foreach ($akun->result() as $result) : ?>
			<label>Nama</label> : <label><?php echo $result->name ?></label><br>
			<label>Username</label> : <label><?php echo $result->username ?></label>
			<?php endforeach; ?>
		</div>
	</div>
</div>