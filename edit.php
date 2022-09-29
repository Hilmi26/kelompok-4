<?php
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>

	<div class="container">

    <?php
    $id = $_GET['id'];
    $ambil = mysqli_query($conn, "SELECT * FROM buku WHERE id='$id'");
    while ($data = mysqli_fetch_array($ambil)) {
    ?>
		<h1 class="text-center">Edit Data</h1>
		<form action="editproses.php" method="POST">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">Data Buku</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>ID Buku</td>
						<td><input type="text" class="form-control" readonly name="id_buku" value="<?php echo $data['id']  ?>"></input></td>
					</tr>
                    <tr>
						<td>Kode Buku</td>
						<td><input type="text" class="form-control" name="kode_buku" value="<?php echo $data['kode_buku']  ?>"></input></td>
					</tr>
					<tr>
						<td>Judul Buku</td>
						<td><input type="text" class="form-control" name="judul_buku" value="<?php echo $data['judul_buku']  ?>"></input></td>
					</tr>
					<tr>
						<td>Kategori Buku</td>
						<td><input type="text" class="form-control" name="kategori_buku" value="<?php echo $data['kategori_buku']  ?>"></input></td>
					</tr>
					<tr>
						<td>Pengarang Buku</td>
						<td><input type="text" class="form-control" name="pengarang_buku" value="<?php echo $data['pengarang_buku']  ?>"></input></td>
					</tr>
					<tr>
						<td>Penerbit Buku</td>
						<td><input type="text" class="form-control" name="penerbit_buku" value="<?php echo $data['penerbit_buku']  ?>"></input></td>
					</tr>
					<tr>
						<td>Jumlah Halaman</td>
						<td><input type="number" class="form-control" name="jumlah_halaman" value="<?php echo $data['jumlah_halaman']  ?>"></input></td>
					</tr>
				</tbody>
			</table>
			<div class="text-end">
			<a href="home.php" type="button" class="btn btn-danger"> Kembali </a>
			<button type="submit" name="submit" class="btn btn-success">Submit</button>
		</div>
        <?php
    }
        ?>
		</form>
		
	</div>


	<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>