<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
// var_dump($result);
// if (!$result){ echo mysqli_error($koneksi);} // jika error pd database

/* ambil data (fetch) mahasiswa dari object result
1. mysqli_fetch_row() => mengemblikan array numerik
$mhs = mysqli_fetch_row($result);
var_dump($mhs);
2. mysqli_fetch_assoc() => mengemblikan array associative
$mhs = mysqli_fetch_assoc($result);
var_dump($mhs);
3. mysqli_fetch_array() => mengemblikan array numerik dan array associative
$mhs = mysqli_fetch_array($result);
var_dump($mhs);
4. mysqli_fetch_object() =>  mengembalikan object
$mhs = mysqli_fetch_object($result);
var_dump($mhs->nama);
*/

// while ($mhs = mysqli_fetch_assoc($result)){
// var_dump($mhs);
// }


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Nim</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
      <td><?= $i ?></td>
      <td>
        <a href="">Edit</a> |
        <a href="">Delete</a>
      </td>
      <td><img src="img/<?= $row["gambar"] ?>" alt="gambar1" width="50px"></td>
      <td><?= $row["nama"] ?></td>
      <td><?= $row["nim"] ?></td>
      <td><?= $row["email"] ?></td>
      <td><?= $row["jurusan"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endwhile; ?>
  </table>

</body>

</html>