<?php
require_once __DIR__ . "/koneksi.php";

function registrasi($data){
  global $koneksi;

  $nama = htmlspecialchars($data["nama"]);
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($koneksi, $data["password"]);
  $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
  $email = htmlspecialchars($data["email"]);
  $no_hp = htmlspecialchars($data["no_hp"]);
  $alamat = htmlspecialchars($data["alamat"]);

  // cek username udh pernah di buat atau belum
  $result = mysqli_query($koneksi, "SELECT username fROM petugas WHERE username = '$username'");
  if(mysqli_fetch_assoc($result)){
    echo "
        <script>
        alert('Username sudah terdaftar');
        </script>
        ";
        return false;
  }
  //cek kofirmassi password
  if($password !== $password2){
    echo "
        <script>
        alert('Konfirmasi Password Tidak Sesuai');
        </script>
        ";
        return false;
  }

  //enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT); //password_hash => digunakan utk mengacak password menggunakan deskripsi tertentu
  // var_dump($password); die;

  //tambahkan userbaru ke database
  $query = "INSERT INTO petugas VALUES ('', '$nama', '$username', '$password' , '$email' , '$no_hp', '$alamat' )";
  mysqli_query($koneksi, $query);
  return mysqli_affected_rows($koneksi);
}
function query($query){
  global $koneksi;
  $result = mysqli_query($koneksi, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row; // menambahkan element baru setiap array
  }
  return $rows;
}
?>