<?php
require_once __DIR__ . "/functions.php";
// cek cokie apakah masih ada atau tidak
// if(isset($_COOKIE["login"])){
//   if($_COOKIE['login'] == 'true'){
//     $_SESSION['login'] = true;
//   }
// }

if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  //ambil username bedasarkan idnya
  $result = mysqli_query($koneksi, "SELECT username FROM user where id = '$id'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($key === hash('sha256', $row['username'])){ // jika $key(username yg diacak) sm dengan database username maka masuk ke session
    $_SESSION['login'] = true;
  }
}

// jalan kan dulu session 
session_start();
if(isset($_SESSION["login"])){ // jika sudah pernah login maka kembali ke halaman index
  header("Location: index.php");
  exit;
}


if (isset($_POST["login"])){
  
  // mengecek apakah ada username tertentu di database
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
  if(mysqli_num_rows($result) === 1){ //mysqli_num_rows() => menghitung ada berapa baris yg dikembalikan dr funsi select klau ketemu nilai 1 kalau tdk ada 0 
  
    //cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])){ // verikasi password di input dengan password yg ada di database
      //set session
      $_SESSION["login"] = true; // kalau behasil login maka dia masuk kehalam ke belum mka tdk di perbolehkan

      //cek remember me (cookie)
      if(isset($_POST["remember"])){
        //buat cookienya
        //setcookie('login', 'true', time()+60); // key=>login value=>true time()+60=>waktu cookie 60detik
       setcookie('id', $row['id'], time()+60);
       setcookie('key', hash('sha256', $row['username']), time()+60);
      }

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
      <li>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember Me</label>
      </li>
      <li><button type="submit" name="login">Login</button></li>
    </ul>
  </form>
</body>

</html>