<!-- Hilmi Tsaqif - membuat function crud buku-->
<?php
include '../../config/connection.php';

// function display($table, $condition = "")
// {
// 	global $conn;
// 	$query = "SELECT * FROM " . $table . " " . $condition;
// 	// var_dump($query);
// 	$cek = mysqli_query($conn, $query);
// 	return $cek;
// }

function insert($data)
{
	global $conn;

	$id_peminjaman = $data['id_peminjaman'];
	$nis = $data['nis'];
	$petugas = $data['nama_petugas'];
	$tgl_peminjaman = $data['tgl_peminjaman'];
	$tgl_pengembalian = $data['tgl_pengembalian'];
	$judul = $data['judul'];
	$jumlah = $data['kuantitas'];

	$query_p = "INSERT INTO peminjaman
	(id_peminjaman, id_siswa, id_petugas, tgl_peminjaman, tgl_pengembalian)
	VALUES ('$id_peminjaman', '$nis', '$petugas', '$tgl_peminjaman', '$tgl_pengembalian')";
	// var_dump($query_p);
	mysqli_query($conn, $query_p);
	
	$select = "SELECT * FROM peminjaman ORDER BY id_peminjaman DESC";
	$cek = mysqli_query($conn, $select);
	$data1 = mysqli_fetch_assoc($cek);

	$query_dp = "INSERT INTO detail_peminjaman 
	(id_detail_peminjaman,id_buku, id_peminjaman, kuantitas ) VALUES ('', '$judul', '$data1[id_peminjaman]', '$jumlah')";
	// var_dump($query_dp);
	mysqli_query($conn, $query_dp);

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