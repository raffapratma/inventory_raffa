<?php

$id = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$id_jenis = $_POST['id_jenis'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];

include '../../config/koneksi.php';
$query = mysqli_query($conn , "INSERT INTO barang VALUES(
'$id',
'$nama_barang',
'$id_jenis',
'$harga',
'$stock')");

if($query) {
    echo "<script>alert('Data berhasil disimpan')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data gagal disimpan')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>