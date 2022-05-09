<?php
// Variable Scope/ linkup Vriable
$x = 10;

function tampilx(){ // function cuma mengambil variable lokal/ yang ada di dlm functionnya saja 
  global $x; // global akan mencari variable yg diluar function
  echo $x;
}

tampilx();
echo "</br>";

// SUPERGLOBAL => variable global milik PHP
// merupakan associative array
var_dump($_GET);
echo "</br>";
var_dump($_POST);
?>