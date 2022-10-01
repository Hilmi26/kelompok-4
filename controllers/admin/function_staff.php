<?php
include '../../config/connection.php';

// Hilmi Tsaqif - membuat function menampilkan data dari tabel staff
function display($table)
{
	global $conn;

	$query = "SELECT * FROM " . $table;
	$cek = mysqli_query($conn, $query);

	return $cek;
}

// Zacky - membuat function crud staff
function create($data)
{
	global $conn;

	$nip = $data['nip'];
	$nama = $data['nama'];
	$jenis_kelamin = $data['jenis_kelamin'];
	$alamat = $data['alamat'];
	$password = $data['password'];

	$query_insert = "INSERT INTO petugas
	(nip, nama, jenis_kelamin, alamat ,password) VALUES ('$nip', '$nama', '$jenis_kelamin', '$alamat', '$password')";

	mysqli_query($conn, $query_insert);

	return mysqli_affected_rows($conn);
}

function update($data)
{
	global $conn;

	$query_update = "UPDATE petugas SET
	nip = '$data[nip]', 
	nama = '$data[nama]', 
	jenis_kelamin = '$data[jenis_kelamin]', 
	alamat = '$data[alamat]',
	password = '$data[password]'
	WHERE nip = $_GET[update];";

	mysqli_query($conn, $query_update);

	return mysqli_affected_rows($conn);
}

function delete($id)
{
	global $conn;

	$query_delete = "DELETE FROM petugas WHERE nip = $id";
	mysqli_query($conn, $query_delete);

	return mysqli_affected_rows($conn);
}
