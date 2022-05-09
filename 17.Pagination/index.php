<?php
// Session
session_start();
if(!isset($_SESSION["login"])){ // jika belum pernah login maka kembali ke halaman login
  header("Location: login.php");
  exit;
}

require_once __DIR__ . "/functions.php";

// pagination function
// konfigurasi
$jumlahDataHalaman =2;

/* Cara Pertama
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa " );
$jumlahData = mysqli_num_rows($result); // berapa data mahasiswa yg berada di database tabel mahasiswa
// var_dump($jumlahData);*/

// cara kedua
$jumlahData = count(query("SELECT * FROM mahasiswa " )); // berapa data mahasiswa yg berada di database tabel mahasiswa
$jumlahHalaman = ceil($jumlahData / $jumlahDataHalaman); // round()=> membulatkan bilangan terdekat dan floor() => membulatkan ke bawah dan ceil() => membulatkan ke atas

// Logic halama(page)
/*
if(isset($_GET["page"])){
$halamanAktif = $_GET["page"];
}else{
  $halamanAktif =1;
} */

// Cara ternary logic
$halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1; 
// Halaman 2, mulai 3
$awalData = ($jumlahDataHalaman * $halamanAktif) - $jumlahDataHalaman; 

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataHalaman"); // limit 0, $jumlahDataHalaman (1=> dimulai dr index-0) ($jumlahDataHalaman=> menapilkan 2 data)
// 

if(isset($_POST["cari"])){
  $mahasiswa = cari($_POST['keyword']);
}
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
  <!-- Logout -->
  <a href="logout.php">Logout</a>
  <h1>Daftar Mahasiswa</h1>

  <!-- tambahkan data -->
  <a href="tambah.php">Tambah Data Mahasiswa</a><br>

  <!-- form cari -->
  <form action="" method="POST">
    <input type="text" name="keyword" size="50%" autofocus autocomplete="off" placeholder="Masukan Keyword Disini..">
    <!-- autofocus => ketika masuk di halaman maka langsung ke input keyword -->
    <!-- autocomplete="off" => menglikana story pencarian -->
    <button type="submit" name="cari">Cari</button>
  </form> </br>

  <!-- Pagination -->
  <?php if($halamanAktif > 1): ?>
  <a href="?page=<?= $halamanAktif - 1 ?>">&laquo;</a>
  <?php endif; ?>

  <?php for($i = 1; $i <= $jumlahHalaman; $i++) :?>
  <?php if($i == $halamanAktif): ?>
  <a href="?page=<?= $i; ?>" style="font-weight: bold; color:salmon;"><?= $i; ?></a>
  <?php else: ?>
  <a href="?page=<?= $i; ?>"><?= $i; ?></a>
  <?php endif; ?>
  <?php endfor; ?>

  <?php if($halamanAktif < $jumlahHalaman): ?>
  <a href="?page=<?= $halamanAktif + 1 ?>">&raquo;</a>
  <?php endif; ?>

  <!-- Form Tampilkan Data -->
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
    <?php foreach($mahasiswa as $row ):?>
    <tr>
      <td><?= $i ?></td>
      <td>
        <a href="edit.php?id=<?= $row["id"] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $row["id"] ?> " onclick="
        return confirm('Yakin diHapus?');">Delete</a>
      </td>
      <td><img src="img/<?= $row["gambar"] ?>" alt="gambar1" width="50px"></td>
      <td><?= $row["nama"] ?></td>
      <td><?= $row["nim"] ?></td>
      <td><?= $row["email"] ?></td>
      <td><?= $row["jurusan"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </table>

</body>

</html>