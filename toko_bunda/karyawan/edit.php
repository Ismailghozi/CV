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
	$id_karyawan = $_GET['id_karyawan'];
	$data = mysqli_query($koneksi,"select * from karyawan where id_karyawan='$id_karyawan'");
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="kotak_login">
		<p class="tulisan_login"> Edit karyawan</p>

		<form method="post" action="update.php">
			<label>username</label>
			<input type="text" name="username" class="form_login" placeholder="username" value="<?php echo $d['username']; ?>">

			<label>password</label>
			<input type="text" name="password" class="form_login" placeholder="password" value="<?php echo $d['password']; ?>">

			<label>id karyawan</label>
			<input type="number" name="id_karyawan" class="form_login" placeholder="id karyawan" value="<?php echo $d['id_karyawan']; ?>">

			<label>email</label>
			<input type="text" name="email" class="form_login" placeholder="Email" value="<?php echo $d['email']; ?>">
			
			

			<input type="submit" class="tombol_login" value="SIMPAN">
			<br/>
			<br/>
			<center>
				<a class="link" href="tkaryawan.php">KEMBALI</a>
			</center>
		<?php 
	}
	?>
 
</body>
</html>