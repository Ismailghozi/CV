<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location:index.php");
    exit(); // Terminate script execution after the redirect
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Dashboard | By Code Info</title>
  <link rel="stylesheet" href="style.css">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
  
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          
          <h1>toko bunda</h1>
        </div>
        <ul>
          <li><a href="dasboard.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          <li><a href="karyawan/tkaryawan.php">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Karyawan</span>
          </a>
          </li>
          <li><a href="toko/ttoko.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">id produk</span>
          </a>
          </li> 
          <li><a href="kontak.php">
            <i class="fas fa-envelope"></i>
            <span class="nav-item">kontak</span>
          </a>
          </li>
          <li><a href="logout/logout.php">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">logout</span>
          </a>
        
                 </ul>
      </div>
    </nav>
    <div class="content">
        <div class="jarak">
            <!-- kiri -->
            <div class="kiri">
                <!-- blog -->
                <div class="border">
                    <div class="jarak">
                      <h3>INFORMASI</h3>
                      <table border="1">
                        <td><i class="fas fa-phone"></i></td>
                        <td><p align="justify">081210211061</p></td>
                        <tr>
                        
                          <td><i class="fas fa-home"></i></td>
                          <td><p align="justify">Jl. Dr. Radjiman Widyongningrat jl. Kp. Pulo Jahe, Jatinegara, Kec. Cakung, Kota Jakarta timur, DKI jakarta</p></td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-globe"></i></td>
                          <td><p align="justify">www.smkn71jakarta.com</p></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <!-- end blog -->
                  <!-- blog -->
                  <div class="border">
                    <div class="jarak">

                    </div>
                  </div>
                  <!-- end blog-->
                </div>
                <!-- kiri-->
                <!-- kanan-->
               
                <!-- kanan -->
      
            </div>
          </body>
          </html>
                  