<!-- Hilmi Tsaqif -->
<?php
include '../../controllers/admin/function_staff.php';

$id = $_GET["id_buku"]; //mengambil data id_buku dari url

if (delete($id) > 0) {
    echo "<script>alert('Data berhasil dihapus');
		document.location='table_books.php'</script>";
} else {
    echo "<script>alert('Gagal');
		document.location='table_books.php'</script>";
}
