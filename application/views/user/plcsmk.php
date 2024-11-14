<body>
	<!-- particles.js container -->
	<div id="particles-js"></div>

	<!-- Navbar -->

	<div class="navbar">
		<div class="container">
			<div class="navbar-box">
				<div class="logo">
					<a href="https://himamopolman.org/" target="_blank">
						<img src="<?php echo base_url('/assets/img/HIMAMO.png'); ?>" alt="" />
					</a>
					<a href="https://polman-bandung.ac.id/" target="_blank">
						<img src="<?php echo base_url('/assets/img/POLMAN.webp'); ?>" alt="" />
					</a>
					<a href="<?= base_url('landing'); ?>" target="_blank">
						<img src="<?php echo base_url('/assets/img/FUSE.webp'); ?>" alt="" />
					</a>
				</div>
				<ul class="menu">
					<li><a href="<?= base_url('landing'); ?>">Home</a></li>
					<li class="category-menu">
						<a class="dropdown" href="#">Category <i class="ri-arrow-down-s-line"></i></a>
						<ul class="dropdown_list">
							<!--<li><a href="<?= base_url('landing/plcsmk'); ?>">PLC SMK</a></li>-->
							<!--<li><a href="<?= base_url('landing/plcuniv'); ?>">PLC UNIV</a></li>-->
							<!--<li><a href="<?= base_url('landing/lfsmk'); ?>">LF SMK</a></li>-->
							<li><a href="<?= base_url('landing/poster'); ?>">POSTER</a></li>
							<li><a href="<?= base_url('landing/kti'); ?>">KTI</a></li>
						</ul>
					</li>
				</ul>
				<div class="btn_nav">
					<a href="<?= base_url('landing/plcsmk'); ?>">Daftar</a>
				</div>
				<button class="hamburger hamburger--elastic" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
		</div>
	</div>

	<!-- HEADER -->
	<div class="header" id="home">
		<div class="container">
			<div class="header-box">
				<div class="box">
					<img src="<?php echo base_url('/assets/img/cards/1.webp'); ?>" alt="3" />
				</div>
				<div class="box">
					<div class="card_title">
						<h1>Programmable Logic Control</h1>
						<h2>Tingkat SMK</h2>
					</div>
					<p>
						Lomba PLC tingkat SMK adalah kompetisi dimana siswa SMK memprogram
						dan mengoperasikan perangkat PLC dengan menggunakan ladder logic
						untuk mengendalikan mesin atau sistem otomatisasi.
					</p>
					<div class="link">
						<a class="biaya" disabled="disabled">Rp. 130.000</a>
					</div>

					<a href="https://drive.google.com/drive/folders/1WxfN1dFo59E0a86_qr1kkhhTQFavGzqV?usp=sharing"
						target="_blank">Guide</a>
					<a href="<?= base_url('register/plc_smk'); ?>">Daftar</a>
				</div>
			</div>
		</div>
	</div>
	<div class="contact" id="contact">
		<div class="container">
			<h1 class="title">CONTACT</h1>
			<div class="contact-box">
				<div class="box">
					<a href="https://wa.link/u2vqml" target="_blank"><i class="ri-whatsapp-line"></i>
						<div class="cp">
							<h2>08812256244</h2>
							<p>Muhammad Hasib</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
