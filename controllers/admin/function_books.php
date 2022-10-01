<!-- Hilmi Tsaqif -->
<?php 
include '../../config/connection.php';

function display($table, $condition = ""){
	global $conn;
	$query = "SELECT * FROM ". $table . " " . $condition;
	// var_dump($query);
	$cek = mysqli_query($conn, $query);
	return $cek;
}

?>