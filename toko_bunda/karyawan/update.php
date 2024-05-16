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
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$id_karyawan = $_POST['id_karyawan'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update karyawan set username='$username', password='$password', id_karyawan='$id_karyawan', email='$email' where id_karyawan='$id_karyawan'");
 
// mengalihkan halaman kembali ke index.php
header("location:tkaryawan.php");
 
?>