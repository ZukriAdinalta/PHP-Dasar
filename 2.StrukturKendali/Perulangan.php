<?php
/* Pengulangan
1. for
2. while
3. do .. while
4. foreach => penguangan khusus array
*/
for($i = 0; $i < 5; $i++){ // i dimulai dari dengan 5x perulangan. $i++ (ditambah 1) 
  echo "Pengulangan For! <br>";
}

$i = 0;
while($i < 5 ){
  echo "Pengulangan While! <br>";
  $i ++;
}

$j = 0;
do{
  echo "Pengulangan do while! <br>";
  $j++;
}while($j < 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perulangan</title>
</head>

<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php 
        for($i = 1; $i <= 3; $i++){
          echo "<tr>";
          for($j = 1; $j <= 5; $j++){
            echo "<td> $i,$j</td>"; // $i baris $j kolom
          }
          echo "</tr>";
        }
      ?>
  </table>
  </br>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php for($i=1; $i<=3; $i++){ ?>
    <tr>
      <?php for($j=1; $j<=5; $j++){ ?>
      <td><?= "$i,$j" ?></td>
      <?php }?>
    </tr>
    <?php }?>
  </table>
</body>

</html>