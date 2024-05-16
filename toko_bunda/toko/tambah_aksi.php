<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../login/login.php");
    exit(); // Terminate script execution after the redirect
}
?>

<?php 
// koneksi database
include '../koneksi.php';
 
if (isset($_POST['submit'])) {
	// menangkap data yang di kirim dari form
	$id_produk = $_POST['id_produk'];
	$nama_produk = $_POST['nama_produk'];
	$tanggal_produksi = $_POST['tanggal_produksi'];
	$tanggal_kadarluarsa = $_POST['tanggal_kadarluarsa'];
	$komposisi = $_POST['komposisi'];
	$alamat_produksi = $_POST['alamat_produksi'];
	$username = $_SESSION['username'];

	$result = mysqli_query($koneksi,"SELECT id_karyawan FROM karyawan WHERE username = '$username'");
	$user = [];

	while ($d = mysqli_fetch_assoc($result)) {
		$user[] = $d;
	}

	$user_id = $user[0]['id_karyawan'];

	// menginput data ke database
	mysqli_query($koneksi,"insert into toko values('$id_produk','$nama_produk','$tanggal_produksi','$tanggal_kadarluarsa','$komposisi','$alamat_produksi','$user_id')");
}
 
// mengalihkan halaman kembali ke index.php
header("location:ttoko.php");
 
?>