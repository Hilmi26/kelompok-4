<!-- Hilmi -->

<?php
include '../../controllers/staff/function_peminjaman.php';
ob_start();
session_start();

if (isset($_POST['submit'])) {

    if (insert($_POST) > 0) {
        echo "<script>alert('Peminjaman Berhasil');
		document.location='peminjaman.php'</script>";
    } else {
        echo "<script>alert('Gagal');
		document.location='create_peminjaman.php'</script>";
    }
}

$tgl_sekarang = date('Y-m-d');
$hasil_tgl = date_create($tgl_sekarang);
$tgl_pengembalian = date_add($hasil_tgl, date_interval_create_from_date_string('14 days'));

?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Library Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <script src="../../assets/js/config.js"></script>
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
                        <a href="staff_home.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="peminjaman.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-book"></i>
                            <div data-i18n="Analytics">Peminjaman</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pengembalian.php" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-user-pin"></i>
                            <div data-i18n="Layouts">Pengambalian</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="table_students.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Analytics">History Transaksi</div>
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
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Staff</small>
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
                                        <a class="dropdown-item" href="auth-login-basic.html">
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
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4">
                            <span class="text-muted fw-light">Peminjaman /</span> Tambah Data Peminjaman
                        </h4>
                        <!-- Bordered Table -->
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">NIP Petugas</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="nip_petugas" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">ID Peminjaman</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="id_peminjaman" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">NIS</label>
                                        <div class="col-md-10">
                                             <select name="nis" class="custom-select container-fluid form-control" required>
                                                <option selected>Pilih Siswa</option>
                                                <?php
                                                $sql = mysqli_query($conn, "SELECT * FROM siswa");
                                                while ($data1 = mysqli_fetch_array($sql)) {
                                                    echo "<option value=$data1[nis]> $data1[nis] $data1[nama_siswa]</option>";
                                                    //value=$data1[id_buku] id buku yang akan di simpan di tabel peminjaman
                                                    //$data1[nama_buku] label data dari tabel buku
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">Judul Buku</label>
                                        <div class="col-md-10">
                                            <!-- <input class="form-control" type="number" name="judul"> -->
                                            <select name="judul" class="custom-select container-fluid form-control" required>
                                                <option selected>Pilih Buku</option>
                                                <?php
                                                $sql = mysqli_query($conn, "SELECT * FROM buku");
                                                while ($data1 = mysqli_fetch_array($sql)) {
                                                    echo "<option value=$data1[id_buku]> $data1[judul]</option>";
                                                    //value=$data1[id_buku] id buku yang akan di simpan di tabel peminjaman
                                                    //$data1[nama_buku] label data dari tabel buku
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">TGL Peminjaman</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="tgl_peminjaman" value="<?= $tgl_sekarang; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">TGL Pengembalian</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="tgl_pengembalian" value="<?= date_format($tgl_pengembalian, 'Y-m-d'); ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">Jumlah</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" name="kuantitas">
                                        </div>
                                    </div>
                                    <div class="mt-4 me-auto">
                                        <button type="submit" name="submit" class="btn btn-outline-primary">Tambah</button>
                                        <a href="peminjaman.php" type="button" name="submit" class="btn btn-outline-danger">Kembali</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--/ Striped Rows -->

                    <hr class="my-5" />

                </div>
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