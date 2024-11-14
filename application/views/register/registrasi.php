<body>
	<!-- particles.js container -->
	<div id="particles-js"></div>

	<!-- FORM REGISTRATION -->
	<!-- FORM REGISTRATION -->
	<div class="form_regist">
		<div class="container">
			<header>
				Welcome To <br />
				<span>FUSE 2024</span>
			</header>
			<div class="astro">
				<img class="astro1" src="<?php echo base_url('/assets/img/icon/1 Right.webp'); ?>" alt="" />
				<img class="astro2" src="<?php echo base_url('/assets/img/icon/1 Left.webp'); ?>" alt="" />
			</div>

			<form action="<?= base_url('register/regist'); ?>" class="form" method="post" enctype="multipart/form-data">
				<div class="input-box">
					<label for="competition-category">Competition Category <span>*</span></label>
					<div class="select-box">
						<select name="competition-category" id="competition-category" required>
							<option value="" disabled selected>CHOOSE ONE</option>
							<option value="LF SMK">LF SMK</option>
							<option value="PLC SMK">PLC SMK</option>
							<option value="PLC UNIVERSITAS">PLC UNIVERSITAS</option>
						</select>
					</div>
				</div>

				<div class="input-box">
					<label for="school-name">School Name <span>*</span></label>
					<input type="text" name="school-name" id="school-name" placeholder="Enter school name" required />
				</div>

				<div class="input-box">
					<label for="team-name">Team Name <span>*</span></label>
					<input type="text" name="team-name" id="team-name" placeholder="Enter team name" required />
				</div>

				<div class="column">
					<div class="input-box">
						<label for="member1-name">Member 1 Name <span>*</span></label>
						<input type="text" name="member1-name" id="member1-name" placeholder="Enter member 1 name"
							required />
					</div>

					<div class="input-box">
						<label for="member2-name">Member 2 Name <span>*</span></label>
						<input type="text" name="member2-name" id="member2-name" placeholder="Enter member 2 name" />
					</div>
				</div>

				<div class="input-box">
					<label for="leader-number">Nomor WA Aktif (Ketua Tim) <span>*</span></label>
					<input type="text" name="leader-number" placeholder="Enter leader number" required />
				</div>

				<div class="input-box">
					<label for="coach-name">Nama pembimbing <span>*</span></label>
					<input type="text" name="coach-name" id="coach-name" placeholder="Enter coach name" required />
				</div>

				<div class="column">
					<div class="input-box">
						<label for="coach-id">NIP/NRP pembimbing <span>*</span></label>
						<input type="text" name="coach-id" id="coach-id" placeholder="Enter NIP/NnameN/NRP" required />
					</div>

					<div class="input-box">
						<label for="coach-number">Nomor WA aktif (pembimbing) <span>*</span></label>
						<input type="text" name="coach-number" id="coach-number" placeholder="Enter coach number"
							required />
					</div>
				</div>

				<div class="input-box">
					<label for="student-card">Surat Keterangan Aktif/Kartu Tanda Pelajar/KTM
						<span>( Jadikan 1 PDF ) *</span></label>
					<input type="file" name="student-card" size="2048" required />
				</div>

				<div class="input-box">
					<label for="twibbon">Bukti upload twibbon ke IG
						<span>( Jadikan 1 PDF ) *</span></label>
					<input type="file" name="twibbon" size="2048" required />
				</div>

				<div class="column">
					<div class="input-box">
						<label for="photo">Foto 3x4 <span>( Jadikan 1 PDF ) *</span></label>
						<input type="file" name="photo" size="2048" required />
					</div>
					<div class="input-box">
						<label for="payment-proof">Bukti pembayaran <span>( Jadikan 1 PDF ) *</span></label>
						<input type="file" name="payment-proof" size="2048" required />
					</div>
				</div>

				<div class="input-box">
					<button type="submit" name="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
