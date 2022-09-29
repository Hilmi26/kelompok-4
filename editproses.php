<?php
include "config.php";

$id =  $_POST['id_buku'];
$kode = $_POST['kode_buku'];
	$judul = $_POST['judul_buku'];
	$kategori = $_POST['kategori_buku'];
	$pengarang = $_POST['pengarang_buku'];
	$penerbit = $_POST['penerbit_buku'];
	$halaman = $_POST['jumlah_halaman'];

    $query = mysqli_query($conn, "UPDATE buku SET id='$id',kode_buku='$kode',judul_buku='$judul',kategori_buku='$kategori',pengarang_buku='$pengarang', penerbit_buku='$penerbit',jumlah_halaman='$halaman' WHERE id='$id' ");

    if($query){
        header("location:home.php");
    }
?>