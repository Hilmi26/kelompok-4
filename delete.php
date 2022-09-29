<?php
include 'config.php';

$id = $_GET['id'];
$delete = mysqli_query($conn, "DELETE FROM buku WHERE id='$id'");

if ($delete) { ?>
    <script>
        alert("menghapus");
        document.location = "home.php";
    </script>
<?php
}else {
    echo "coba lagi";
}
?>