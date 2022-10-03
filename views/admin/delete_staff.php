<!-- Zacky -->
<?php
include '../../controllers/admin/function_staff.php';

$id = $_GET["nip"]; //mengambil data nip dari url

if (delete($id) > 0) {
  echo "<script>alert('Data berhasil dihapus');
		document.location='table_staff.php'</script>";
} else {
  echo "<script>alert('Gagal');
		document.location='table_staff.php'</script>";
}
