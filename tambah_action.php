<?php
include "koneksi.php";

// Mengambil data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];

// Insert ke MySQL
$query = mysqli_query($koneksi, "INSERT INTO daftar_tamu (nim, nama) VALUES ('$nim', '$nama')");

if ($query) {
    echo "<script>alert('SIMPAN DATA BERHASIL'); document.location='index.php'</script>";
} else {
    echo "<script>alert('SIMPAN DATA GAGAL'); document.location='tambah.php'</script>";
}
?>