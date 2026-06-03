<?php
require_once __DIR__ . '/Koneksi.php';

function getMember() {
    $conn = getKoneksi();
    $result = $conn->query("SELECT * FROM member");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getMemberById($id) {
    $conn = getKoneksi();
    $stmt = $conn->prepare("SELECT * FROM member WHERE id_member = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function insertMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $conn = getKoneksi();
    $stmt = $conn->prepare("INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar);
    return $stmt->execute();
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $conn = getKoneksi();
    $stmt = $conn->prepare("UPDATE member SET nama_member=?, nomor_member=?, alamat=?, tgl_mendaftar=?, tgl_terakhir_bayar=? WHERE id_member=?");
    $stmt->bind_param("sssssi", $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar, $id);
    return $stmt->execute();
}

function deleteMember($id) {
    $conn = getKoneksi();
    $stmt = $conn->prepare("DELETE FROM member WHERE id_member = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}


function getBuku() {
    $conn = getKoneksi();
    $result = $conn->query("SELECT * FROM buku");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getBukuById($id) {
    $conn = getKoneksi();
    $stmt = $conn->prepare("SELECT * FROM buku WHERE id_buku = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function insertBuku($judul, $penulis, $penerbit, $tahun) {
    $conn = getKoneksi();
    $stmt = $conn->prepare("INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $judul, $penulis, $penerbit, $tahun);
    return $stmt->execute();
}

function updateBuku($id, $judul, $penulis, $penerbit, $tahun) {
    $conn = getKoneksi();
    $stmt = $conn->prepare("UPDATE buku SET judul_buku=?, penulis=?, penerbit=?, tahun_terbit=? WHERE id_buku=?");
    $stmt->bind_param("ssssi", $judul, $penulis, $penerbit, $tahun, $id);
    return $stmt->execute();
}

function deleteBuku($id) {
    $conn = getKoneksi();
    $stmt = $conn->prepare("DELETE FROM buku WHERE id_buku = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

// FUNGSI UNTUK TABEL PEMINJAMAN
function getPeminjaman() {
    $conn = getKoneksi();
    $result = $conn->query("SELECT * FROM peminjaman");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getPeminjamanById($id) {
    $conn = getKoneksi();
    $stmt = $conn->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function insertPeminjaman($tgl_pinjam, $tgl_kembali,$id_member, $id_buku) {
    $conn = getKoneksi();
    $stmt = $conn->prepare("INSERT INTO peminjaman (tgl_pinjam, tgl_kembali, id_member_FK_peminjaman_member, id_buku_FK_peminjaman_buku) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssii", $tgl_pinjam, $tgl_kembali, $id_member, $id_buku);
    return $stmt->execute();
}

function updatePeminjaman($id, $tgl_pinjam, $tgl_kembali) {
    $conn = getKoneksi();
    $stmt = $conn->prepare("UPDATE peminjaman SET tgl_pinjam=?, tgl_kembali=? WHERE id_peminjaman=?");
    $stmt->bind_param("ssi", $tgl_pinjam, $tgl_kembali, $id);
    return $stmt->execute();
}

function deletePeminjaman($id) {
    $conn = getKoneksi();
    $stmt = $conn->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
?>