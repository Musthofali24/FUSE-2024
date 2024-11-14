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

			<form action="<?= base_url('register/update_regist_poster'); ?>" class="form" method="post"
				enctype="multipart/form-data">
				<input type="hidden" name="id_pendaftaran" value="<?= $registrasi['id_pendaftaran'] ?>">
				<div class="input-box">
					<label for="competition-category">Competition Category <span>*</span></label>
					<div class="select-box">
						<input type="text" name="competition-category" id="competition-category" value="POSTER"
							readonly>
					</div>
				</div>
				<div class="input-box">
					<label for="school-name">School Name <span>*</span></label>
					<input type="text" name="school-name" id="school-name" placeholder="Enter school name"
						value="<?= $registrasi['asal_sekolah'] ?>" required />
				</div>
				<div class="input-box">
					<label for="team-name">Team Name <span>*</span></label>
					<input type="text" name="team-name" id="team-name" placeholder="Enter team name"
						value="<?= $registrasi['nama_tim'] ?>" required />
				</div>
				<div class="input-box">
					<label for="email">Email <span>*</span></label>
					<input type="text" name="email" id="email" placeholder="Enter team name"
						value="<?= $registrasi['email'] ?>" required />
				</div>
				<div class="column">
					<div class="input-box">
						<label for="member1-name">Member 1 Name <span>*</span></label>
						<input type="text" name="member1-name" id="member1-name" placeholder="Enter member 1 name"
							value="<?= $registrasi['nama_peserta_1'] ?>" required />
					</div>
				</div>
				<div class="input-box">
					<label for="leader-number">Nomor WA Aktif (Ketua Tim) <span>*</span></label>
					<input type="text" name="leader-number" placeholder="Enter leader number"
						value="<?= $registrasi['no_peserta'] ?>" required />
				</div>
				<div class="input-box">
					<label for="coach-name">Nama pembimbing <span>*</span></label>
					<input type="text" name="coach-name" id="coach-name" placeholder="Enter coach name"
						value="<?= $registrasi['nama_pembimbing'] ?>" required />
				</div>
				<div class="column">
					<div class="input-box">
						<label for="coach-id">NIP/NRP pembimbing <span>*</span></label>
						<input type="text" name="coach-id" id="coach-id" placeholder="Enter NIP/NnameN/NRP"
							value="<?= $registrasi['id_pembimbing'] ?>" required />
					</div>

					<div class="input-box">
						<label for="coach-number">Nomor WA aktif (pembimbing) <span>*</span></label>
						<input type="text" name="coach-number" id="coach-number" placeholder="Enter coach number"
							value="<?= $registrasi['no_pembimbing'] ?>" required />
					</div>
				</div>
				<div class="input-box">
					<label>Surat Keterangan Aktif/Kartu Tanda Pelajar/KTM:</label>
					<?php if ($registrasi['surat_ket']): ?>
						<p>File telah diunggah:
							<?= $registrasi['surat_ket'] ?>
						</p>
					<?php endif; ?>
					<input type="file" name="student-card" size="2048" accept=".pdf" required />
				</div>
				<div class="input-box">
					<label>Bukti upload twibbon ke IG:</label>
					<?php if ($registrasi['twibbon']): ?>
						<p>File telah diunggah:
							<?= $registrasi['twibbon'] ?>
						</p>
					<?php endif; ?>
					<input type="file" name="twibbon" size="2048" accept=".jpg,.png,.jpeg" required />
				</div>
				<div class="column">
					<div class="input-box">
						<label>Foto 3x4 :</label>
						<?php if ($registrasi['foto']): ?>
							<p>File telah diunggah:
								<?= $registrasi['foto'] ?>
							</p>
						<?php endif; ?>
						<input type="file" name="photo" size="2048" accept=".jpg,.png,.jpeg" required />
					</div>
					<div class="input-box">
						<label>Bukti follow tiktok fuse:</label>
						<?php if ($registrasi['tiktok']): ?>
							<p>File telah diunggah:
								<?= $registrasi['tiktok'] ?>
							</p>
						<?php endif; ?>
						<input type="file" name="tiktok-follow" size="2048" accept=".jpg,.png,.jpeg" required />
					</div>
				</div>
				<div class="input-box">
					<div class="input-box">
						<label>Payment Proof:</label>
						<?php if ($registrasi['pembayaran']): ?>
							<p>File telah diunggah:
								<?= $registrasi['pembayaran'] ?>
							</p>
						<?php endif; ?>
						<input type="file" name="payment_proof" size="2048" accept=".jpg,.png,.jpeg" required />
					</div>
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
