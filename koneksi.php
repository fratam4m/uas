<?php
// Variabel koneksi database
$host = "localhost";
$user = "root";
$spassword = ""; // Kosongkan jika tidak ada password
$db = "buku_tamu"; // Nama database Anda

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $spassword, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
// else {
//     echo "Koneksi Berhasil"; // Hapus atau komentari ini setelah yakin koneksi berhasil
// }
?>