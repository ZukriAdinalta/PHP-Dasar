<?php
// Session
session_start();
if(!isset($_SESSION["login"])){ // jika belum pernah login maka kembali ke halaman login
  header("Location: login.php");
  exit;
}

require_once __DIR__ . "/functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");
//  ORDER BY id ASC urutan id dari kecil ke besar
// ORDER BY id DESC urutan id dari besar ke kecil

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
  <a href="logout.php">Logout</a>
  <h1>Daftar Mahasiswa</h1>
  <a href="tambah.php">Tambah Data Mahasiswa</a><br>
  <form action="" method="POST">
    <input type="text" name="keyword" size="50%" autofocus autocomplete="off" placeholder="Masukan Keyword Disini..">
    <!-- autofocus => ketika masuk di halaman maka langsung ke input keyword -->
    <!-- autocomplete="off" => menglikana story pencarian -->
    <button type="submit" name="cari">Cari</button>
  </form> </br>
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