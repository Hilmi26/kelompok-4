<?php
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>

	<div class="container">
		<h1 class="text-center">Tambah Data</h1>
		<form action="" method="post">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">Data Buku</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Kode Buku</td>
						<td><input type="text" class="form-control" name="kode_buku" placeholder="Masukkan Kode Buku"></input></td>
					</tr>
					<tr>
						<td>Judul Buku</td>
						<td><input type="text" class="form-control" name="judul_buku" placeholder="Masukkan Judul Buku"></input></td>
					</tr>
					<tr>
						<td>Kategori Buku</td>
						<td><input type="text" class="form-control" name="kategori_buku" placeholder="Masukkan kategori Buku"></input></td>
					</tr>
					<tr>
						<td>Pengarang Buku</td>
						<td><input type="text" class="form-control" name="pengarang_buku" placeholder="Masukkan Pengarang Buku"></input></td>
					</tr>
					<tr>
						<td>Penerbit Buku</td>
						<td><input type="text" class="form-control" name="penerbit_buku" placeholder="Masukkan Penerbit Buku"></input></td>
					</tr>
					<tr>
						<td>Jumlah Halaman</td>
						<td><input type="number" class="form-control" name="jumlah_halaman" placeholder="Masukkan Halaman Buku"></input></td>
					</tr>
				</tbody>
			</table>
			<div class="text-end">
			<a href="home.php" type="button" class="btn btn-danger"> Kembali </a>
			<button type="submit" name="submit" class="btn btn-success">Submit</button>
		</div>
		</form>
		
	</div>


	<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>

<?php


if (isset($_POST['submit'])) {
	$kode = $_POST['kode_buku'];
	$judul = $_POST['judul_buku'];
	$kategori = $_POST['kategori_buku'];
	$pengarang = $_POST['pengarang_buku'];
	$penerbit = $_POST['penerbit_buku'];
	$halaman = $_POST['jumlah_halaman'];

	$query_insert = mysqli_query($conn, "INSERT INTO buku
	VALUES ('$kode', '$judul', '$kategori', '$pengarang', '$penerbit', '$halaman')");

	echo "<script>alert('Data telah disimpan');
	document.location='home.php'</script>";
}

?>