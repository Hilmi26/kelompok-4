<?php 
include '../../config/connection.php';

// Hilmi Tsaqif - membuat function menampilkan data dari tabel staff
function display($table){
	global $conn;
	
	$query = "SELECT * FROM " . $table;
	$cek = mysqli_query($conn, $query);

	return $cek;
}

// Zacky - membuat function crud staff

?>