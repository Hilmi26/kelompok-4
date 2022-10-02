<!-- Hilmi Tsaqif - membuat function crud buku-->
<?php
include '../../config/connection.php';

function display($table, $condition = "")
{
	global $conn;
	$query = "SELECT * FROM " . $table . " " . $condition;
	// var_dump($query);
	$cek = mysqli_query($conn, $query);
	return $cek;
}

function insert($data)
{
	global $conn;

	$penulis = $data['penulis'];
	$tahun = $data['tahun'];
	$judul = $data['judul'];
	$kota = $data['kota'];
	$penerbit = $data['penerbit'];
	$cover = $data['cover'];
	$sinopsis = $data['sinopsis'];
	$stok = $data['stok'];

	$query_insert = "INSERT INTO buku
	('penulis', 'tahun', 'judul', 'kota', 'penerbit', 'cover', 'sinopsis', stok)
	VALUE ('$penulis', '$tahun', '$judul', '$kota', '$penerbit', '$cover', '$sinopsis', '$stok')";

	mysqli_query($conn, $query_insert);

	return mysqli_affected_rows($conn);
}

function update($data)
{
	global $conn;

	$query_update = "UPDATE buku SET
	penulis = '$data[penulis]',
	tahun = '$data[penulis]',
	judul = '$data[judul]',
	kota = '$data[kota]',
	penerbit = '$data[penerbit]',
	cover = '$data[cover]',
	sinopsis = '$data[sinopsis]',
	stok = '$data[stok]'
	WHERE id_buku = $_GET[update];
	";

	mysqli_query($conn, $query_update);

	return mysqli_affected_rows($conn);
}

function delete($id)
{
	global $conn;
	$query_delete = "DELETE FROM buku WHERE id_buku = $id";

	mysqli_query($conn, $query_delete);

	return mysqli_affected_rows($conn);
}

?>