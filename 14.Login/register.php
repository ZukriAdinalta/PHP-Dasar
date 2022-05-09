<?php
require_once __DIR__ . "/functions.php";

if(isset($_POST["register"])){
  if(registrasi($_POST) > 0){
    echo "
        <script>
        alert('Register Berhasil!');
        </script>
        ";
}else {
  echo mysqli_error($koneksi);
}
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Registrasi</title>
  <style>
  input {
    display: block;
  }
  </style>
</head>

<body>
  <h1>Halaman Registrasi</h1>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="username"> Username :
          <input type="text" name="username" id="username" required>
        </label>
      </li>
      <li>
        <label for="password"> Password :
          <input type="password" name="password" id="password" required>
        </label>
      </li>
      <li>
        <label for="password2"> Konfirmasi Password:
          <input type="password" name="password2" id="password2" required>
        </label>
      </li>

      <li>
        <button type="submit" name="register">Register</button>
      </li>
    </ul>
  </form>
</body>

</html>