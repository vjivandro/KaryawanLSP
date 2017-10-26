<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $namaDB = "db_karyawan";

  //membuat koneksi
  $con = new mysqli($servername, $username, $password, $namaDB);
  // mengetes koneksi berhasil apa tidak
  if (mysqli_connect_errno()) {
    echo 'Koneksi gagal : ' .mysqli_connect_error();
    exit();
    mysqli_close($mysqli);
  } 
 ?>
