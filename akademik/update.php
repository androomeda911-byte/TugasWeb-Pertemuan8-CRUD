<?php
include 'koneksi.php';

$id     = $_POST['id'] ?? 0;
$nama   = trim($_POST['nama'] ?? '');
$nim    = trim($_POST['nim'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');

if ($nama === '' || $nim === '') {
    die("Nama dan NIM wajib diisi. <a href='edit.php?id=" . (int)$id . "'>Kembali</a>");
}

$sql = $koneksi->prepare("UPDATE mahasiswa SET nama=:nama, nim=:nim, alamat=:alamat WHERE id=:id");
$sql->bindParam(':nama', $nama);
$sql->bindParam(':nim', $nim);
$sql->bindParam(':alamat', $alamat);
$sql->bindParam(':id', $id);
$sql->execute();

header("Location: index.php");
exit;