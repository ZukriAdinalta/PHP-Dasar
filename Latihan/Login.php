<?php
session_start();
if(isset($_SESSION["login"])){ 
  header("Location: index.php");
  exit;
}

require_once __DIR__ . "/function.php";

if (isset($_POST["login"])){
  
  // mengecek apakah ada username tertentu di database
  $username = mysqli_real_escape_string($koneksi, $_POST["username"]);
  $password = $_POST["password"];

  $result = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username = '$username'");
  if(mysqli_num_rows($result) === 1){ //mysqli_num_rows() => menghitung ada berapa baris yg dikembalikan dr funsi select klau ketemu nilai 1 kalau tdk ada 0 

    //cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])){ // verikasi password di input dengan password yg ada di database
      //set session
      $_SESSION["login"] = true; // kalau behasil login maka dia masuk kehalam ke belum mka tdk di perbolehkan
      $_SESSION['nama']    = $row['nama'];
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
  <title>Login</title>
  <!-- css -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />

  <!-- jss -->
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="login-form">
    <form action="" method="POST">
      <h2>Halaman Login</h2>
      <?php if(isset($error)): ?>
      <p style="color: red; font-style:italic;">Username dan Password salah</p>
      <?php endif; ?>
      <div class="mb-3 ">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3 ">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3  form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>
  </div>
</body>

</html>