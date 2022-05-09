<?php
/* Percabangan / Pengkondisain => utk menentukan apa yg tejadi ketika kita membuat sebuah penyataan yang bernilai true dan false.  
1. if else
2. if else if else
3. ternary
4. switch
*/
// 1. if else
$x = 10;
if($x <10){
  echo "Benar "; // jika bernilai benar
}else{
  echo "Salah "; // jika bernilai salah
}
echo "<br>";
//2. if else if else
if($x < 10){
  echo "Benar "; // jika bernilai benar
}else if ($x == 10){
  echo "Nilai sama";
}else{
  echo "Salah"; // jika bernilai salah
}

?>