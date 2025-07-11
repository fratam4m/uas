<?php
include "koneksi.php";

// Pastikan koneksi berhasil sebelum melanjutkan
if (!$koneksi) {
    die("Koneksi ke database gagal. Periksa file koneksi.php.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>
    <a href="tambah.php">Tambah Mahasiswa</a><br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Waktu</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1; // Inisialisasi nomor urut
        $query = mysqli_query($koneksi, "SELECT * FROM daftar_tamu");

        // Cek apakah query berhasil dijalankan
        if ($query) {
            while ($data = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>"; // Tampilkan nomor urut dan increment
                echo "<td>" . htmlspecialchars($data['nim']) . "</td>"; // Gunakan htmlspecialchars untuk keamanan
                echo "<td>" . htmlspecialchars($data['nama']) . "</td>"; // Gunakan htmlspecialchars untuk keamanan
                echo "<td>" . htmlspecialchars($data['tanggal']) . "</td>"; // Gunakan htmlspecialchars untuk keamanan
                echo "<td><a href='edit.php?id=" . htmlspecialchars($data['id']) . "'>EDIT</a> | <a href='delete.php?id=" . htmlspecialchars($data['id']) . "'>HAPUS</a></td>";
                echo "</tr>";
            }
        } else {
            // Tampilkan pesan error jika query gagal
            echo "<tr><td colspan='5'>Error saat mengambil data: " . mysqli_error($koneksi) . "</td></tr>";
        }
        ?>
    </table>
</body>
</html>