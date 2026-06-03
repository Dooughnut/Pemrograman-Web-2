<?php
require_once 'Model.php';

// Proses Hapus Data
if (isset($_GET['hapus'])) {
    deleteMember($_GET['hapus']);
    header("Location: Member.php");
    exit;
}

$members = getMember();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Member</title>
</head>
<body>
    <h2>Data Member</h2>
    <a href="Buku.php">Data Buku</a> | <a href="Peminjaman.php">Data Peminjaman</a>
    <br><br>
    <a href="FormMember.php">Tambah Member Baru</a>
    <br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th><th>Nama</th><th>Nomor</th><th>Alamat</th><th>Tgl Daftar</th><th>Tgl Bayar</th><th>Aksi</th>
        </tr>
        <?php foreach ($members as $row): ?>
        <tr>
            <td><?= $row['id_member'] ?></td>
            <td><?= $row['nama_member'] ?></td>
            <td><?= $row['nomor_member'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td><?= $row['tgl_mendaftar'] ?></td>
            <td><?= $row['tgl_terakhir_bayar'] ?></td>
            <td>
                <a href="FormMember.php?id=<?= $row['id_member'] ?>">Edit</a> | 
                <a href="Member.php?hapus=<?= $row['id_member'] ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>