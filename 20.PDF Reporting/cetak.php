<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . "/functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

$mpdf = new \Mpdf\Mpdf();
$print = '

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="css/print.css">
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Nim</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>';
    
    foreach($mahasiswa as $row){
      $print .= '<tr>
          <td>'. $i++ .'</td>
          <td><img src="img/'. $row["gambar"] .'" width="50px"></td>
          <td>'. $row["nama"] .'</td>
          <td>'. $row["nim"] .'</td>
          <td>'. $row["email"] .'</td>
          <td>'. $row["jurusan"] .'</td>
          </tr>';
}

$print .= ' </table>
</body>

</html>';

$mpdf->WriteHTML($print);
$mpdf->Output('daftar-mahasiswa.pdf', 'I');

?>