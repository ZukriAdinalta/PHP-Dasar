<?php
// cek apakah tidak ada data di $_Get
if(!isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["jurusan"])){ // jika get nama belum di buat maka
  // redirect => memaksa user untuk kembali ke halaman sebelumnya
  header("Location: 2.get.php"); // kembali ke 2.get.php
  exit(); // diakhiri dengan exit() supaya dta di bawah tdk di eksekusi
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
</head>

<body>
  <h1>Data Mahasiswa</h1>

  <ul>
    <li><img src="img/<?= $_GET["gambar"]?>"></li>
    <li> Nama : <?= $_GET["nama"] ?> </li>
    <li> Nim : <?= $_GET["nim"] ?> </li>
    <li> Jurusan : <?= $_GET["jurusan"] ?> </li>
    <li> Email : <?= $_GET["email"] ?> </li>
  </ul>
  <a href="2.Get.php">Kembali</a>
</body>

</html>