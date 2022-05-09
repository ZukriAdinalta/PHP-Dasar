<?php
session_start();
if(!isset($_SESSION["login"])){ // jika belum pernah login maka kembali ke halaman login
  header("Location: login.php");
  exit;
}

require_once __DIR__ . "/function.php";

if (isset($_POST['simpan'])){
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

$petugas = query("SELECT * FROM petugas ORDER BY id ASC");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <!-- jss -->
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <title>Input Data Petugas</title>
</head>

<body>

  <div class="text-center mt-3">
    <h2>Input Data Petugas</h2>
    <form action="" class="form-horizontal" method="POST">

      <div class="row mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Inputkan Nama">
        </div>
      </div>

      <div class="row mb-3">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="username" name="username" placeholder="Inputkan username">
        </div>
      </div>

      <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" placeholder="Inputkan email">
        </div>
      </div>

      <div class="row mb-3">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name="password" placeholder="Inputkan password">
        </div>
      </div>

      <div class="row mb-3">
        <label for="password2" class="col-sm-2 col-form-label">Konfirmasi Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password2" name="password2" placeholder="Inputkan password">
        </div>
      </div>

      <div class="row mb-3">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Inputkan alamat">
        </div>
      </div>

      <div class="row mb-3">
        <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Inputkan No HP">
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
    </form>

    <table class="table table-bordered mt-2">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Alamat</th>
          <th scope="col">No HP</th>
          <th scope="col">Aksi</th>

        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach($petugas as $row ):?>
        <tr>
          <th scope="row"><?= $i ?></th>
          <td><?= $row["nama"] ?></td>
          <td><?= $row["username"] ?></td>
          <td><?= $row["email"] ?></td>
          <td><?= $row["alamat"] ?></td>
          <td><?= $row["no_hp"] ?></td>
          <td>
            <a href="">Edit</a> |
            <a href=" ">Delete</a>
          </td>
        </tr>
        <tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>