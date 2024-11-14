<body>
	<!-- particles.js container -->
	<div id="particles-js"></div>

	<!-- Navbar  -->

	<div class="navbar animate__animated animate__fadeInDown animate__delay-2s">
		<div class="container">
			<div class="navbar-box">
				<div class="logo">
					<a href="https://himamopolman.org/" target="_blank"><img
							src="<?php echo base_url('/assets/img/HIMAMO.png'); ?>" alt="" /></a>
					<a href="https://polman-bandung.ac.id/" target="_blank"><img
							src="<?php echo base_url('/assets/img/POLMAN.webp'); ?>" alt="" /></a>
					<a href=""><img src="<?php echo base_url('/assets/img/FUSE.webp'); ?>" alt="" /></a>
				</div>
				<ul class="menu">
					<li><a href="#home">Home</a></li>
					<li><a href="#category">Category</a></li>
					<li><a href="#timeline">Timeline</a></li>
					<li><a href="<?= base_url('landing/assets'); ?>">Assets</a></li>
					<li><a href="#faq">FAQ</a></li>
					<li><a href="#footer">Contact</a></li>
				</ul>
				<div class="btn_nav">
					<a href="#">Daftar</a>
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
				<div class="astro">
					<img class="astro1" src="<?php echo base_url('/assets/img/icon/1 Right.webp'); ?>" alt="" />
					<img class="astro2" src="<?php echo base_url('/assets/img/icon/1 Left.webp'); ?>" alt="" />
				</div>
				<img class="fuse" src="<?php echo base_url('/assets/img/FUSE.webp'); ?>" alt="FUSE 2024" />
				<h2 class="auto-type"></h2>
				<h1 class="animate__animated animate__fadeInUp animate__delay-2s">
					FUSE 2025
				</h1>
				<a href="#category">
					<p>Daftar</p>
					<i class="ri-arrow-down-line"></i>
				</a>
			</div>
		</div>
	</div>

	<!-- COUNTDOWN -->

	<div class="clock">
		<div class="container">
			<div class="clock-box">
				<div class="box">
					<h1>COMING SOON</h1>
					<!--<div class="countdown" id="countdown">-->
					<!--	<div class="countdown-item">-->
					<!--		<span class="number" id="days">0</span>-->
					<!--		<span class="text">Days</span>-->
					<!--	</div>-->
					<!--	<div class="countdown-item">-->
					<!--		<span class="number" id="hours">0</span>-->
					<!--		<span class="text">Hours</span>-->
					<!--	</div>-->
					<!--	<div class="countdown-item">-->
					<!--		<span class="number" id="minutes">0</span>-->
					<!--		<span class="text">Minutes</span>-->
					<!--	</div>-->
					<!--	<div class="countdown-item">-->
					<!--		<span class="number" id="seconds">0</span>-->
					<!--		<span class="text">Seconds</span>-->
					<!--	</div>-->
					<!--</div>-->
				</div>
			</div>
		</div>
	</div>

	<!-- CATEGORY -->
	<div class="category" id="category">
		<div class="container">
			<div class="category-box">
				<h1 class="title" data-aos="fade-up" data-aos-duration="500">
					CATEGORY
				</h1>
				<div class="category-box-flex">
                    <div class="box" data-aos="fade-up" data-aos-duration="500">
                        <a href="#" class="disable-link">
                            <img src="<?php echo base_url('/assets/img/cards/2.webp'); ?>" alt="" />
                        </a>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-duration="500">
                        <a href="#" class="disable-link">
                            <img src="<?php echo base_url('/assets/img/cards/1.webp'); ?>" alt="" />
                        </a>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-duration="500">
                        <a href="#" class="disable-link">
                            <img src="<?php echo base_url('/assets/img/cards/3.webp'); ?>" alt="" />
                        </a>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-duration="500">
                        <a href="#" class="disable-link">
                            <img src="<?php echo base_url('/assets/img/cards/4.webp'); ?>" alt="" />
                        </a>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-duration="500">
                        <a href="#" class="disable-link">
                            <img src="<?php echo base_url('/assets/img/cards/5.webp'); ?>" alt="" />
                        </a>
                    </div>
                </div>
			</div>
		</div>
	</div>

	<!-- Greeting -->

	<div class="greet">
		<div class="container">
			<div class="greet-box" data-aos="fade-up" data-aos-duration="500">
				<h1>
					"Sparkling beneath the stars, <br />
					crafting future in automation symphony"
				</h1>
			</div>
		</div>
	</div>

	<!-- TIMELINE -->

	<div class="timeline" id="timeline">
		<div class="container">
			<h1 class="title" data-aos="fade-up" data-aos-duration="500">
				TIMELINE
			</h1>
			<div class="timeline-box left-box">
				<img class="target" src="<?php echo base_url('/assets/img/icon/circle.png'); ?>" alt="" />
				<div class="timeline-box-items">
					<img class="item" data-aos="fade-up" data-aos-duration="500"
						src="<?php echo base_url('/assets/img/timeline/1.webp'); ?>" alt="" />
				</div>
			</div>
			<div class="timeline-box right-box">
				<img class="target" src="<?php echo base_url('/assets/img/icon/circle.png'); ?>" alt="" />
				<div class="timeline-box-items">
					<img class="item" data-aos="fade-up" data-aos-duration="500"
						src="<?php echo base_url('/assets/img/timeline/2.webp'); ?>" alt="" />
				</div>
			</div>
			<div class="timeline-box left-box">
				<img class="target" src="<?php echo base_url('/assets/img/icon/circle.png'); ?>" alt="" />
				<div class="timeline-box-items">
					<img class="item" data-aos="fade-up" data-aos-duration="500"
						src="<?php echo base_url('/assets/img/timeline/3.webp'); ?>" alt="" />
				</div>
			</div>
			<div class="timeline-box right-box">
				<img class="target" src="<?php echo base_url('/assets/img/icon/circle.png'); ?>" alt="" />
				<div class="timeline-box-items">
					<img class="item" data-aos="fade-up" data-aos-duration="500"
						src="<?php echo base_url('/assets/img/timeline/4.webp'); ?>" alt="" />
				</div>
			</div>
			<div class="timeline-box left-box">
				<img class="target" src="<?php echo base_url('/assets/img/icon/circle.png'); ?>" alt="" />
				<div class="timeline-box-items">
					<img class="item" data-aos="fade-up" data-aos-duration="500"
						src="<?php echo base_url('/assets/img/timeline/5.webp'); ?>" alt="" />
				</div>
			</div>
		</div>
	</div>

	<!-- LIVE COUNT -->

	<div class="count">
		<div class="container">
			<div class="count-box">
				<div class="box">
					<h1 data-aos="fade-up" data-aos-duration="500">
						Get Ready to be the one in the future
					</h1>
				</div>
				<div class="box">
					<h1>
						<?= $jumlah_peserta['jumlah'] ?>
					</h1>
					<h2>Peserta</h2>
				</div>
				<div class="box">
					<h1>
						<?= $jum_tim ?>
					</h1>
					<h2>Tim</h2>
				</div>
			</div>
		</div>
	</div>

	<!-- FAQ -->

	<div class="faq" id="faq">
		<div class="container">
			<h1 class="title" data-aos="fade-up" data-aos-duration="500">FAQ</h1>
			<div class="faq-box">
				<ul class="accordion" data-aos="fade-up" data-aos-duration="500">
					<li>
						<input type="checkbox" name="accordion" id="first" />
						<label for="first">Bagaimana teknis acara FUSE 2024 dilaksanakan?</label>
						<div class="content">
							<p>
								Acara akan dilaksanakan secara online pada tanggal 15 untuk
								technical meeting dan 17 Februari untuk qualification online dan
								dilanjutkan secara offline pada tanggal 23-24 Februari
							</p>
						</div>
					</li>
					<li>
						<input type="checkbox" name="accordion" id="second" />
						<label for="second">Dimana lokasi FUSE 2024 diselenggarakan?</label>
						<div class="content">
							<p>
								Acara akan dilaksanakan di Politeknik Manufaktur Bandung yang
								terletak di Jl. Kanayakan No.21, Dago, Kecamatan Coblong, Kota
								Bandung, Jawa Barat 40135
							</p>
						</div>
					</li>
					<li>
						<input type="checkbox" name="accordion" id="third" />
						<label for="third">Apa saja benefit yang didapatkan jika berpartisipasi dalam
							lomba FUSE 2024 ini?</label>
						<div class="content">
							<p>
								Peserta yang berhasil meraih gelar juara akan mendapatkan
								hadiah, sertifikat nasional dan piala.
							</p>
						</div>
					</li>
					<li>
						<input type="checkbox" name="accordion" id="fourth" />
						<label for="fourth">Ada berapa cabang lomba di FUSE 2024 ini?</label>
						<div class="content">
							<p>
								Terdapat 5 Lomba, yaitu PLC Tingkat SMK, PLC Tingkat
								Universitas, Line Follower Tingkat SMK, KTI , dan Poster
							</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- SPONSORSHIP -->
	<div class="partner" id="partner">
		<div class="container">
			<div class="partner-box">
				<h1 class="title">ORGANIZED BY</h1>
				<div class="partner-box-flex">
					<img src="<?php echo base_url('/assets/img/OTOMASI.webp'); ?>" alt="" />
					<img src="<?php echo base_url('/assets/img/HIMAMO.png'); ?>" alt="" />
					<img src="<?php echo base_url('/assets/img/POLMAN.webp'); ?>" alt="" />
				</div>
			</div>
		</div>
	</div>

	<!-- SPONSORSHIP  -->
	<div class="partner" id="partner">
		<div class="container">
			<div class="partner-box">
				<h1 class="title">SPONSORED BY</h1>
                <div class="partner-box-flex">
                    <img src="<?php echo base_url('/assets/img/sponsor/omron.png'); ?>" alt="" />
			        <img src="<?php echo base_url('/assets/img/sponsor/AM.webp'); ?>" alt="" />
			        <img src="<?php echo base_url('/assets/img/sponsor/TMI.webp'); ?>" alt="" />
			        <img src="<?php echo base_url('/assets/img/sponsor/GMI.webp'); ?>" alt="" />
			        <img src="<?php echo base_url('/assets/img/sponsor/GTX.webp'); ?>" alt="" />
			        <img src="<?php echo base_url('/assets/img/sponsor/NAT.webp'); ?>" alt="" />
			        <img src="<?php echo base_url('/assets/img/sponsor/DPT.webp'); ?>" alt="" />
	                
			    </div>
			</div>
		</div>
	</div>

	<!-- SPONSORSHIP  -->
	<div class="partner" id="partner">
		<div class="container">
			<div class="partner-box">
				<h1 class="title">SUPPORT BY</h1>
				    <div class="partner-box-flex">
                        <img src="<?php echo base_url('/assets/img/sponsor/CSRC.png'); ?>" alt="" />
                        <img src="<?php echo base_url('/assets/img/sponsor/PK.png'); ?>" alt="" />
                        <img src="<?php echo base_url('/assets/img/sponsor/LEL.png'); ?>" alt="" />
                        <img src="<?php echo base_url('/assets/img/sponsor/ORISKIN.webp'); ?>" alt="" />
                    </div>
			</div>
		</div>
	</div>

	<!-- LOCATION -->
	<div class="location" id="location">
		<div class="container">
			<h1 class="title" data-aos="fade-up" data-aos-duration="500">
				LOCATION
			</h1>
			<div class="location-box">
				<div class="box" data-aos="fade-up" data-aos-duration="500">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.108703974994!2d107.61539189678955!3d-6.877578099999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6fd1653ca0f%3A0xac82e41858b63f34!2sBandung%20Polytechnic%20of%20Manufacturing!5e0!3m2!1sen!2sid!4v1698802708018!5m2!1sen!2sid"
						width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="box" data-aos="fade-up" data-aos-duration="500">
					<h1>
						<i class="ri-map-pin-line"></i> Politeknik Manufaktur Bandung
					</h1>
					<p>
						Jl. Kanayakan No.21, Dago, Kecamatan Coblong, Kota Bandung, Jawa
						Barat 40135
					</p>
					<div class="box-social">
						<ul>
							<li>
								<a href="https://instagram.com/fuse.polman?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><i
										class="ri-instagram-line"></i></a>
							</li>
							<li>
								<a href="https://www.youtube.com/@FusePolmanBandung" target="_blank"><i
										class="ri-youtube-fill"></i></a>
							</li>
							<li>
								<a href="https://fuse2024.com/" target="_blank"><i
										class="ri-global-line"></i></a>
							</li>
							<li>
								<a href="#"><i class="ri-phone-fill"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- preloader -->
	<div class="loader">
		<img src="<?php echo base_url('/assets/img/FUSE.webp'); ?>" alt="" />
	</div>
