<?php
include 'koneksi.php';
$data = $koneksi->query("SELECT * FROM mahasiswa ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CRUD Data Mahasiswa</title>
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <br><br>
    <table border="1" cellpadding="6">
        <tr>
            <th>NO</th><th>Nama</th><th>NIM</th><th>Alamat</th><th>OPSI</th>
        </tr>
        <?php $no = 1; foreach ($data as $d): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= e($d['nama']) ?></td>
            <td><?= e($d['nim']) ?></td>
            <td><?= e($d['alamat']) ?></td>
            <td>
                <a href="edit.php?id=<?= (int)$d['id'] ?>">EDIT</a> |
                <a href="hapus.php?id=<?= (int)$d['id'] ?>"
                   onclick="return confirm('Yakin hapus data ini?')">HAPUS</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php if (!$data): ?>
        <tr><td colspan="5" align="center">Belum ada data.</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>