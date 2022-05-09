<?php
/* String
1. strlen() => menghitung panjang sebuah string
2. strcmp() => membadingkan sebuah string
3. explode() => memecah sebuah string
4. htmlspecialchars() => untuk menjaga website kita dr hacker.
*/
/* Utility
1. var_dump() => mecetak isi dr variabel, array.
2. isset() => mengecek apakah sebuah variabel telah pernah dibuat apa belum (nilai boolean)
3. empty() => apakah variabel yg ada kosong atau tidak
4. die() => utk menghentikan program kita, jika menggunakan die() maka program dibawahnya tidak di eksekusi
5. sleep() => utk menghentikan sementara program.
*/

// kalau variabel parameter di isi maka argument boleh kosong
function salam($waktu = "Datang", $name= "Admin"){ //parameter
  return "Selamat $waktu, $name";
}
// Ketika digunakan, maka eksekusi fungsi berhenti dan nilai dikembalikan (return) ke pemanggil fungsi. 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Function</title>
</head>

<body>
  <h1><?= salam("Siang", "Zukri") ?></h1> <!-- argument -->
</body>

</html>