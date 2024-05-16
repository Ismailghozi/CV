<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location:../login/index.php");
    exit(); // Terminate script execution after the redirect
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Desain Form Login Dengan CSS - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="../style3.css">
</head>
<body>
 
	<h1><br/></h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Tambah data mapel</p>
 
		<form method="post" action="tambah_aksi.php">
			<label>id produk</label>
			<input type="number" name="id_produk" class="form_login" placeholder="id produk">
 
			<label>nama produk</label>
			<input type="text" name="nama_produk" class="form_login" placeholder="nama produk">
			<label>tanggal produksi</label>
			<input type="date" name="tanggal_produksi" class="form_login" placeholder="tanggal produksi">
			<label>tanggal kadarluarsa</label>
			<input type="date" name="tanggal_kadarluarsa" class="form_login" placeholder="tanggal kadarluarsa">
			<label>komposisi</label>
			<input type="text" name="komposisi" class="form_login" placeholder="komposisi">
			<label>alamat produk</label>
			<input type="text" name="alamat_produksi" class="form_login" placeholder="alamat produk">
			
 
			<input type="submit" name="submit" class="tombol_login" value="SIMPAN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="ttoko.php">KEMBALI</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>