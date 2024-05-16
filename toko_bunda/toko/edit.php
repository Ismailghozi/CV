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

	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="../style3.css">
</head>
<body>
 
	
 
	<?php
	include '../koneksi.php';
	$id_produk = $_GET['id_produk'];
	$data = mysqli_query($koneksi,"select * from toko where id_produk='$id_produk'");
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="kotak_login">
		<p class="tulisan_login"> Edit produk</p>

		<form method="post" action="update.php">
			<label>id produk</label>
			<input type="number" name="id_produk" class="form_login" placeholder="id produk" value="<?php echo $d['id_produk']; ?>">

			<label>nama produk</label>
			<input type="text" name="nama_produk" class="form_login" placeholder="nama produk" value="<?php echo $d['nama_produk']; ?>">

			<label>tanggal produksi</label>
			<input type="date" name="tanggal_produksi" class="form_login" placeholder="tanggal produksi" value="<?php echo $d['tanggal_produksi']; ?>">
			<label>tanggal kadarluarsa</label>
			<input type="date" name="tanggal_kadarluarsa" class="form_login" placeholder="tanggal kadarluarsa" value="<?php echo $d['tanggal_kadarluarsa']; ?>">

			<label>komposisi</label>
			<input type="text" name="komposisi" class="form_login" placeholder="komposisi" value="<?php echo $d['komposisi']; ?>">
			
			<label>alamat produk</label>
			<input type="text" name="alamat_produksi" class="form_login" placeholder="alamat produk" value="<?php echo $d['alamat_produksi']; ?>">

			<input type="submit" class="tombol_login" value="SIMPAN">
			<br/>
			<br/>
			<center>
				<a class="link" href="ttoko.php">KEMBALI</a>
			</center>
		<?php 
	}
	?>
 
</body>
</html>