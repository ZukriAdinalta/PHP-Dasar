<?php

// PHP Dasar
// Sintaks PHP

/*Standar Ouput
1. echo, print => digunakan mencetak tulisan atau variabel dll
2. print_r => utk mencetak isi array
3. var_dum => utk melihat isi  variabel dan menapilkan isi variabel
*/

// Contoh
echo "Zukri Adinalta ";  // menggunakan echo bisa menggunakan kutip satu ('') dan kutip dua ("")
print "Zukri Adinalta ";
print_r("Zukri Adinalta ");
var_dump("Zukri Adinalta");

/* Penulisan Sintaks di PHP
1. PHP di dalam html
2. HTML di dalam PHP
 */

 /* Variabel dan Tipe Data
 1. Variabel => di dlm php utk membuat variabel kita menulisannya dgn $namaVariabel
 2. tidak boleh diawali dgn angka ($1nama), tapi boleh mengadung angka ($nama1) 
*/
// menulis Variabel
$name = "Zukri Adinalta";

/* Opertor
1. Aritmatika (+ - / * %)
2. Pengabungan String / concatenation / concat => mengunakan titik (.)
3. Assignment => operator penugasan (=, +=, -=, *= /= %= .=)
4. Perbadingan => (<, >, <=, >=, == )
5. Identitas => untuk mengecek type data (=== dan !==)
6. Logika => and (&&) => harus bernilai true, or (||), not (!)
 */
// Aritmatika
$a = 10;
$b = 2;

// Pengabungan string
$nama_depan = "Zukri";
$namaa_belakang = "Adinalta";

// Assignment
$x = 10;
$x += 2; // =, +=, -=, *= /= %=

$nama = "Zukri";
$nama .= "";
$nama .= "Adinalta";

// Perbadingan 
$c = 3;
$d = 5;

// Identitas
$e = 3;
$f = "5";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sintak PHP</title>
</head>

<body>
  <!-- PHP Di dalam Html -->
  <h1>Hello, <?php echo" Budi " ?></h1>
  <p><?php echo "Ini adalah paragraf" ?></p>

  <!-- HTML Didalam PHP -->
  <?php  echo "<h4> Hello, Zukri Adinalta </h4>" ?>

  <!-- Implementasi Variabel -->
  <h4>Hello, <?php echo" $name " ?></h4>

  <!-- Implementasi Aritmatika -->
  <h1>Aritmatika</h1>
  <p>10 + 2 = <?php echo $a + $b ?></p>
  <p>10 - 2 = <?php echo $a - $b ?></p>
  <p>10 / 2 = <?php echo $a / $b ?></p>
  <p>10 * 2 = <?php echo $a * $b ?></p>
  <p>10 % 2 = <?php echo $a % $b ?></p>

  <!-- Implementasi Penggabungan string -->
  <h1>Concatenation</h1>
  <p><?php echo $nama_depan . " " . $namaa_belakang ?></p>

  <!--Implementasi Assignment -->
  <h1>Assignment</h1>
  <p> 10 + 2 = <?php echo $x ?></p>
  <p> Nama : <?php echo $nama ?></p>

  <!--Implementasi Perbadingan-->
  <h1>Perbadingan</h1>
  <p>3 < 5=<?php var_dump($c < $d) ?> </p>
      <p>3 > 5 = <?php var_dump($c > $d) ?> </p>
      <p>3 <= 5=<?php var_dump($c <= $d) ?> </p>
          <p>3 >= 5 = <?php var_dump($c >= $d) ?> </p>
          <p>3 == 5 = <?php var_dump($c == $d) ?> </p>

          <!--Implementasi Identitas-->
          <h1>Identitas</h1>
          <p>3 === "5" = <?php var_dump($e === $f) ?> </p>
          <p>3 !== "5" = <?php var_dump($e !== $f) ?> </p>
</body>

</html>