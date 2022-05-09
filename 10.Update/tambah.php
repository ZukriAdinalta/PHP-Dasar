<?php
require_once __DIR__ . "/functions.php";

// cek submit udh ditekan atau belum
if(isset($_POST["submit"])){
// cek data berhasil di tambah atau belum

if(tambah($_POST) > 0){
  echo "
        <script>
        alert('Data Berhasil Di Simpan!');
        document.location.href = 'index.php';
        </script>
        ";
}else {
  echo "
        <script>
        alert('Data Gagal Di Simpan!');
        document.location.href = 'index.php';
        </script>
        ";
}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h1>Tambah Data Mahasiswa</h1>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="nim"> Nim :
          <input type="text" name="nim" id="nim" required>
        </label>
      </li>
      <li>
        <label for="nama"> Nama :
          <input type="text" name="nama" id="nama" required>
        </label>
      </li>
      <li>
        <label for="email"> Email :
          <input type="text" name="email" id="email" required>
        </label>
      </li>
      <li>
        <label for="jurusan"> Jurusan :
          <input type="text" name="jurusan" id="jurusan" required>
        </label>
      </li>
      <li>
        <label for="gambar"> Gambar :
          <input type="text" name="gambar" id="gambar">
        </label>
      </li>
    </ul>
    <button type="submit" name="submit">Simpan</button>
  </form>

</body>

</html>