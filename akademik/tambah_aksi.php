<?php
include 'koneksi.php';

$nama   = trim($_POST['nama'] ?? '');
$nim    = trim($_POST['nim'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');

if ($nama === '' || $nim === '') {
    die("Nama dan NIM wajib diisi. <a href='tambah.php'>Kembali</a>");
}

$sql = $koneksi->prepare("INSERT INTO mahasiswa (nama, nim, alamat) VALUES (:nama, :nim, :alamat)");
$sql->bindParam(':nama', $nama);
$sql->bindParam(':nim', $nim);
$sql->bindParam(':alamat', $alamat);
$sql->execute();

header("Location: index.php");
exit;