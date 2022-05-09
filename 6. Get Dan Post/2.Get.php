<?php
//$_GET
/*
$_GET["nama"] = "Zukri Adinalta";
$_GET["Nim"] = 11353104167;

var_dump($_GET);
// Menapilkan get pada browser => http://localhost/11.%20php%20unpas/PHP%20Dasar/6.%20Get%20Dan%20Post/2.Get.php?nama=zukri%20adinalta&&nim=11353104167
*/
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
    <?php foreach($mahasiswa as $mhs) :?>
    <li> <a href="3.Get.php?nama=<?= $mhs["nama"]?>
    &gambar=<?= $mhs["gambar"]?>&jurusan=<?= $mhs["jurusan"]?>
    &nim=<?= $mhs["nim"]?>&email=<?= $mhs["email"]?>">
        <?= $mhs["nama"] ?></a></li>
    <?php endforeach; ?>
  </ul>

</body>

</html>