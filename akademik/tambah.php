<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <a href="index.php">KEMBALI</a>
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr><td>Nama</td><td><input type="text" name="nama" required></td></tr>
            <tr><td>NIM</td><td><input type="number" name="nim" required></td></tr>
            <tr><td>Alamat</td><td><input type="text" name="alamat"></td></tr>
            <tr><td></td><td><input type="submit" value="SIMPAN"></td></tr>
        </table>
    </form>
</body>
</html>