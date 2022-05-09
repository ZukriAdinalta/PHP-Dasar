<?php
// Pengulangan Pada Array bisa menggunaka for / foreach.

$angka = [3, 5, 10, 75, 56, 23, 41, 72];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>
  <style>
  .kotak {
    height: 50px;
    width: 50px;
    background-color: salmon;
    text-align: center;
    line-height: 50px;
    margin: 3px;
    float: left;
  }

  .clear {
    clear: both;
  }
  </style>
</head>

<body>
  <!-- menggunakan pengulangan for -->
  <?php for($i =0; $i < count($angka); $i++) {?>
  <!-- variabel i kita mulai dr 0 karena key index array mulai dr 0  -->
  <!-- count menghitung jumlah element pada array -->
  <div class="kotak"><?= $angka[$i] ?></div>
  <!-- dimulai dari 0 + $i++ /1  -->
  <?php } ?>

  <div class="clear"></div>

  <!-- menggunakan pengulangan foreach -->
  <!-- foreach => untk setiap elemen array lakukan sesuatu -->
  <?php foreach($angka as $number){ ?>
  <div class="kotak"> <?= $number ?> </div>
  <?php } ?>

  <div class="clear"></div>
  <!-- sintak foreach -->
  <?php foreach($angka as $number): ?>
  <div class="kotak"> <?= $number ?> </div>
  <?php endforeach;?>
</body>

</html>