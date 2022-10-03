<!-- Hilmi Tsaqif -->

<?php
session_start();
include '../../controllers/admin/function_books.php';

if (!$_SESSION) {
	header('location:../../index.php');
}

?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title>Dashboard - Library Admin</title>

	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="../../../assets/img/favicon/favicon.ico" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

	<!-- Icons. Uncomment required icon fonts -->
	<link rel="stylesheet" href="../../../assets/vendor/fonts/boxicons.css" />

	<!-- Core CSS -->
	<link rel="stylesheet" href="../../../assets/vendor/css/core.css" class="template-customizer-core-css" />
	<link rel="stylesheet" href="../../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
	<link rel="stylesheet" href="../../../assets/css/demo.css" />

	<!-- Vendors CSS -->
	<link rel="stylesheet" href="../../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

	<link rel="stylesheet" href="../../../assets/vendor/libs/apex-charts/apex-charts.css" />

	<!-- Helpers -->
	<script src="../../../assets/vendor/js/helpers.js"></script>

	<script src="../../../assets/js/config.js"></script>
</head>

<body>
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">
			<!-- Menu -->

			<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
				<div class="app-brand demo ">
					<a href="index.html" class="app-brand-link">
						<span>
							<i class="menu-icon tf-icons bx bx-book-content"></i>
						</span>
						<span class="app-brand-text demo menu-text fw-bolder ms-2">Library</span>
					</a>

					<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
						<i class="bx bx-chevron-left bx-sm align-middle"></i>
					</a>
				</div>
				<div class="menu-inner-shadow"></div>
				<ul class="menu-inner py-1">
					<li class="menu-item">
						<a href="admin_home.php" class="menu-link">
							<i class="menu-icon tf-icons bx bx-home-circle"></i>
							<div data-i18n="Analytics">Dashboard</div>
						</a>
					</li>
					<li class="menu-item">
						<a href="table_books.php" class="menu-link">
							<i class="menu-icon tf-icons bx bx-book"></i>
							<div data-i18n="Analytics">Buku</div>
						</a>
					</li>
					<li class="menu-item">
						<a href="table_staff.php" class="menu-link ">
							<i class="menu-icon tf-icons bx bx-user-pin"></i>
							<div data-i18n="Layouts">Petugas</div>
						</a>
					</li>
					<li class="menu-item">
						<a href="table_students.php" class="menu-link">
							<i class="menu-icon tf-icons bx bx-user"></i>
							<div data-i18n="Analytics">Siswa</div>
						</a>
					</li>
				</ul>
			</aside>
			<!-- / Menu -->

			<!-- Layout container -->
			<div class="layout-page">
				<!-- Navbar -->

				<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
					<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
						<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
							<i class="bx bx-menu bx-sm"></i>
						</a>
					</div>

					<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

						<ul class="navbar-nav flex-row align-items-center ms-auto">

							<!-- User -->
							<li class="nav-item navbar-dropdown dropdown-user dropdown">
								<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
									<div class="avatar avatar-online">
										<img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
									</div>
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li>
										<a class="dropdown-item" href="#">
											<div class="d-flex">
												<div class="flex-shrink-0 me-3">
													<div class="avatar avatar-online">
														<img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
													</div>
												</div>
												<div class="flex-grow-1">
													<span class="fw-semibold d-block">Jimmy</span>
													<small class="text-muted">Admin</small>
												</div>
											</div>
										</a>
									</li>
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li>
										<a class="dropdown-item" href="#">
											<i class="bx bx-user me-2"></i>
											<span class="align-middle">My Profile</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="#">
											<i class="bx bx-cog me-2"></i>
											<span class="align-middle">Settings</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="#">
											<span class="d-flex align-items-center align-middle">
												<i class="flex-shrink-0 bx bx-credit-card me-2"></i>
												<span class="flex-grow-1 align-middle">Billing</span>
												<span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
											</span>
										</a>
									</li>
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li>
										<a class="dropdown-item" href="../login/logout.php">
											<i class="bx bx-power-off me-2"></i>
											<span class="align-middle">Log Out</span>
										</a>
									</li>
								</ul>
							</li>
							<!--/ User -->
						</ul>
					</div>
				</nav>

				<!-- / Navbar -->

				<!-- Content wrapper -->
				<div class="content-wrapper">
					<!-- Content -->

					<div class="container-xxl flex-grow-1 container-p-y">
						<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Books /</span> Data Books</h4>

						<!-- Striped Rows -->
						<div class="card">
							<div class="card-body">
								<div class="row mb-3">
									<div class="col">
										<a href="create_book.php" class="btn btn-outline-primary ">Tambah Data</a>
									</div>
									<div class="col mb-4">
										<form class="d-flex" role="search" method="POST" action="">
											<input class="form-control me-2" type="text" name="search" placeholder="Masukkan Keyword Pencarian">
											<input class="btn btn-outline-info" type="submit" name="cari" value="Cari"></input>
											<a href="index.php" class="btn btn-outline-warning ms-2">Refresh</a>
										</form>
									</div>
									</div>
									<div class="table-responsive text-nowrap">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>ID</th>
													<th class="text-center">Aksi</th>
													<th>Cover</th>
													<th>Penulis</th>
													<th>Tahun</th>
													<th>Judul</th>
													<th>Kota</th>
													<th>Penerbit</th>
													<th>Sinopsis</th>
													<th>Stok</th>
												</tr>
											</thead>
											<tbody class="table-border-bottom-0">

												<?php
												$batas = 10; //Batas data yang akan di munculkan

												//proses mendapatkan url halaman
												if (isset($_GET['halaman'])) {
													$halaman = (int)$_GET['halaman'];
												} else {
													$halaman = 1;
												}


												if ($halaman > 1) {
													$halaman_awal = ($halaman * $batas) - $batas;
												} else {
													$halaman_awal = 0;
												}
												$get_book = display('buku', 'limit ' . $halaman_awal . ',' . $batas);

												$data = mysqli_query($conn, "SELECT * FROM buku");
												$jumlah_data = mysqli_num_rows($data);
												$total_halaman = ceil($jumlah_data / $batas);

												if (mysqli_num_rows($get_book)) {
													while ($data = mysqli_fetch_array($get_book)) {
												?>

														<tr>
															<td><?= $data['id_buku'] ?></td>
															<td>
																<a href="update_book.php?update=<?php echo $data['id_buku']; ?>" class="btn btn-icon btn-outline-warning">
																	<i class='bx bx-pencil'></i>
																</a>
																<a href="delete_book.php?nip=<?php echo $data['id_buku']; ?>" class="btn btn-icon btn-outline-danger" onclick="return confirm ('Yakin akan menghapus data?')">
																	<i class='bx bx-trash'></i>
																</a>
															</td>
															<td><?= $data['cover'] ?></td>
															<td><?= $data['penulis'] ?></td>
															<td><?= $data['tahun'] ?></td>
															<td><?= $data['judul'] ?></td>
															<td><?= $data['kota'] ?></td>
															<td><?= $data['penerbit'] ?></td>
															<td><?= $data['sinopsis'] ?></td>
															<td><?= $data['stok'] ?></td>
														</tr>


												<?php
													}
												}


												?>

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						
							<div class="mx-auto">
								<nav class="mx-auto" aria-label="Page navigation example">
									<?php
									if (isset($_GET['halaman'])) {
										$newHalaman = $_GET['halaman'];
									} else {
										$newHalaman = 1;
									}
									$batasHalaman = $total_halaman;
									?>
									<ul class="pagination">
										<?php
										if ($newHalaman < 1) {
											$newHalaman = 1;
										}
										if ($newHalaman != 1) { ?>
											<li class="page-item"><a class="page-link" href="table_books.php?halaman=<?= $halaman - 1 ?>">
													< </a>
											</li>
											<?php }
										for ($i = ($newHalaman - $batasHalaman); $i < ($newHalaman + $batasHalaman) + 1; $i++) {
											if (($i > 0) && ($i <= $total_halaman)) {
												if ($i == $newHalaman) { ?>
													<li class="page-item"><a class="page-link fw-bold"><?= $i ?></a></li>
												<?php } else { ?>
													<li class="page-item"><a class="page-link" href="table_books.php?halaman=<?= $i ?>"><?= $i ?></a></li>
											<?php }
											}
										}
										if ($newHalaman != $total_halaman) { ?>
											<li class="page-item"><a class="page-link" href="table_books.php?halaman=<?= $newHalaman + 1 ?>"> > </a></li>
										<?php } ?>
									</ul>
								</nav>
							</div>
						</div>
					<!--/ Striped Rows -->

					<!-- / Content -->

					<!-- Footer -->
					<footer class="content-footer footer bg-footer-theme">
						<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
							<div class="mb-2 mb-md-0">
								©
								<script>
									document.write(new Date().getFullYear());
								</script>
								, made with ❤️ by
								<a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
							</div>
							<div>
								<a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
								<a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

								<a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

								<a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link me-4">Support</a>
							</div>
						</div>
					</footer>
					<!-- / Footer -->

					<div class="content-backdrop fade"></div>
				</div>
				<!-- Content wrapper -->
			</div>
			<!-- / Layout page -->
		</div>

		<!-- Overlay -->
		<div class="layout-overlay layout-menu-toggle"></div>
	</div>
	<!-- / Layout wrapper -->

	<!-- Core JS -->
	<!-- build:js assets/vendor/js/core.js -->
	<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
	<script src="../../assets/vendor/libs/popper/popper.js"></script>
	<script src="../../assets/vendor/js/bootstrap.js"></script>
	<script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

	<script src="../../assets/vendor/js/menu.js"></script>
	<!-- endbuild -->

	<!-- Vendors JS -->
	<script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

	<!-- Main JS -->
	<script src="../../assets/js/main.js"></script>

	<!-- Page JS -->
	<script src="../../assets/js/dashboards-analytics.js"></script>

	<!-- Place this tag in your head or just before your close body tag. -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>