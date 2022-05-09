<?php
require_once __DIR__ . "/../functions.php";
$keyword = $_GET["keyword"];

$query = " SELECT * FROM mahasiswa 
            WHERE
            nama LIKE '%$keyword%' OR 
            nim LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' 
            ";
$mahasiswa = query($query);
?>

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