<!-- FOOTER -->
<div class="footer" id="footer">
	<div class="container">
		<div class="footer-box">
			<div class="box">
				<img src="<?php echo base_url('/assets/img/FUSE.webp'); ?>" alt="" />
				<h1>FUSE 2024</h1>
			</div>
			<div class="box">
				<ul>
					<li>
						<a href="https://instagram.com/fuse.polman?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><i
								class="ri-instagram-line"></i></a>
					</li>
					<li>
						<a href="https://youtube.com/@POLMAN.BANDUNG?si=JZ8Y9X2-1zBi6sB0" target="_blank"><i
								class="ri-youtube-fill"></i></a>
					</li>
					<li>
						<a href="https://polman-bandung.ac.id/" target="_blank"><i class="ri-global-line"></i></a>
					</li>
					<li>
						<a href=""><i class="ri-phone-fill"></i></a>
					</li>
				</ul>
			</div>
			<div class="box">
				<p>
					FUSE 2024 <i class="ri-copyright-line"></i>2024. All rights
					reserved
				</p>
				<h2>Politeknik Manufaktur Bandung</h2>
			</div>
		</div>
	</div>
</div>


<!-- scripts -->
<script src="<?php echo base_url('/assets/js/particles.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/app.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/script.js'); ?>"></script>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
	$(document).ready(function () {
		toastr.options = {
			closeButton: false,
			debug: false,
			newestOnTop: false,
			progressBar: true,
			positionClass: "toast-bottom-right",
			preventDuplicates: false,
			onclick: null,
			showDuration: "300",
			hideDuration: "5000",
			timeOut: "5000",
			extendedTimeOut: "1000",
			showEasing: "swing",
			hideEasing: "linear",
			showMethod: "fadeIn",
			hideMethod: "fadeOut",
		};
		<?php if ($this->session->flashdata('success')): ?>
            toastr.success('<?php echo $this->session->flashdata("success"); ?>', 'Sukses');
        <?php endif; ?>
		<?php if ($this->session->flashdata('error')): ?>
            toastr.error('<?php echo $this->session->flashdata("error"); ?>', 'Error');
        <?php endif; ?>
	});
</script>
<script>
	AOS.init();
</script>
</body>

</html>
