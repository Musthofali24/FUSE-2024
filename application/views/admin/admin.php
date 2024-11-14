<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<title>FUSE 2024 | Admin</title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('/assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet"
		type="text/css" />
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet" />
	<!-- Custom styles for this template-->
	<link href="<?php echo base_url('/assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet" />

	<!-- Custom styles for this page -->
	<link href="<?php echo base_url('/assets/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<ul class="navbar-nav sidebar sidebar-dark accordion fixed-top" id="accordionSidebar"
			style="background-color: rgb(26, 25, 25)">
			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center"
				href="<?= base_url('landing'); ?>">
				<div class="sidebar-brand-icon">
					<img width="30px" src="<?php echo base_url('/assets/img/FUSE.webp'); ?>" alt="" />
				</div>
				<div class="sidebar-brand-text mx-3">FUSE 2024</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0" />

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url('landing'); ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider" />

			<!-- Heading -->
			<div class="sidebar-heading">Data Pendaftaran</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
					aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-fw fa-cog"></i>
					<span>Kategori Lomba</span>
				</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" data-scroll="#plc_univ" href="#plc_univ">PLC UNIV</a>
						<a class="collapse-item" data-scroll="#plc_smk" href="#plc_smk">PLC SMK</a>
						<a class="collapse-item" data-scroll="#lf" href="#lf">LINE FOLLOWER</a>
						<a class="collapse-item" data-scroll="#kti" href="#kti">KTI</a>
						<a class="collapse-item" data-scroll="#poster" href="#poster">POSTER</a>
					</div>
				</div>
			</li>
		</ul>

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column" style="padding-left:220px;">
			<!-- Main Content -->
			<div id="content">
				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">
						<div class="topbar-divider d-none d-sm-block"></div>
					</ul>
				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
						<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
								class="fas fa-download fa-sm text-white-50"></i> Generate
							Report</a>
					</div>
					<?php if ($this->session->flashdata('success')) { ?>
						<div class="alert alert-success alert-dismissible fade show mx-lg-5" role="alert">
							<strong>
								<?= $this->session->flashdata('success'); ?>
							</strong>
							<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					<?php } ?>
					<?php if ($this->session->flashdata('error')) { ?>
						<div class="alert alert-danger alert-dismissible fade show mx-lg-5" role="alert">
							<strong>
								<?= $this->session->flashdata('error'); ?>
							</strong>
							<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					<?php } ?>
					<!-- Content Row -->
					<div class="row">
						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
												Total Pendaftar
											</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?= $pendaftar ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="material-symbols-outlined" style="font-size:3rem;">person</i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-success shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
												Pendaftar Diterima
											</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?= $konfirm ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="material-symbols-outlined" style="font-size:3rem;">person</i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Pending Requests Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-warning shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
												Pending Requests
											</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?= $pending ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="material-symbols-outlined" style="font-size:3rem;">person</i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
												PLC UNIV
											</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?= $num_plc_univ ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="material-symbols-outlined" style="font-size:3rem;">person</i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-info shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
												PLC SMK
											</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?= $num_plc_smk ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="material-symbols-outlined" style="font-size:3rem;">person</i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-success shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
												LINE FOLLOWER
											</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?= $num_lf ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="material-symbols-outlined" style="font-size:3rem;">person</i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-warning shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
												KTI
											</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?= $num_kti ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="material-symbols-outlined" style="font-size:3rem;">person</i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-md-6 mb-4">
							<div class="card border-left-danger shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
												POSTER
											</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?= $num_poster ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="material-symbols-outlined" style="font-size:3rem;">person</i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800 mb-3">Data Pendaftaran</h1>
					<section id="plc_univ">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">
									Data PLC UNIV
								</h6>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>No</th>
												<th>Kategori Lomba</th>
												<th>Sekolah/Universitas</th>
												<th>Nama Tim</th>
												<th>Email</th>
												<th>Anggota 1</th>
												<th>Anggota 2</th>
												<th>Nomor WA Peserta</th>
												<th>Nama Pembimbing</th>
												<th>NIP Pembimbing</th>
												<th>Nomor Wa Pembimbing</th>
												<th>Surat Keterang</th>
												<th>Foto 3 x 4</th>
												<th>Twibbon</th>
												<th>Follow Tiktok</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 0;
											foreach ($plc_univ as $p) { ?>
												<tr>
													<td>
														<?= ++$no; ?>
													</td>
													<td>
														<?= $p->kategori_lomba ?>
													</td>
													<td>
														<?= $p->asal_sekolah ?>
													</td>
													<td>
														<?= $p->nama_tim ?>
													</td>
													<td>
														<?= $p->email ?>
													</td>
													<td>
														<?= $p->nama_peserta_1 ?>
													</td>
													<td>
														<?= $p->nama_peserta_2 ?>
													</td>
													<td>
														<?= $p->no_peserta ?>
													</td>
													<td>
														<?= $p->nama_pembimbing ?>
													</td>
													<td>
														<?= $p->id_pembimbing ?>
													</td>
													<td>
														<?= $p->no_pembimbing ?>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->surat_ket ?>">
															<?= $p->surat_ket ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->foto ?>">
															<?= $p->foto ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->twibbon ?>">
															<?= $p->twibbon ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->tiktok ?>">
															<?= $p->tiktok ?>
														</a>
													</td>

													<td>
														<?= $p->rekomendasi_div_lomba ?>
													</td>
													<?php if ($p->rekomendasi_div_lomba == 'Belum Di Konfirmasi' or $p->rekomendasi_div_lomba == 'Tidak Di Konfirmasi') { ?>
														<td>
															<button type="button" class="btn btn-primary mb-1"
																data-toggle="modal"
																data-target="#konfirmModal<?= $p->id_pendaftaran ?>">
																Konfirm
															</button>
															<button type="button" class="btn btn-danger" data-toggle="modal"
																data-target="#deleteModal<?= $p->id_pendaftaran ?>">
																Reject
															</button>
														</td>
													<?php } else if ($p->rekomendasi_div_lomba == 'Di Konfirmasi') { ?>
															<td>
																<button type="button" class="btn btn-success">DONE</button>
															</td>
													<?php } ?>
												</tr>
												<div class="modal fade" id="konfirmModal<?= $p->id_pendaftaran ?>"
													tabindex="-1">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form
																	action="<?= base_url('register/update_success_lomba'); ?>"
																	method="post">
																	<input type="hidden" name="id"
																		value="<?= $p->id_pendaftaran ?>">
																	<h5 class="text-center">Apakah berkas sudah sesuai ?
																	</h5>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																		<button type="submit"
																			class="btn btn-primary">Done</button>
																	</div>
																</form>
															</div>

														</div>
													</div>
												</div>
												<div class="modal fade" id="deleteModal<?= $p->id_pendaftaran ?>"
													tabindex="-1">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form
																	action="<?= base_url('register/update_error_lomba'); ?>"
																	method="post">
																	<input type="hidden" name="id_pendaftaran"
																		value="<?= $p->id_pendaftaran ?>">
																	<label for="pesan">Hal Yang Harus Di benarkan :
																	</label>
																	<textarea name="pesan" id="" cols="50" rows="10"
																		class="px-3 py-3"></textarea>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																		<button type="submit"
																			class="btn btn-primary">Reject</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</section>
					<section id="plc_univ">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">
									Data PLC SMK
								</h6>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>No</th>
												<th>Kategori Lomba</th>
												<th>Sekolah/Universitas</th>
												<th>Nama Tim</th>
												<th>Email</th>
												<th>Anggota 1</th>
												<th>Anggota 2</th>
												<th>Nomor WA Peserta</th>
												<th>Nama Pembimbing</th>
												<th>NIP Pembimbing</th>
												<th>Nomor Wa Pembimbing</th>
												<th>Surat Keterang</th>
												<th>Foto 3 x 4</th>
												<th>Twibbon</th>
												<th>Follow Tiktok</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 0;
											foreach ($plc_smk as $p) { ?>
												<tr>
													<td>
														<?= ++$no; ?>
													</td>
													<td>
														<?= $p->kategori_lomba ?>
													</td>
													<td>
														<?= $p->asal_sekolah ?>
													</td>
													<td>
														<?= $p->nama_tim ?>
													</td>
													<td>
														<?= $p->email ?>
													</td>
													<td>
														<?= $p->nama_peserta_1 ?>
													</td>
													<td>
														<?= $p->nama_peserta_2 ?>
													</td>
													<td>
														<?= $p->no_peserta ?>
													</td>
													<td>
														<?= $p->nama_pembimbing ?>
													</td>
													<td>
														<?= $p->id_pembimbing ?>
													</td>
													<td>
														<?= $p->no_pembimbing ?>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->surat_ket ?>">
															<?= $p->surat_ket ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->foto ?>">
															<?= $p->foto ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->twibbon ?>">
															<?= $p->twibbon ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->tiktok ?>">
															<?= $p->tiktok ?>
														</a>
													</td>

													<td>
														<?= $p->rekomendasi_div_lomba ?>
													</td>
													<?php if ($p->rekomendasi_div_lomba == 'Belum Di Konfirmasi' or $p->rekomendasi_div_lomba == 'Tidak Di Konfirmasi') { ?>
														<td>
															<button type="button" class="btn btn-primary mb-1"
																data-toggle="modal"
																data-target="#konfirmModal<?= $p->id_pendaftaran ?>">
																Konfirm
															</button>
															<button type="button" class="btn btn-danger" data-toggle="modal"
																data-target="#deleteModal<?= $p->id_pendaftaran ?>">
																Reject
															</button>
														</td>
													<?php } else if ($p->rekomendasi_div_lomba == 'Di Konfirmasi') { ?>
															<td>
																<button type="button" class="btn btn-success">DONE</button>
															</td>
													<?php } ?>
												</tr>
												<div class="modal fade" id="konfirmModal<?= $p->id_pendaftaran ?>"
													tabindex="-1">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form
																	action="<?= base_url('register/update_success_lomba'); ?>"
																	method="post">
																	<input type="hidden" name="id"
																		value="<?= $p->id_pendaftaran ?>">
																	<h5 class="text-center">Apakah berkas sudah sesuai ?
																	</h5>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																		<button type="submit"
																			class="btn btn-primary">Done</button>
																	</div>
																</form>
															</div>

														</div>
													</div>
												</div>
												<div class="modal fade" id="deleteModal<?= $p->id_pendaftaran ?>"
													tabindex="-1">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form
																	action="<?= base_url('register/update_error_lomba'); ?>"
																	method="post">
																	<input type="hidden" name="id_pendaftaran"
																		value="<?= $p->id_pendaftaran ?>">
																	<label for="pesan">Hal Yang Harus Di benarkan :
																	</label>
																	<textarea name="pesan" id="" cols="50" rows="10"
																		class="px-3 py-3"></textarea>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																		<button type="submit"
																			class="btn btn-primary">Reject</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</section>
					<section id="lf">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">
									Data LINE FOLLOWER
								</h6>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>No</th>
												<th>Kategori Lomba</th>
												<th>Sekolah/Universitas</th>
												<th>Nama Tim</th>
												<th>Email</th>
												<th>Anggota 1</th>
												<th>Nomor WA Peserta</th>
												<th>Nama Pembimbing</th>
												<th>NIP Pembimbing</th>
												<th>Nomor Wa Pembimbing</th>
												<th>Surat Keterang</th>
												<th>Foto 3 x 4</th>
												<th>Twibbon</th>
												<th>Follow Tiktok</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 0;
											foreach ($lf as $p) { ?>
												<tr>
													<td>
														<?= ++$no; ?>
													</td>
													<td>
														<?= $p->kategori_lomba ?>
													</td>
													<td>
														<?= $p->asal_sekolah ?>
													</td>
													<td>
														<?= $p->nama_tim ?>
													</td>
													<td>
														<?= $p->email ?>
													</td>
													<td>
														<?= $p->nama_peserta_1 ?>
													</td>
													<td>
														<?= $p->no_peserta ?>
													</td>
													<td>
														<?= $p->nama_pembimbing ?>
													</td>
													<td>
														<?= $p->id_pembimbing ?>
													</td>
													<td>
														<?= $p->no_pembimbing ?>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->surat_ket ?>">
															<?= $p->surat_ket ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->foto ?>">
															<?= $p->foto ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->twibbon ?>">
															<?= $p->twibbon ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->tiktok ?>">
															<?= $p->tiktok ?>
														</a>
													</td>

													<td>
														<?= $p->rekomendasi_div_lomba ?>
													</td>
													<?php if ($p->rekomendasi_div_lomba == 'Belum Di Konfirmasi' or $p->rekomendasi_div_lomba == 'Tidak Di Konfirmasi') { ?>
														<td>
															<button type="button" class="btn btn-primary mb-1"
																data-toggle="modal"
																data-target="#konfirmModal<?= $p->id_pendaftaran ?>">
																Konfirm
															</button>
															<button type="button" class="btn btn-danger" data-toggle="modal"
																data-target="#deleteModal<?= $p->id_pendaftaran ?>">
																Reject
															</button>
														</td>
													<?php } else if ($p->rekomendasi_div_lomba == 'Di Konfirmasi') { ?>
															<td>
																<button type="button" class="btn btn-success">DONE</button>
															</td>
													<?php } ?>
												</tr>
												<div class="modal fade" id="konfirmModal<?= $p->id_pendaftaran ?>"
													tabindex="-1">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form
																	action="<?= base_url('register/update_success_lomba'); ?>"
																	method="post">
																	<input type="hidden" name="id"
																		value="<?= $p->id_pendaftaran ?>">
																	<h5 class="text-center">Apakah berkas sudah sesuai ?
																	</h5>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																		<button type="submit"
																			class="btn btn-primary">Done</button>
																	</div>
																</form>
															</div>

														</div>
													</div>
												</div>
												<div class="modal fade" id="deleteModal<?= $p->id_pendaftaran ?>"
													tabindex="-1">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form
																	action="<?= base_url('register/update_error_lomba'); ?>"
																	method="post">
																	<input type="hidden" name="id_pendaftaran"
																		value="<?= $p->id_pendaftaran ?>">
																	<label for="pesan">Hal Yang Harus Di benarkan :
																	</label>
																	<textarea name="pesan" id="" cols="50" rows="10"
																		class="px-3 py-3"></textarea>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																		<button type="submit"
																			class="btn btn-primary">Reject</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</section>
					<section id="kti">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">
									Data KTI
								</h6>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable4" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>No</th>
												<th>Kategori Lomba</th>
												<th>Sekolah/Universitas</th>
												<th>Nama Tim</th>
												<th>Email</th>
												<th>Anggota 1</th>
												<th>Anggota 2</th>
												<th>Anggota 3</th>
												<th>Nomor Wa</th>
												<th>Surat Keterang</th>
												<th>Foto 3 x 4</th>
												<th>Twibbon</th>
												<th>Follow Tiktok</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 0;
											foreach ($kti as $p) { ?>
												<tr>
													<td>
														<?= ++$no; ?>
													</td>
													<td>
														<?= $p->kategori_lomba ?>
													</td>
													<td>
														<?= $p->asal_sekolah ?>
													</td>
													<td>
														<?= $p->nama_tim ?>
													</td>
													<td>
														<?= $p->email ?>
													</td>
													<td>
														<?= $p->nama_peserta_1 ?>
													</td>
													<td>
														<?= $p->nama_peserta_2 ?>
													</td>
													<td>
														<?= $p->nama_peserta_2 ?>
													</td>
													<td>
														<?= $p->no_peserta ?>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->surat_ket ?>">
															<?= $p->surat_ket ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->foto ?>">
															<?= $p->foto ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->twibbon ?>">
															<?= $p->twibbon ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->tiktok ?>">
															<?= $p->tiktok ?>
														</a>
													</td>

													<td>
														<?= $p->rekomendasi_div_lomba ?>
													</td>
													<?php if ($p->rekomendasi_div_lomba == 'Belum Di Konfirmasi' or $p->rekomendasi_div_lomba == 'Tidak Di Konfirmasi') { ?>
														<td>
															<button type="button" class="btn btn-primary mb-1"
																data-toggle="modal"
																data-target="#konfirmModal<?= $p->id_pendaftaran ?>">
																Konfirm
															</button>
															<button type="button" class="btn btn-danger" data-toggle="modal"
																data-target="#deleteModal<?= $p->id_pendaftaran ?>">
																Reject
															</button>
														</td>
													<?php } else if ($p->rekomendasi_div_lomba == 'Di Konfirmasi') { ?>
															<td>
																<button type="button" class="btn btn-success">DONE</button>
															</td>
													<?php } ?>
												</tr>
												<div class="modal fade" id="konfirmModal<?= $p->id_pendaftaran ?>"
													tabindex="-1">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form
																	action="<?= base_url('register/update_success_lomba'); ?>"
																	method="post">
																	<input type="hidden" name="id"
																		value="<?= $p->id_pendaftaran ?>">
																	<h5 class="text-center">Apakah berkas sudah sesuai ?
																	</h5>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																		<button type="submit"
																			class="btn btn-primary">Done</button>
																	</div>
																</form>
															</div>

														</div>
													</div>
												</div>
												<div class="modal fade" id="deleteModal<?= $p->id_pendaftaran ?>"
													tabindex="-1">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form
																	action="<?= base_url('register/update_error_lomba'); ?>"
																	method="post">
																	<input type="hidden" name="id_pendaftaran"
																		value="<?= $p->id_pendaftaran ?>">
																	<label for="pesan">Hal Yang Harus Di benarkan :
																	</label>
																	<textarea name="pesan" id="" cols="50" rows="10"
																		class="px-3 py-3"></textarea>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																		<button type="submit"
																			class="btn btn-primary">Reject</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</section>
					<section id="poster">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">
									Data POSTER
								</h6>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable5" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>No</th>
												<th>Kategori Lomba</th>
												<th>Sekolah/Universitas</th>
												<th>Nama Tim</th>
												<th>Email</th>
												<th>Anggota 1</th>
												<th>Nomor Wa</th>
												<th>Surat Keterang</th>
												<th>Foto 3 x 4</th>
												<th>Twibbon</th>
												<th>Follow Tiktok</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 0;
											foreach ($poster as $p) { ?>
												<tr>
													<td>
														<?= ++$no; ?>
													</td>
													<td>
														<?= $p->kategori_lomba ?>
													</td>
													<td>
														<?= $p->asal_sekolah ?>
													</td>
													<td>
														<?= $p->nama_tim ?>
													</td>
													<td>
														<?= $p->email ?>
													</td>
													<td>
														<?= $p->nama_peserta_1 ?>
													</td>
													<td>
														<?= $p->no_peserta ?>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?php echo '/assets/uploads/' . $p->surat_ket ?>">
															<?= $p->surat_ket ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->foto ?>">
															<?= $p->foto ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->twibbon ?>">
															<?= $p->twibbon ?>
														</a>
													</td>
													<td>
														<a class="btn btn-primary"
															href="<?= '/assets/uploads/' . $p->tiktok ?>">
															<?= $p->tiktok ?>
														</a>
													</td>

													<td>
														<?= $p->rekomendasi_div_lomba ?>
													</td>
													<?php if ($p->rekomendasi_div_lomba == 'Belum Di Konfirmasi' or $p->rekomendasi_div_lomba == 'Tidak Di Konfirmasi') { ?>
														<td>
															<button type="button" class="btn btn-primary mb-1"
																data-toggle="modal"
																data-target="#konfirmModal<?= $p->id_pendaftaran ?>">
																Konfirm
															</button>
															<button type="button" class="btn btn-danger" data-toggle="modal"
																data-target="#deleteModal<?= $p->id_pendaftaran ?>">
																Reject
															</button>
														</td>
													<?php } else if ($p->rekomendasi_div_lomba == 'Di Konfirmasi') { ?>
															<td>
																<button type="button" class="btn btn-success">DONE</button>
															</td>
													<?php } ?>
												</tr>
												<div class="modal fade" id="konfirmModal<?= $p->id_pendaftaran ?>"
													tabindex="-1">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form
																	action="<?= base_url('register/update_success_lomba'); ?>"
																	method="post">
																	<input type="hidden" name="id"
																		value="<?= $p->id_pendaftaran ?>">
																	<h5 class="text-center">Apakah berkas sudah sesuai ?
																	</h5>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																		<button type="submit"
																			class="btn btn-primary">Done</button>
																	</div>
																</form>
															</div>

														</div>
													</div>
												</div>
												<div class="modal fade" id="deleteModal<?= $p->id_pendaftaran ?>"
													tabindex="-1">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form
																	action="<?= base_url('register/update_error_lomba'); ?>"
																	method="post">
																	<input type="hidden" name="id_pendaftaran"
																		value="<?= $p->id_pendaftaran ?>">
																	<label for="pesan">Hal Yang Harus Di benarkan :
																	</label>
																	<textarea name="pesan" id="" cols="50" rows="10"
																		class="px-3 py-3"></textarea>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																		<button type="submit"
																			class="btn btn-primary">Reject</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Fuse2024 2023</span>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					Select "Logout" below if you are ready to end your current session.
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">
						Cancel
					</button>
					<a class="btn btn-primary mb-1" href="login.html">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url('/assets/vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/js/sb-admin-2.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/vendor/chart.js/Chart.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/js/demo/chart-area-demo.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/js/demo/chart-pie-demo.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/js/demo/datatables-demo.js'); ?>"></script>
	<script>
		$(document).ready(function () {
			$(".collapse-item[data-scroll]").on('click', function (e) {
				e.preventDefault();
				var targetId = $(this).attr('data-scroll');
				var offset = $(targetId).offset().top;

				$('html, body').animate({
					scrollTop: offset
				}, 800);
			});
		});
	</script>
</body>

</html>
