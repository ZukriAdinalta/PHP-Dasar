<?php
require_once __DIR__ . "/functions.php";

// Ambil data di URL
$id =$_GET["id"];

// query data mahasiswa berdasarkan idnya
$msh = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($msh[0]["nim"]);

// cek submit udh ditekan atau belum
if(isset($_POST["submit"])){


// cek data berhasil di edit
if(edit($_POST) > 0){
  echo "
        <script>
        alert('Data Berhasil Di Edit!');
        document.location.href = 'index.php';
        </script>
        ";
}else {
  echo "
        <script>
        alert('Data Gagal Di Edit!');
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
  <h1>Edit Data Mahasiswa</h1>
  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <input type="hidden" name="id" value="<?= $msh["id"] ?>">
      <input type="hidden" name="gambarLama" value="<?= $msh["gambar"] ?>">
      <li>
        <label for="nim"> Nim :
          <input type="text" name="nim" id="nim" required value="<?= $msh["nim"] ?>">
        </label>
      </li>
      <li>
        <label for="nama"> Nama :
          <input type="text" name="nama" id="nama" required value="<?= $msh["nama"] ?>">
        </label>
      </li>
      <li>
        <label for="email"> Email :
          <input type="text" name="email" id="email" required value="<?= $msh["email"] ?>">
        </label>
      </li>
      <li>
        <label for="jurusan"> Jurusan :
          <input type="text" name="jurusan" id="jurusan" required value="<?= $msh["jurusan"] ?>">
        </label>
      </li>
      <li>
        <label for="gambar"> Gambar : <br>
          <img src="img/<?= $msh["gambar"] ?>" width="60"> <br>
          <input type="file" name="gambar" id="gambar">
        </label>
      </li>
    </ul>
    <button type=" submit" name="submit">Edit Data</button>
  </form>

</body>

</html>