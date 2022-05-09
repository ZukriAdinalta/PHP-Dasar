<?php
// cek apakah tombol submit telah di tekan atau belum
if(isset($_POST['submit'])){
  // cek usernama dan password
  if($_POST["username"] == "admin" && $_POST["password"] == "123"){
  // jika benar kita redirect ke admin
  header("location: admin.php");
  exit();
  }else{
  // jika salah tempilkan pesan kesalahan
  $error = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h1>Login Admin</h1>
  <?php if(isset($error)) : ?>
  <p style="color: salmon; font-style:italic;">Username atau Password Salah</p>
  <?php endif; ?>
  <ul>
    <form action="" method="POST">
      <li>
        <label for="username"> Username:
          <!-- for kita hubungi dengan id input ketika di klik username pd label maka langsung di arahkan ke input -->
          <input type="text" name="username" id="username">
        </label>
      </li>
      <li>
        <label for="password"> Password:
          <input type="password" name="password" id="password">
        </label>
      </li>
      <button type="submit" name="submit">Login</button>
    </form>
  </ul>
</body>

</html>