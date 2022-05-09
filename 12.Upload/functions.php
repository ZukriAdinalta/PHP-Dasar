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

  // upload gambar
  $gambar = upload();
  if(!$gambar){
    return false;
  } // jika gambar menghasilkan false maka upload gagal

  $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim',  '$email', '$jurusan', '$gambar')";
  mysqli_query($koneksi, $query);

  // cek data berhasil di tambah atau belum
  return mysqli_affected_rows($koneksi);
}

function upload(){

  $namaFile = $_FILES['gambar']['name']; // gambar => name input dan name => array $_Files
  $sizeFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tdk ada data yang di upload
  if($error === 4){
    echo "
        <script>
        alert('Pilih Gambar Terlebih Dahulu');
        </script>
        ";
    return false;
  }

  // cek apakah yang di upload adalah gambar
  $gambarValid = ['jpeg', 'jpg', 'png']; // variabel format apa aja yg boleh di upload
  $eksensiGambar = explode(".", $namaFile); // memecah string menjadi array
  $eksensiGambar = strtolower(end($eksensiGambar)); // strtolower(menjadikan JPG = jpg) dan end($eksensiGambar) => mengambil nama terakhir EX:zukri.adinalta.jpg maka yg diambil jpgnya saja
  if(!in_array($eksensiGambar, $gambarValid)){ // in_array => mengecek apakah ada string di sebuah array
    echo "
        <script>
        alert('Yang Diupload Bukan Gambar');
        </script>
        ";
    return false;
  }
  // cek jika ukuran telalu besar
  if($sizeFile > 1000000){ // ukuran file byte
    echo "
        <script>
        alert('Ukuran File Terlalu Besar');
        </script>
        ";
    return false;
  }

  // lolos pengecekan maka ngambar siap di upload
  // generate nama gambar baru
  $namaFileBaru = uniqid(); // bikin nama string nomor acak 
  $namaFileBaru .= ".";
  $namaFileBaru .= $eksensiGambar;
  // var_dump($namaFileBaru); die;
  move_uploaded_file($tmpName, 'img/'.$namaFileBaru); // upload gambar di folder img/ dengan nama file yang sama
  return $namaFileBaru; // jika berhasil maka nama gambar di masukan di database.


}

function hapus($id){
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
  // cek data berhasil di hapus
  return mysqli_affected_rows($koneksi);
}

function edit($data){
  global $koneksi;
  $id = ($data["id"]);
  $nim = htmlspecialchars($data["nim"]);
  $nama = htmlspecialchars($data["nama"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $email = htmlspecialchars($data["email"]);
  $gambarLama = $data["gambarLama"];

  //Cek apakah user pilih gambar baru atau tidak
  if($_FILES['gambar']['error'] === 4){
    $gambar = $gambarLama;
  }else{
    $gambar = upload();
  }

  $query = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim',  email = '$email', jurusan = '$jurusan', gambar = '$gambar' WHERE id = $id";
  mysqli_query($koneksi, $query);

  // cek data berhasil di tambah atau belum
  return mysqli_affected_rows($koneksi);
}

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