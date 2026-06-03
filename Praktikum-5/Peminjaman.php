<?php
require_once 'Model.php';

if (isset($_GET['hapus'])) {
    deletePeminjaman($_GET['hapus']);
    header("Location: Peminjaman.php"); exit;
}
$peminjaman = getPeminjaman();
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Data Peminjaman</h2>
    <a href="Member.php">Data Member</a> | <a href="Buku.php">Data Buku</a><br><br>
    <a href="FormPeminjaman.php">Tambah Data Peminjaman</a><br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr><th>ID</th><th>Tgl Pinjam</th><th>Tgl Kembali</th><th>ID Member</th><th>ID Buku</th><th>Aksi</th></tr>
        <?php foreach ($peminjaman as $row): ?>
        <tr>
            <td><?= $row['id_peminjaman'] ?></td><td><?= $row['tgl_pinjam'] ?></td><td><?= $row['tgl_kembali'] ?></td>
            <td><?= $row['id_member_FK_peminjaman_member'] ?></td><td><?= $row['id_buku_FK_peminjaman_buku'] ?></td>
            <td>
                <a href="FormPeminjaman.php?id=<?= $row['id_peminjaman'] ?>">Edit</a> | 
                <a href="Peminjaman.php?hapus=<?= $row['id_peminjaman'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>