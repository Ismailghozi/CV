<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location:../login/index.php");
    exit(); // Terminate script execution after the redirect
}
?>
<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_produk = $_GET['id_produk'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from toko where id_produk='$id_produk'");
 
// mengalihkan halaman kembali ke index.php
header("location:ttoko.php");
 
?>