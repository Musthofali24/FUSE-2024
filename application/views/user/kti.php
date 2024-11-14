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
					<a href="<?=base_url('landing');?>" target="_blank">
						<img src="<?php echo base_url('/assets/img/FUSE.webp'); ?>" alt="" />
					</a>
				</div>
				<ul class="menu">
					<li><a href="<?=base_url('landing');?>">Home</a></li>
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
					<a href="<?= base_url('landing/kti'); ?>">Daftar</a>
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
					<img src="<?php echo base_url('/assets/img/cards/4.webp'); ?>" alt="" />
				</div>
				<div class="box">
					<div class="card_title">
						<h1>Karya Tulis Ilmiah</h1>
						<h2>Tingkat Umum</h2>
					</div>
					<p>
						Lomba Karya Tulis Ilmiah per individu ini mengambil tema Inovasi Teknologi untuk Mewujudkan Pembangunan Berkelanjutan, dan untuk waktu submission karya mulai tanggal 1 Januari.
					</p>
					<div class="link">
						<a class="biaya" disabled="disabled">Rp. 85.000</a>
					</div>

					<a href="https://drive.google.com/drive/folders/18MZF-hlXg56WAebyl4XS_xeaLq0KksAn?usp=sharing"
						target="_blank">Guide</a>
					<a href="<?= base_url('register/kti'); ?>">Daftar</a>
					<a href="<?=base_url('landing/upload_kti')?>">Pengumpulan</a>
				</div>
			</div>
		</div>
	</div>
	<div class="contact" id="contact">
		<div class="container">
			<h1 class="title">CONTACT</h1>
			<div class="contact-box">
				<div class="box">
					<a href="https://wa.link/8ywyl4" target="_blank"><i class="ri-whatsapp-line"></i>
						<div class="cp">
							<h2>081382764860</h2>
							<p>Yanti Sholihah</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
