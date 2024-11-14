<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- FAVICON -->
	<link rel="shortcut icon" href="<?php echo base_url('/assets/img/FUSE.webp'); ?>" type="image/x-icon" />

	<!-- REMIX ICON -->
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />

	<!-- TIMELINE CSS -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/timeline.css'); ?>" />

	<!-- HAMBURGER CSS -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/hamburger.css'); ?>" />

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/style2.css'); ?>" />
	<title>FUSE 2024 | ASSETS</title>
</head>

<body>
	<!-- particles.js container -->
	<div id="particles-js"></div>

	<!-- Navbar  -->

	<div class="navbar animate__animated animate__fadeInDown animate__delay-2s">
		<div class="container">
			<div class="navbar-box">
				<div class="logo">
					<a href="https://himamopolman.org/" target="_blank"><img
							src="<?php echo base_url('/assets/img/POLMAN.webp'); ?>" alt="" /></a>
					<a href="https://polman-bandung.ac.id/" target="_blank"><img
							src="<?php echo base_url('/assets/img/OTOMASI.webp'); ?>" alt="" /></a>
					<a href="<?= base_url('landing');?>"><img src="<?php echo base_url('/assets/img/FUSE.webp'); ?>" alt="" /></a>
				</div>
				<ul class="menu">
					<li><a href="<?= base_url('landing'); ?>">Home</a></li>
					<li><a href="<?= base_url('user/assets'); ?>">Assets</a></li>
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

	<!-- ASSETS -->
	<div class="assets" id="home">
		<div class="container">
			<h1 class="title" data-aos="fade-up" data-aos-duration="500">ASSETS</h1>
			<div class="assets-box">
				<div class="set-box">
					<h1>BUKU PANDUAN</h1>
					<a href="https://drive.google.com/file/d/1FqrYYgZHrUf0bKw54B8QL54d3EmomOTK/view?usp=sharing"
						target="_blank"><img src="<?php echo base_url('/assets/img/panduan/BP-LF.webp');?>" alt="" /></a>
					<a href="https://drive.google.com/file/d/11jBmwO9GAVrbr9rsEZHTK2U1k4qkVMz0/view?usp=sharing"
						target="_blank"><img src="<?php echo base_url('/assets/img/panduan/BP-PLC-SMK.webp');?>" alt="" /></a>
					<a href="https://drive.google.com/file/d/1m08-WfPTVlkibkFYzUFaA-osc2lUEafG/view?usp=sharing"
						target="_blank"><img src="<?php echo base_url('/assets/img/panduan/BP-PLC-UNIV.webp');?>" alt="" /></a>
					<a href="https://drive.google.com/drive/folders/1mw00kUzUQNv2EMkXZnq8HZZOWBFvRpOe?usp=sharing"
						target="_blank"><img src="<?php echo base_url('/assets/img/panduan/BP-POSTER.webp');?>" alt="" /></a>
					<a href="https://drive.google.com/drive/folders/18MZF-hlXg56WAebyl4XS_xeaLq0KksAn?usp=sharing"
						target="_blank"><img src="<?php echo base_url('/assets/img/panduan/BP-KTI.webp');?>" alt="" /></a>
					<a href="https://docs.google.com/document/d/15Jla1euji_pcQQicx8pF1cXD3R8L9M6n/edit?usp=sharing&ouid=111910613798562257621&rtpof=true&sd=true"
						target="_blank"><img src="<?php echo base_url('/assets/img/panduan/ORISINALITAS.webp');?>" alt="" /></a>
					<a href="https://drive.google.com/drive/folders/1dyVP6Ci-M33PCELqRqhxPIw01PbJ2QJZ?usp=sharing"
						target="_blank"><img src="<?php echo base_url('/assets/img/panduan/TWIBBON.webp');?>" alt="" /></a>
					<a href="#instalasi"><img src="<?php echo base_url('/assets/img/panduan/DOWNLOAD-SOFTWARE.webp');?>" alt="" /></a>
					<a href="https://bit.ly/CXONE_TrialV461" target="_blank"><img src="<?php echo base_url('/assets/img/panduan/SOFTWARE-CX.webp');?>"
							alt="" /></a>
				</div>
				<div class="set-box" id="instalasi">
					<h1>TUTORIAL DOWNLOAD</h1>
					<div class="flex-video">
						<div class="video-box">
							<p>Instalasi CX Omron</p>
							<iframe width="560" height="315"
								src="https://www.youtube.com/embed/MUh5OlewTYg?si=0UYOQ2vCFFc8gETb"
								title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
								allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
