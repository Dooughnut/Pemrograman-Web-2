<?php
require_once 'Model.php';
$id=''; $judul=''; $penulis=''; $penerbit=''; $tahun='';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = getBukuById($id);
    if ($data) {
        $judul = $data['judul_buku']; $penulis = $data['penulis'];
        $penerbit = $data['penerbit']; $tahun = $data['tahun_terbit'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul_buku']; $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit']; $tahun = $_POST['tahun_terbit'];

    if (!empty($_POST['id_buku'])) { updateBuku($_POST['id_buku'], $judul, $penulis, $penerbit, $tahun); } 
    else { insertBuku($judul, $penulis, $penerbit, $tahun); }
    header("Location: Buku.php"); exit;
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Form Buku</h2>
    <form method="POST">
        <input type="hidden" name="id_buku" value="<?= $id ?>">
        Judul: <input type="text" name="judul_buku" value="<?= $judul ?>" required><br><br>
        Penulis: <input type="text" name="penulis" value="<?= $penulis ?>" required><br><br>
        Penerbit: <input type="text" name="penerbit" value="<?= $penerbit ?>" required><br><br>
        Tahun Terbit: <input type="text" name="tahun_terbit" value="<?= $tahun ?>" required><br><br>
        <button type="submit">Simpan</button> <a href="Buku.php">Batal</a>
    </form>
</body>
</html>