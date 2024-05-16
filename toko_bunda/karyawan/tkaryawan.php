<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location:../index.php");
    exit(); // Terminate script execution after the redirect
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TOKO BUNDA</title>
  <link rel="stylesheet" href="../style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <h1>Toko Bunda</h1>
        </div>
        <ul>
          <li><a href="../dasboard.php">
            <i class="fas fa-home"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
           <li><a href="../karyawan/tkaryawan.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">Karyawan</span>
          </a>
          </li>
          <li><a href="../toko/ttoko.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Produk</span>
          </a>
          </li>
          <li><a href="../kontak.php">
            <i class="fas fa-phone"></i>
            <span class="nav-item">Contact</span>
          </a>
          </li>
          <li><a href="../logout/logout.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="main">
      <div class="main-top">
        <p>SELAMAT DATANG DI TOKO BUNDA</p>
      </div>
      <div class="main-body">
      <div class="job_card">
        <div class="">
          <div class="img">
            <i class=""></i>
          </div>
           <div class="content">
        <div class="jarak">
            <!-- kiri -->
            <div class="kiri">
                <!-- blog -->
                <div class="border">
                    <div class="jarak">
                      <center>
   <h2>DATA KARYAWAN</h2>
</center>
  <br/>
  <a href="tambah.php" class="icon-button">
        <i class="fas fa-plus" herf="tambah.php"> TAMBAH DATA KARYAWAN</i>
    </a>
  <br/>
  <br/>
  <table class="table1">
    <tr>
      <th>Username</th>
      <th>Password</th>
      <th>Email</th>
      <th colspan="2">Opsi</th>

    </tr>
  <?php
    include '../koneksi.php'; 
    $batas = 3;
    $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
    $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  
 
    $previous = $halaman - 1;
    $next = $halaman + 1;
    
    $data = mysqli_query($koneksi,"select * from karyawan");
    $jumlah_data = mysqli_num_rows($data);
    $total_halaman = ceil($jumlah_data / $batas);
    $data = mysqli_query($koneksi,"select * from karyawan limit $halaman_awal, $batas");
    $nomor = $halaman_awal+1;
    while($d = mysqli_fetch_array($data)){  
  
    // $data = mysqli_query($koneksi,"select * from produk");
    // while($d = mysqli_fetch_array($data)){
  ?>
      <tr>
        <td><?php echo $d['username']; ?></td>
        <td><?php echo $d['password']; ?></td>
        <td><?php echo $d['email']; ?></td>
        <td>
          <a href="edit.php?id_karyawan=<?php echo $d['id_karyawan']; ?>" onclick="return confirm ('Edit gak nih?');" class="btn btn-outline-success">
          <i class="fas fa-pen"></i> </a></td>
          <td><a href="hapus.php?id_karyawan=<?php echo $d['id_karyawan']; ?>" onclick="return confirm ('Hapus gak nih?');" class="btn btn-outline-danger">
            <i class="fas fa-eraser"></i></a>
          </td>
        </td>
      </tr>
      <?php 
    }
    ?>
</center>
  </table>
    
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link"<?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
        </li>
        <?php 
        for($x=1;$x<=$total_halaman;$x++){
          ?> 
          <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
          <?php
        }
        ?>        
        <li class="page-item">
          <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
        </li>
      </ul>
    
  </div> 
                </div>
               
</body>
</html>
</body>
</html>