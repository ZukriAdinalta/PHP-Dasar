<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  .warna {
    color: red;
  }
  </style>
  <title>Latihan 2</title>
</head>

<body>
  <?php for($i =1; $i <= 10; $i++): ?>
  <?php if($i % 2 == 0): ?>
  <?= "<p class='warna'> $i </p>" ?>
  <?php else: ?>
  <?= "$i" ?>
  <?php endif; ?>
  <?php endfor; ?>

  <?php
	$star=10;
	for($a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo " ";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}
?>

</body>

</html>