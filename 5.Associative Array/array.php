<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Array</title>
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
  <?php

$angka = [[1,2,3],
          [4,5,6],
          [7,8,9]
        ];
// echo $angka[0][2]; // element 0 index ke 2
?>
  <?php foreach($angka as $numbers): ?>
  <?php foreach($numbers as $number): ?>
  <div class="kotak"> <?= $number ?> </div>
  <?php endforeach; ?>
  <div class="clear"></div>
  <?php endforeach; ?>
</body>

</html>