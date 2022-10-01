<?php 
include '../../config/connection.php';

// Hilmi Tsaqif - membuat function menampilkan data dari tabel siswa
function display($table1, $table2, $id1, $id2){
	global $conn;

	$query = "SELECT * FROM " . $table1 . " " . $table2 . " " . $id1 . " = " . $id2;
	$cek = mysqli_query($conn, $query);

	return $cek;
}

// Zacky - membuat function crud staff



?>