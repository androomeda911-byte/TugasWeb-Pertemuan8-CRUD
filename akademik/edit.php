<?php
include 'koneksi.php';

$id = $_GET['id'] ?? 0;
$sql = $koneksi->prepare("SELECT * FROM mahasiswa WHERE id = :id");
$sql->bindParam(':id', $id);
$sql->execute();
$data = $sql->fetch();

if (!$data) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <a href="index.php">KEMBALI</a>
    <h3>EDIT DATA MAHASISWA</h3>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?= (int)$data['id'] ?>">
        <table>
            <tr><td>Nama</td><td><input type="text" name="nama" value="<?= e($data['nama']) ?>" required></td></tr>
            <tr><td>NIM</td><td><input type="number" name="nim" value="<?= e($data['nim']) ?>" required></td></tr>
            <tr><td>Alamat</td><td><input type="text" name="alamat" value="<?= e($data['alamat']) ?>"></td></tr>
            <tr><td></td><td><input type="submit" value="SIMPAN"></td></tr>
        </table>
    </form>
</body>
</html>