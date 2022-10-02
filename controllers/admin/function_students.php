<?php
include '../../config/connection.php';

// Hilmi Tsaqif - membuat function menampilkan data dari tabel siswa
function display($table1, $table2, $id1, $id2)
{
	global $conn;

	$query = "SELECT * FROM " . $table1 . " " . $table2 . " " . $id1 . " = " . $id2;
	$cek = mysqli_query($conn, $query);

	return $cek;
}

// Zacky - membuat function crud staff
function create($data)
{
	global $conn;

	$nis = $data['nis'];
	$nama = $data['nama'];
	$jenis_kelamin = $data['jenis_kelamin'];
	$alamat = $data['alamat'];
	$id_kelas = $data['id_kelas'];

	$query_insert = "INSERT INTO siswa
	(nis, nama_siswa, jenis_kelamin, alamat ,id_kelas) VALUES ('$nis', '$nama', '$jenis_kelamin', '$alamat', '$id_kelas')";

	mysqli_query($conn, $query_insert);

	return mysqli_affected_rows($conn);
}

function update($data)
{
	global $conn;

	$query_update = "UPDATE siswa SET
	nis = '$data[nis]', 
	nama_siswa = '$data[nama]', 
	jenis_kelamin = '$data[jenis_kelamin]', 
	alamat = '$data[alamat]',
	id_kelas = '$data[id_kelas]'
	WHERE nis = $_GET[update];";

	mysqli_query($conn, $query_update);

	return mysqli_affected_rows($conn);
}

function delete($id)
{
	global $conn;

	$query_delete = "DELETE FROM siswa WHERE nis = $id";
	mysqli_query($conn, $query_delete);

	return mysqli_affected_rows($conn);
}
