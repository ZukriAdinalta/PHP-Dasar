<?php
session_start();
if(!isset($_SESSION["login"])){ // jika belum pernah login maka kembali ke halaman login
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="text-center mt-3">
    <h4>Selamat Datang <?= $_SESSION['nama']  ?> </h4>

  </div>
</body>

</html>