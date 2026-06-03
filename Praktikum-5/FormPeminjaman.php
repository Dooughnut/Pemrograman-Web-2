<?php
require_once 'Model.php';
$id=''; $tgl_pinjam=''; $tgl_kembali='';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = getPeminjamanById($id);
    if ($data) {
        $tgl_pinjam = $data['tgl_pinjam']; $tgl_kembali = $data['tgl_kembali'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tgl_pinjam = $_POST['tgl_pinjam']; $tgl_kembali = $_POST['tgl_kembali'];

    if (!empty($_POST['id_peminjaman'])) { updatePeminjaman($_POST['id_peminjaman'], $tgl_pinjam, $tgl_kembali); } 
    else { insertPeminjaman($tgl_pinjam, $tgl_kembali, $_POST['id_member'], $_POST['id_buku']); }
    header("Location: Peminjaman.php"); exit;
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Form Peminjaman</h2>
    <form method="POST">
        <input type="hidden" name="id_peminjaman" value="<?= $id ?>">
        Tanggal Pinjam: <input type="date" name="tgl_pinjam" value="<?= $tgl_pinjam ?>" required><br><br>
        Tanggal Kembali: <input type="date" name="tgl_kembali" value="<?= $tgl_kembali ?>" required><br><br>
        ID Member: <input type="number" name="id_member" required><br><br>
        ID Buku: <input type="number" name="id_buku" required><br><br>
        <button type="submit">Simpan</button> <a href="Peminjaman.php">Batal</a>
    </form>
</body>
</html>