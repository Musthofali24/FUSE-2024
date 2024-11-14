<body>
	<!-- particles.js container -->
	<div id="particles-js"></div>

	<!-- FORM REGISTRATION -->
	<!-- FORM REGISTRATION -->
	<div class="form_regist">
		<div class="container">
			<?php
			$error_message = $this->session->flashdata('error');
			$upload_errors = $this->session->flashdata('upload_errors');

			if (!empty($error_message)) {
				echo '<div class="alert alert-danger">' . $error_message . '</div>';
			}

			if (!empty($upload_errors)) {
				echo '<div class="alert alert-danger">Upload Errors:<br>';
				foreach ($upload_errors as $error) {
					echo '- ' . $error . '<br>';
				}
				echo '</div>';
			}
			?>
			<header>
				Welcome To <br />
				<span>FUSE 2024</span>
			</header>
			<div class="astro">
				<img class="astro1" src="<?php echo base_url('/assets/img/icon/1 Right.webp'); ?>" alt="" />
				<img class="astro2" src="<?php echo base_url('/assets/img/icon/1 Left.webp'); ?>" alt="" />
			</div>

			<form action="<?= base_url('upload/upload_kti'); ?>" class="form" method="post"
				enctype="multipart/form-data">
				<div class="input-box">
					<label for="team-name">Team Name <span>*</span></label>
					<input type="text" name="team-name" id="team-name" placeholder="Enter team name" required />
				</div>
				<div class="input-box">
					<label for="leader-name">Team Leader's Name <span>*</span></label>
					<input type="text" name="leader-name" id="leader-name" placeholder="Enter leader name" required />
				</div>
				<div class="input-box">
					<label for="title-name">KTI Title <span>*</span></label>
					<input type="text" name="title-name" id="title-name" placeholder="Enter title name" required />
				</div>
				<div class="column">
					<div class="input-box">
						<label for="member1-name">Member 1 Name <span>*</span></label>
						<input type="text" name="member1-name" id="member1-name" placeholder="Enter member 1 name"
							required />
					</div>
					<div class="input-box">
						<label for="member2-name">Member 2 Name <span>*</span></label>
						<input type="text" name="member2-name" id="member2-name" placeholder="Enter member 2 name"
							required />
					</div>
				</div>
				<div class="input-box">
					<label for="leader-number">Nomor WA Aktif (Ketua Tim) <span>*</span></label>
					<input type="text" name="leader-number" placeholder="Enter leader number" required />
				</div>
				<div class="input-box">
					<label for="email">Email <span>*</span></label>
					<input type="text" name="email" id="email" placeholder="Enter team name" required />
				</div>
				<div class="input-box">
					<label for="file-kti">Format File Pengumpulan "KTI_NamaTim_Asal Sekolah"
						<span>( Berbentuk PDF ) *</span></label>
					<input type="file" name="file-kti" size="4096" accept=".pdf" required />
				</div>
				<div class="input-box">
					<button type="submit" name="submit">Submit</button>
				</div>
				<div class="input-box">
					<button type="button" name="button"><a href="<?= base_url('landing'); ?>"
							style="color:white;">Back</a></button>
				</div>
			</form>
		</div>
	</div>
