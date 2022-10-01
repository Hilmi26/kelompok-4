<?php 
include '../../config/connection.php';

// Hilmi Tsaqif
function display($table){
	global $conn;
	
	$query = "SELECT * FROM " . $table;
	$cek = mysqli_query($conn, $query);

	return $cek;

}

?>