<?php
// studi kasus menapilkan list data mahasiswa
// $mahasiswa = ["Zukri Adinalta", "11353104167", "Sistem Informasi", "Kumabbj@gmail.com"]

/*
<?php foreach($mahasiswa as $mhs) :?>
<ul>
  <li> <?= $mhs ?> </li>
</ul>
<?php endforeach; ?>
*/

// array didalam array
$mahasiswa = [
["Zukri Adinalta", "11353104167", "Sistem Informasi", "Kumabbj@gmail.com"],
["Desnando", "11353104167", "Sistem Informasi", "Desnando@gmail.com"],
];
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

  <?php foreach($mahasiswa as $mhs) :?>
  <ul>
    <li> Nama : <?= $mhs[0] ?> </li>
    <li> Nim : <?= $mhs[1] ?> </li>
    <li> Jurusan : <?= $mhs[2] ?> </li>
    <li> Email : <?= $mhs[3] ?> </li>
  </ul>
  <?php endforeach; ?>

</body>

</html>