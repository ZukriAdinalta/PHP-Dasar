<?php
require_once __DIR__ . "/koneksi.php";
function query($query){
  global $koneksi;
  $result = mysqli_query($koneksi, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row; // menambahkan element baru setiap array
  }
  return $rows;
}

function tambah($data){
  global $koneksi;
  
  // htmlspecialchars() => ketika user masukan scrict html maka akan di oleh oleh htmlspecialchars() 
  $nim = htmlspecialchars($data["nim"]);
  $nama = htmlspecialchars($data["nama"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $email = htmlspecialchars($data["email"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim',  '$email', '$jurusan', '$gambar')";
  mysqli_query($koneksi, $query);

  // cek data berhasil di tambah atau belum
  return mysqli_affected_rows($koneksi);
}

function hapus($id){
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
  // cek data berhasil di hapus
  return mysqli_affected_rows($koneksi);
}
?>