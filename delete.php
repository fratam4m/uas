<?php
include "koneksi.php";

$id = $_GET['id']; // Mengambil ID dari URL

// Menghapus data
$query = mysqli_query($koneksi, "DELETE FROM daftar_tamu WHERE id='$id'");

if ($query) {
    echo "<script>alert('HAPUS DATA BERHASIL'); document.location='index.php'</script>";
} else {
    echo "<script>alert('HAPUS DATA GAGAL'); document.location='index.php'</script>";
}
?>