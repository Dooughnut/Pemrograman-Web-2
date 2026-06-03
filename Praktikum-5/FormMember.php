<?php
require_once 'Model.php';

$id = '';
$nama = '';
$nomor = '';
$alamat = '';
$tgl_daftar = '';
$tgl_bayar = '';

// Jika ada parameter 'id' di URL, berarti ini mode EDIT
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = getMemberById($id);
    if ($data) {
        $nama = $data['nama_member'];
        $nomor = $data['nomor_member'];
        $alamat = $data['alamat'];
        $tgl_daftar = $data['tgl_mendaftar'];
        $tgl_bayar = $data['tgl_terakhir_bayar'];
    }
}

// Proses submit form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_member'];
    $nomor = $_POST['nomor_member'];
    $alamat = $_POST['alamat'];
    $tgl_daftar = $_POST['tgl_mendaftar'];
    $tgl_bayar = $_POST['tgl_terakhir_bayar'];

    if (!empty($_POST['id_member'])) {
        updateMember($_POST['id_member'], $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar);
    } else {
        insertMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar);
    }
    header("Location: Member.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Member</title>
</head>
<body>
    <h2>Form <?= empty($id) ? 'Tambah' : 'Edit' ?> Member</h2>
    <form method="POST" action="">
        <input type="hidden" name="id_member" value="<?= $id ?>">
        
        <label>Nama Member:</label><br>
        <input type="text" name="nama_member" value="<?= $nama ?>" required><br><br>

        <label>Nomor Member:</label><br>
        <input type="text" name="nomor_member" value="<?= $nomor ?>" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required><?= $alamat ?></textarea><br><br>

        <label>Tanggal Mendaftar:</label><br>
        <input type="date" name="tgl_mendaftar" value="<?= $tgl_daftar ?>" required><br><br>

        <label>Tanggal Terakhir Bayar:</label><br>
        <input type="date" name="tgl_terakhir_bayar" value="<?= $tgl_bayar ?>" required><br><br>

        <button type="submit">Simpan</button>
        <a href="Member.php">Batal</a>
    </form>
</body>
</html>