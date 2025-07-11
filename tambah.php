<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>SILAHKAN ISI DATA MAHASISWA</h1>
    <form action="tambah_action.php" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" id="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
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