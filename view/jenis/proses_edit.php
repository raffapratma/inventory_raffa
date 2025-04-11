<?php
$id = $_GET['id'];
$nama_jenis = $_POST['nama_jenis'];

include '../../config/koneksi.php';

$stmt = $conn->prepare("UPDATE jenis SET nama_jenis=? WHERE id_jenis=?");
$stmt->bind_param("si", $nama_jenis, $id);
$query = $stmt->execute();

if ($query) {
    echo "<script>alert('Data berhasil diedit');</script>";
    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
    echo "<script>window.location.href='view_tambah.php';</script>";
}
?>
