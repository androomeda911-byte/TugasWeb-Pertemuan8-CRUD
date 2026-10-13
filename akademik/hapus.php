<?php
include 'koneksi.php';

$id = $_GET['id'] ?? 0;

$sql = $koneksi->prepare("DELETE FROM mahasiswa WHERE id = :id");
$sql->bindParam(':id', $id);
$sql->execute();

header("Location: index.php");
exit;