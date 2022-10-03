<!-- Zacky -->
<?php
include '../../controllers/admin/function_students.php';

$id = $_GET["nis"]; //mengambil data nis dari url

if (delete($id) > 0) {
  echo "<script>alert('Data berhasil dihapus');
		document.location='table_students.php'</script>";
} else {
  echo "<script>alert('Gagal');
		document.location='table_students.php'</script>";
}
