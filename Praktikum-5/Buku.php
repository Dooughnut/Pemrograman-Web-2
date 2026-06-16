<?php
require_once 'Model.php';

if (isset($_GET['hapus'])) {
    deleteBuku($_GET['hapus']);
    header("Location: Buku.php");
    exit;
}
$buku = getBuku();
?>
<!DOCTYPE html>
<html>
<head><title>Data Buku</title></head>
<body>
    <h2>Data Buku</h2>
    <a href="Member.php">Data Member</a> | <a href="Peminjaman.php">Data Peminjaman</a><br><br>
    <a href="FormBuku.php">Tambah Buku Baru</a><br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr><th>ID</th><th>Judul</th><th>Penulis</th><th>Penerbit</th><th>Tahun</th><th>Aksi</th></tr>
        <?php foreach ($buku as $row): ?>
        <tr>
            <td><?= $row['id_buku'] ?></td><td><?= $row['judul_buku'] ?></td>
            <td><?= $row['penulis'] ?></td><td><?= $row['penerbit'] ?></td><td><?= $row['tahun_terbit'] ?></td>
            <td>
                <a href="FormBuku.php?id=<?= $row['id_buku'] ?>">Edit</a> | 
                <a href="Buku.php?hapus=<?= $row['id_buku'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>