<?php
// Cara sederhana
require_once __DIR__ . "/koneksi.php";

// cek submit udh ditekan atau belum
if(isset($_POST["submit"])){
  // var_dump($_POST); // cek submit udh jalan atau belum
  //ambil data dari tiap element dalam form
  $nim = $_POST["nim"];
  $nama = $_POST["nama"];
  $jurusan = $_POST["jurusan"];
  $email = $_POST["email"];
  $gambar = $_POST["gambar"]; 

  // query insert data (simpan data)
  $query = "INSERT INTO mahasiswa
            VALUES
            ('', '$nama', '$nim',  '$email', '$jurusan', '$gambar')";
  mysqli_query($koneksi, $query);

  // cek data berhasil di tambah atau belum
  if(mysqli_affected_rows($koneksi) > 0){
    echo "Berhasil";
  }else{
    echo "Gagal";
    echo "</br>";
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
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h1>Tambah Data Mahasiswa</h1>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="nim"> Nim :
          <input type="text" name="nim" id="nim">
        </label>
      </li>
      <li>
        <label for="nama"> Nama :
          <input type="text" name="nama" id="nama">
        </label>
      </li>
      <li>
        <label for="email"> Email :
          <input type="text" name="email" id="email">
        </label>
      </li>
      <li>
        <label for="jurusan"> Jurusan :
          <input type="text" name="jurusan" id="jurusan">
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