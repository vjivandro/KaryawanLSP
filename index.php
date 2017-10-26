
<html>
  <head>
    <title>Data Karyawan</title>
  </head>
  <body>
    <!-- <p>Tambahkan data disini <a href="tambah.php">Tambah Data</a></p> -->

    <?php
      include 'koneksi.php';
      $data = "SELECT * FROM tb_karyawan";
      $result = $con -> query($data);

      echo "<table border = '1'>";
      echo "<tr>";
      echo "<th>NIK</th>";
      echo "<th>Nama</th>";
      echo "<th>Lama</th>";
      echo "</tr>";

      if ($result->num_rows > 0) {
        # code...
        while ($row = $result->fetch_assoc()) {
          # code...
          echo "<tr>";
          echo "<td>".$row['NIK']."</td>";
          echo "<td>".$row['Nama']."</td>";

          if ($row['Lama'] > 10 ) {
            echo "<td>lama</td>";
          } else {
            echo "<td>bentar</td>";
          }
          echo "</tr>";
        }
      } else {
        echo "0 results";
      }
      echo "</table>";


      $con->close();
     ?>
  </body>
</html>
