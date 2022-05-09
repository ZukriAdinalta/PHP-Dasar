<?php
//Associative Array => keynya adalah strin yg kita bikin sendiri
$mahasiswa = [
            [
              "nama" => "Zukri Adinalta", 
              "nim" => "11353104167", 
              "jurusan" => "Sistem Informasi", 
              "email" =>  "Kumabbj@gmail.com",
              "gambar" => "gambar1.jpg"
            ],
            [
              "nama" => "Desnando", 
              "nim" => "11353104253", 
              "jurusan" => "Sistem Informasi", 
              "email" =>  "Desnando@gmail.com",
              // "tugas" => [80, 90, 85]
              "gambar" => "gambar2.jpg"
            ],
        ];
// echo $mahasiswa[1]["email"];
// echo $mahasiswa[1]["tugas"][1];
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
    <li><img src="img/<?= $mhs["gambar"]?>"></li>
    <li> Nama : <?= $mhs["nama"] ?> </li>
    <li> Nim : <?= $mhs["nim"] ?> </li>
    <li> Jurusan : <?= $mhs["jurusan"] ?> </li>
    <li> Email : <?= $mhs["email"] ?> </li>
  </ul>
  <?php endforeach; ?>

</body>

</html>