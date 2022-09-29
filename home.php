<?php
session_start();
include "config.php";

// if(!$_SESSION['level']){
//     header('location:index.php');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi Perpustakaan</title>
    <!-- ICON FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- SIDEBAR -->
        <div class="border-end bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-dark text-white">PERPUSTAKAAN</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-dark p-3">Dasboard</a>
                <a class="list-group-item list-group-item-action list-group-item-dark p-3" data-bs-toggle="collapse" href="#data">Kelola Data</a>
                    <div class="collapse" id="data">
                        <div class="card card-body">
                        <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#">Data Buku</a>
                        <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="#">Data Anggota</a>
                        </div>
                    </div>
                
                <a class="list-group-item list-group-item-action list-group-item-dark p-3">Sirkulasi</a>
                <a class="list-group-item list-group-item-action list-group-item-dark p-3" data-bs-toggle="collapse" href="#log">Log</a>
            </div>
        </div>

            <div id="page-content-wrapper" style="position: fixed; right: 0;">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-dark" id="sidebarToggle">Haha</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Data</a></li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown">23</a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">1</a>
                                        <a href="#" class="dropdown-item">2</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- ISI content -->
        <div class="container mt-3">
        <h2 class="text-center">DAFTAR BUKU</h2>
        <a href="create.php" class="btn btn-primary">Tambah Buku</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Kategori Buku</th>
                    <th>Pengarang Buku</th>
                    <th>Penerbit Buku</th>
                    <th>Jumlah Halaman</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $batas = 10; //Batas data yang akan di munculkan

                    //proses mendapatkan url halaman
                    if(isset($_GET['halaman'])){
                        $halaman = (int)$_GET['halaman'];
                    }else{
                        $halaman = 1;
                    }

                    
                    if($halaman > 1){
                        $halaman_awal = ($halaman * $batas) - $batas;
                    }else{
                        $halaman_awal = 0;
                    }

                    $data = mysqli_query($conn, "SELECT * FROM buku");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data/$batas);

                    $result = mysqli_query($conn,"SELECT * FROM buku ORDER BY id LIMIT $halaman_awal,$batas");
                    $no = $halaman_awal+1;
                    // var_dump($halaman);die;
                    while ($data = mysqli_fetch_array($result)) {
                    ?>
                <tr>
                    <td><?= $no?></td>
                    <td><?= $data['kode_buku'] ?></td>
                    <td><?= $data['judul_buku'] ?></td>
                    <td><?= $data['kategori_buku'] ?></td>
                    <td><?= $data['pengarang_buku'] ?></td>
                    <td><?= $data['penerbit_buku'] ?></td>
                    <td><?= $data['jumlah_halaman'];  ?></td>
                    <td><a href="edit.php?id=<?php echo $data['id'];?>"><button class="btn btn-primary">Edit</button></a></td>
                    <td><a href="delete.php?id=<?php echo $data['id'];?>"><button class="btn btn-danger">Delete</button></a></td>
                </tr>
            <?php
        $no++;}
        ?>
            </tbody>
        </table>
    </div>
        </div>
    </div>
        





   

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>