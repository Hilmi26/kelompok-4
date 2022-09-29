<?php
session_start();
include "../config.php";

// if(!$_SESSION['level']){
//     header('location:index.php');
// }

if (isset($_POST['logout'])) {
    session_destroy();
    header("location:../index.php");
}
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
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Library</a>
            <form class="d-flex" role="" method="POST">
                <button class="btn btn-outline-light" type="submit" name="logout">Logout</button>
            </form>
        </div>
    </nav>
    <div class="d-flex" id="wrapper">
        <div class="container mt-3">
            <h2 class="text-center">Data Buku</h2>
            <a href="create.php" class="btn btn-primary">Tambah Buku</a>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
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

                    $data = mysqli_query($conn, "SELECT * FROM siswa");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data / $batas);

                    $result = mysqli_query($conn, "SELECT * FROM siswa ORDER BY id LIMIT $halaman_awal,$batas");
                    $no = $halaman_awal + 1;
                    // var_dump($halaman);die;
                    while ($data = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data['nis'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['jenis_kelamin'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><?= $data['kelas'] ?></td>

                            <td>
                                <a class="btn btn-warning" href="edit.php?id=<?php echo $data['id']; ?>">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']; ?>">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>