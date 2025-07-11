<?php
include "koneksi.php";

// Mengambil data dari form
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];

// Update ke MySQL
$query = mysqli_query($koneksi, "UPDATE daftar_tamu SET nim='$nim', nama='$nama' WHERE id='$id'");

if ($query) {
    echo "<script>alert('UPDATE DATA BERHASIL'); document.location='index.php'</script>";
} else {
    echo "<script>alert('UPDATE DATA GAGAL'); document.location='edit.php?id=$id'</script>";
}
?>