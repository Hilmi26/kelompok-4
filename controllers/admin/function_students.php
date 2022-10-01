<?php 
include '../../config/connection.php';

// Hilmi Tsaqif
function display($table1, $table2, $id1, $id2){
	global $conn;

	$query = "SELECT * FROM " . $table1 . " " . $table2 . " " . $id1 . " = " . $id2;
	$cek = mysqli_query($conn, $query);

	return $cek;
}


?>