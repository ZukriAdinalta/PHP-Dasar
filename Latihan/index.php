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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <!-- css -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <!-- jss -->
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/javascript.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- navbar-expand-lg membuat menu jadi reponsive. lg kode breakpoints. (sm, md, lg, xl, xxl) -->
    <!-- Navbar-light (Warna Tulisan warna hitam) dan Navbar-dark(warna tulisan putih) -->
    <!-- bg (singkatan backgroud) untuk lihat warna bg lihat di bagian /utilities->background/ -->
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" />
        Perpustakaan
      </a>
      <!-- navbar-brand untuk mendefinisikan judul website dan bisa berupa gambar/logo website. -->

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- button ini berfungsi ketika websitenya responsive maka akan muncul icon garis (navbar-toggler-icon) -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-start mb-2 mb-lg-0 menu">
          <li class="nav-item">
            <a class="nav-link active klik_menu" aria-current="page" id="home" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link klik_menu" id="petugas">Petugas</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false"> <?= $_SESSION['nama']  ?> </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex ms-auto">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">

  </div>

</body>

</html>