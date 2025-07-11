<?php
include "koneksi.php";

$id = $_GET['id']; // Mengambil ID dari URL

$query = mysqli_query($koneksi, "SELECT * FROM daftar_tamu WHERE id='$id'");
$data = mysqli_fetch_array($query); // Mengambil data berdasarkan ID

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>SILAHKAN UBAH DATA MAHASISWA</h1>
    <form action="edit_action.php" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="text" name="nim" id="nim" value="<?php echo $data['nim']; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="SIMPAN">
                    <input type="reset" value="CANCEL">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>