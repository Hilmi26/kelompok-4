<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Buku</title>
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/sneat/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/sneat/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/sneat/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/sneat/assets/css/demo.css" />
    <link rel="stylesheet" href="assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <script src="assets/sneat/assets/vendor/js/helpers.js"></script>
    <script src="assets/sneat/assets/js/config.js"></script>
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
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
                        <a href="index.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="index.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-book"></i>
                            <div data-i18n="Analytics">Buku</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user-pin"></i>
                            <div data-i18n="Layouts">Petugas</div>
                        </a>
                        <ul class="menu-sub">

                            <li class="menu-item">
                                <a href="layouts-without-menu.html" class="menu-link">
                                    <div data-i18n="Without menu">Without menu</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-without-navbar.html" class="menu-link">
                                    <div data-i18n="Without navbar">Without navbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-container.html" class="menu-link">
                                    <div data-i18n="Container">Container</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-fluid.html" class="menu-link">
                                    <div data-i18n="Fluid">Fluid</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-blank.html" class="menu-link">
                                    <div data-i18n="Blank">Blank</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="index.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-bookmark-alt-plus"></i>
                            <div data-i18n="Analytics">Peminjaman</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="index.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-bookmark-alt-minus"></i>
                            <div data-i18n="Analytics">Pengembalian</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="index.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Analytics">Siswa</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="index.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-school"></i>
                            <div data-i18n="Analytics">Kelas</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
                            </div>
                        </div>
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="assets/sneat/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
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
                                        <a class="dropdown-item" href="auth-login-basic.html">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4">
                            <span class="text-muted fw-light">Buku /</span> Data Buku
                        </h4>
                        <!-- Bordered Table -->
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <a href="create.php" class="btn btn-outline-primary">Tambah Data</a>
                                </div>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Penulis</th>
                                                <th>Tahun</th>
                                                <th>Judul</th>
                                                <th>Kota</th>
                                                <th>Penerbit</th>
                                                <th>Cover</th>
                                                <th>Sinopsis</th>
                                                <th>Stok</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $ambil = mysqli_query($db, "select * from buku");
                                            while ($data = mysqli_fetch_assoc($ambil)) {
                                            ?>
                                                <tr>
                                                    <td><?= $data['id_buku'] ?></td>
                                                    <td><?= $data['penulis'] ?></td>
                                                    <td><?= $data['tahun'] ?></td>
                                                    <td><?= $data['judul'] ?></td>
                                                    <td><?= $data['kota'] ?></td>
                                                    <td><?= $data['penerbit'] ?></td>
                                                    <td><?= $data['cover']; ?></td>
                                                    <td><?= $data['sinopsis']; ?></td>
                                                    <td><?= $data['stok']; ?></td>
                                                    <td colspan="2">
                                                        <a class="btn btn-icon btn-outline-warning" href="update.php?">
                                                            <i class='bx bx-pencil'></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-outline-danger" href="delete.php?">
                                                            <i class='bx bx-trash'></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                © <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                , made with ❤️ by <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                            </div>
                        </div>
                    </footer>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <script src="assets/sneat/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/sneat/assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/sneat/assets/vendor/js/bootstrap.js"></script>
    <script src="assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/sneat/assets/vendor/js/menu.js"></script>
    <script src="assets/sneat/assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>