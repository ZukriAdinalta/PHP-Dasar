<?php
require_once __DIR__ . "/koneksi.php";

// Menapilkan Data
function query($query){
  global $koneksi;
  $result = mysqli_query($koneksi, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row; // menambahkan element baru setiap array
  }
  return $rows;
}

// Tambah Data
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

// Hapus Data
function hapus($id){
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
  // cek data berhasil di hapus
  return mysqli_affected_rows($koneksi);
}

// Edit Data
function edit($data){
  global $koneksi;
  $id = ($data["id"]);
  $nim = htmlspecialchars($data["nim"]);
  $nama = htmlspecialchars($data["nama"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $email = htmlspecialchars($data["email"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim',  email = '$email', jurusan = '$jurusan', gambar = '$gambar' WHERE id = $id";
  mysqli_query($koneksi, $query);

  // cek data berhasil di tambah atau belum
  return mysqli_affected_rows($koneksi);
}

// Cari Data
function cari($keyword){

  $query = " SELECT * FROM mahasiswa 
            WHERE
            nama LIKE '%$keyword%' OR 
            nim LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' 
            ";
  // like % %=> maka semuanya tampil walapun  gk lekap
  return query($query);
  
}
?>