<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="carouselIndicators" data-slide-to="0" class="active"></li>
		<li data-target="carouselIndicators" data-slide-to="1"></li>
		<li data-target="carouselIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" style="width: 100%; height: 250px !important;">
		<div class="carousel-item active">
			<img class="d-block w-100" src="<?=base_url('assets/img/pexels-nataliya-vaitkevich-7172825.jpg'); ?>"
				alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?=base_url('assets/img/pexels-nataliya-vaitkevich-8062289.jpg'); ?>"
				alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?=base_url('assets/img/pexels-nataliya-vaitkevich-7172827.jpg'); ?>"
				alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<br>

<?php if ($this->session->flashdata('message')) { ?>
<div class="alert alert-dismissible alert-danger col-9 mx-auto" style="border-radius: 15px;">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<p class="mb-0"><?php echo $this->session->flashdata('message');?></p>
</div>
<?php } ?>

<?php if ($this->session->flashdata('message_login')) { ?>
<div class="alert alert-dismissible alert-success col-9 mx-auto" style="border-radius: 15px;">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<p class="mb-0"><?php echo $this->session->flashdata('message_login');?></p>
</div>
<?php } ?>

<div class="container">
	<h2>Tentang Perusahaan</h2>
	<div class="accordion" id="accordionExample">
		<div class="card" style="border-radius: 15px;">
			<div class="card-header center" id="headingOne">
				<h5 class="mb-0">
					<button class="btn btn-link text-dark" type="button" data-toggle="collapse"
						data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Sejarah Perusahaan
					</button>
				</h5>
			</div>
			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="card-body">
					<img src="<?=base_url('assets/img/logo-rh.png'); ?>" class="center"
						style="width: 150px; height:80px;"><br>
					<p align="justify"">PT. Rajawali Hiyoto adalah perusahaan industri cat dan bahan bangunan yang sudah berdiri sejak tanggal 21 Agustus 1973. PT. Rajawali Hiyoto beralamat di Jalan Industri II No 8 Leuwi Gajah Cimahi. Didirikan oleh Bapak Lauw Kok Men di Bandung. Pada awal pertama berdiri, PT. Rajawali Hiyoto memfokuskan diri kepada produksi untuk cat tembok. Seiring berjalannya waktu, maka PT. Rajawali Hiyoto berubah menjadi perusahaan industri cat dengan cakupan distribusi ke hampir seluruh wilayah Indonesia. Saat ini, produk yang dihasilkan oleh PT. Rajawali Hiyoto adalah cat Decorative Water Based dan Solvent Based, Chemical Construction dan Automotive paint.</p>
					<p align=" justify">Tahun 2000, PT. Rajawali Hiyoto melakukan ekspansi perluasan bangunan pabrik di Jalan Industri
						Cimahi. Perluasan ini dimaksudkan untuk menambah kapasitas produksi berdasarkan pada permintaan
						konsumen yang semakin tinggi. Pada tahun 2002, PT. Rajawali Hiyoto membangun pabrik untuk
						produksi Pigment Paste yaitu pewarna yang dipergunakan untuk memberikan warna pada cat yang
						diproduksi. Pada tahun 2004, berdiri pabrik Chemical Construction yang membuat produk produk
						bahan bangunan ( building material ) seperti pengisi nat pada keramik, pelapis anti bocor dan
						lain lain.</p>
					<p align="justify">Pada tahun 2010, PT. Rajawali Hiyoto memiliki 32 Cabang di seluruh Indonesia dan
						3 Depo. Cabang tersebut adalah Ambon, Medan, Padang, Palembang, Pekanbaru, Jambi, Bengkulu,
						Lampung, Jakarta, Bandung Barat, Bandung Timur, Semarang, Yogyakarta, Malang, Surabaya, Bali,
						Sampit, Pontianak, Samarinda, Banjarmasin, Manado, Makasar, Kendari, Cirebon, Kupang, Bangka
						Belitung, Jember, Bekasi, Bogor, Palu, Tasikmalaya dan Depo Batam, Palopo dan Lombok.</p>
					<p align="justify">Ekspansi pembukaan cabang cabang baru terus dilakukan oleh PT. Rajawali Hiyoto
						dalam rangka mengembangkan luas area penjualannya. Untuk tahun 2012 – 2015, PT. Rajawali Hiyoto
						membidik pasar Indonesia Timur sebagai area pengembangan bisnisnya.
						<p align="justify">Value nilai nilai yang dianut oleh PT. Rajawali Hiyoto adalah :</p>
						<li>Customer Oriented</li>
						<li>Integrity</li>
						<li>Passion for Growth</li>
						<li>Teamwork</li>
						<li>Agile</li><br>
						<p align="justify">PT. Rajawali Hiyoto memiliki komitment untuk menjadi perusahaan yang semakin
							dikenal oleh masyarakat sebagai industri cat dan bahan bangunan. Sementara untuk misi, PT.
							Rajawali Hiyoto bertekad untuk menyediakan produk yang dapat diterima oleh konsumen yang
							lebih inovative dan ramah lingkungan. Berkomitmen untuk pengembangan sumber daya manusia.
							Bertekad untuk lebih memberikan kesejahteraan bagi semua pihak yang terlibat dalam bisnis
							PT. Rajawali Hiyoto, serta bertekad untuk menyelenggarakan pengelolaan organisasi yang baik.
						</p>
				</div>
			</div>
		</div>
		<div class="card" style="border-radius: 15px;">
			<div class="card-header center" id="headingTwo">
				<h5 class="mb-0">
					<button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse"
						data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Visi & Misi
					</button>
				</h5>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				<div class="card-body">
					<strong>VISI</strong>
					<p>Indonesia with wide-range of innovative, high quality, and environmental friendly coatings.</p>
					<strong>MISI</strong>
					<li>Continuously innovate in high quality coating products development in order to achieve
						satisfaction of all customer segments.</li>
					<li>Committed to become a role model of green coating company in Indonesia.</li>
					<li>Contribute in Indonesian global competitiveness through strategic and sustainable human
						resources development.</li>
					<li>Facilitate Good Corporate Governance practices to assure company’s value creation to all
						stakeholders.</li>
				</div>
			</div>
		</div>
		<div class="card" style="border-radius: 15px;">
			<div class="card-header center" id="headingThree">
				<h5 class="mb-0">
					<button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse"
						data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						Struktur Organisasi
					</button>
				</h5>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				<div class="card-body" style="margin-bottom: 50px;">
					<strong>Struktur Organisasi PT. Rajawali Hiyoto adalah sebagai berikut :</strong><br>
					<strong>1. Direktur / Board of Director</strong>
					<p>sebagai pimpinan tertinggi dari PT. Rajawali Hiyoto, sebagai pengarah dan penanggung jawab
						seluruh aktivitas bisnis PT. Rajawali Hiyoto.</p>
					<strong>2. Internal Audit Department</strong>
					<p>sebagai department yang melakukan fungsi audit keuangan dan system administrasi di PT. Rajawali
						Hiyoto.</p>
					<strong>3. Corporate Plan Department</strong>
					<p>sebagai department yang memfasilitasi penyusunan rencana bisnis PT. Rajawali Hiyoto di tahun
						tahun berikutnya.</p>
					<strong>4. Compliance Committee</strong>
					<p>sebagai divisi yang memastikan operasional dan sistem kerja sesuai dengan SOP dan aturan yang
						berlaku.</p>
					<strong>5. Research & Development Division</strong>
					<p>sebagai Divisi yang melakukan fungsi penelitian dan pengembangan produk di PT. Rajawali Hiyoto.
					</p>
					<strong>6. Management Information System Division</strong>
					<p>sebagai Divisi yang melakukan fungsi untuk pengelolaan infrastruktur dan struktur teknologi
						informasi di PT. Rajawali Hiyoto.</p>
					<strong>7. Human Capital & General Affair Divisionv</strong>
					<p>sebagai Divisi yang melakukan fungsi penyediaan dan pengelolaan tenaga kerja dan pengelolaan
						fasilitas tenaga kerja di PT. Rajawali Hiyoto.</p>
					<strong>8. Supply Chain Division</strong>
					<p>sebagai Divisi yang melakukan fungsi operasional manufaktur, distribusi produk, pengelolaan
						rantai pasokan produk PT. Rajawali Hiyoto dimulai dari order konsumen hingga produknya dapat
						diterima oleh konsumen.</p>
					<strong>9. TMIS Division</strong>
					<p>sebagai Divisi yang melakukan fungsi Penjualan PT. Rajawali Hiyoto.</p>
					<strong>10. Marketing Division</strong>
					<p>sebagai Divisi yang melakukan fungsi Pemasaran PT. Rajawali Hiyoto.</p>
					<strong>11. Tax, Accounting , & Finance Division</strong>
					<p>sebagai Divisi yang melakukan fungsi untuk pengelolaan keuangan, pencatatan keuangan, pembelian
						di PT. Rajawali Hiyoto.</p>
				</div>
			</div>
		</div>
	</div>
</div>