<?php
require_once __DIR__ . "/functions.php";

if (isset($_POST["login"])){
  
  // mengecek apakah ada username tertentu di database

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
  if(mysqli_num_rows($result) === 1){ //mysqli_num_rows() => menghitung ada berapa baris yg dikembalikan dr funsi select klau ketemu nilai 1 kalau tdk ada 0 
  
    //cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])){ // verikasi password di input dengan password yg ada di database
      header("Location: index.php");
      exit;
    }
  }


  $error = true;

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
</head>

<body>
  <h1>Halaman Login</h1>

  <?php if(isset($error)): ?>
  <p style="color: red; font-style:italic;">Username dan Password salah</p>
  <?php endif; ?>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="username">Username:
          <input type="text" name="username" id="username">
        </label>
      </li>
      <li>
        <label for="password">Password:
          <input type="password" name="password" id="password">
        </label>
      </li>
      <li><button type="submit" name="login">Login</button></li>
    </ul>
  </form>
</body>

</html>