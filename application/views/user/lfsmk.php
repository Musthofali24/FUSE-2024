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
					<img src="<?php echo base_url('/assets/img/cards/2.webp'); ?>" alt="" />
				</div>
				<div class="box">
					<div class="card_title">
						<h1>Line Follower</h1>
						<h2>Tingkat SMK</h2>
					</div>
					<p>
						Lomba Line Follower SMK adalah kompetisi robotika di mana siswa
						SMK merancang, memprogram, dan menguji robot untuk mengikuti jalur
						atau garis yang telah ditentukan.
					</p>
					<div class="link">
						<a class="biaya" disabled="disabled">Rp. 110.000</a>
					</div>

					<a href="https://drive.google.com/drive/folders/1fkEUPTEqPqA6J13khb5qyvDmwB-ISYa3?usp=sharing"
						target="_blank">Guide</a>
					<a href="<?= base_url('register/lf'); ?>">Daftar</a>
				</div>
			</div>
		</div>
	</div>
	<div class="contact" id="contact">
		<div class="container">
			<h1 class="title">CONTACT</h1>
			<div class="contact-box">
				<div class="box">
					<a href="https://wa.link/t18vew" target="_blank"><i class="ri-whatsapp-line"></i>
						<div class="cp">
							<h2>085794765451</h2>
							<p>Karimah Muthmainnah</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
