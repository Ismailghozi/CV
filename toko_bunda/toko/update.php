<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location:../index.php");
    exit(); // Terminate script execution after the redirect
}
?>
<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$tanggal_produksi = $_POST['tanggal_produksi'];
$tanggal_kadarluarsa = $_POST['tanggal_kadarluarsa'];
$komposisi = $_POST['komposisi'];
$alamat_produksi = $_POST['alamat_produksi'];
 
// update data ke database
mysqli_query($koneksi,"update toko set id_produk='$id_produk', nama_produk='$nama_produk', tanggal_produksi='$tanggal_produksi',tanggal_kadarluarsa='$tanggal_kadarluarsa', komposisi='$komposisi', alamat_produksi='$alamat_produksi' where id_produk='$id_produk'");
 
// mengalihkan halaman kembali ke index.php
header("location:ttoko.php");
 
?>