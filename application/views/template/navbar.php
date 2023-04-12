<nav class="navbar-expand-lg navbar-dark bg-primary navbar fixed-top">
	<div class="container">
		<a class="navbar-brand font-weight-bold" href="<?=base_url();?>">
			<img src="<?=base_url('assets/img/rh-logo.jpg'); ?>" width="30" height="30" style="border-radius: 3px;">
			Kas MIS
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
			aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('');?>"><i class="fa fa-home"></i> &nbsp;Beranda</a>
				</li>
				<?php if ($this->session->userdata('logged_in') == TRUE) {?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-expanded="false"><i class="fa fa-money"></i>
						Kas
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown"
						style="border-radius: 10px; opacity: 87%;">
						<a class="dropdown-item font-weight-bold" href="<?=base_url('kas/masuk');?>"><i
								class="fa fa-level-up"></i>
							&nbsp; Pemasukan</a>
						<a class="dropdown-item font-weight-bold" href="<?=base_url('kas/keluar');?>"><i
								class="fa fa-level-down"></i>
							&nbsp; Pengeluaran</a>
					</div>
				</li>
				<?php } ?>
				<li class="nav-item">
					<a class="nav-link font-weight-bold" href="<?=base_url('kas/laporan');?>"><i
							class="fa fa-file-o"></i>
						&nbsp;Laporan</a>
				</li>
				<?php if ($this->session->userdata('logged_in') == TRUE) {?>
				<li class="nav-item">
					<a class="nav-link font-weight-bold" href="<?=base_url('kas/hapus_all_data');?>"><i
							class="fa fa-trash-o"></i>
						&nbsp;Hapus Seluruh Data</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<form class="form-inline my-2 my-lg-0" action="<?=base_url('kas/cari');?>" method="GET">
					<input name="s" class="form-control mr-sm-2" type="text" placeholder="Masukan kata pencarian"
						style="width: 200px;">
					<button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
				</form>
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle-o"></i>
						<span><?=$this->session->userdata('name');?></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown"
						style="border-radius: 10px; opacity: 87%;">
						<a class="dropdown-item font-weight-bold" href="<?= base_url('akun/profile'); ?>">
							<i class="fa fa-user-o"></i> Profile
						</a>
						<a class="dropdown-item font-weight-bold" href="<?= base_url('kas/logout'); ?>"
						onclick="return confirm('Anda yakin ingin logout?');">
							<i class="fa fa-sign-out"></i> Logout
						</a>
					</div>
				</li>
			</ul>
			<?php } ?>
			<?php if ($this->session->userdata('logged_in') == FALSE) {?>
			<ul class="navbar-nav">
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-expanded="false"><i class="fa fa-sign-in"></i>
						<span>Login</span>
					</a>
					<form class="dropdown-menu"
						style="min-width: 350px !important; padding: 15px; border-radius: 10px; opacity: 87%"
						action="<?=base_url('kas/login');?>" method="POST">
						<?php if ($this->session->flashdata('message')) { ?>
						<div class="alert alert-dismissible alert-danger mx-auto">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<p class="mb-0"><?php echo $this->session->flashdata('message');?></p>
						</div>
						<?php } ?>
						<p class="text-center text-danger">** Maaf hanya Bendahara yang dapat Login ** </p>
						<hr>
						<div class="form-group">
							<input type="text" class="form-control" name="username" id="username" placeholder="Username"
								required="">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" id="password"
								placeholder="Password" required="">
						</div>
						<button type="submit" class="btn btn-primary btn-block">Login</button>
						<hr>
						<div class="text text-muted text-center"> &copy <?=date('Y');?> - Kas MIS</div>
					</form>
				</li>
			</ul>
			<?php } ?>
		</div>
</nav>