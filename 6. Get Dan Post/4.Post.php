<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post</title>
</head>

<body>
  <?php if(isset($_POST['submit'])) : // jika submit di tekan maka ?>
  <h1>Hello <?= $_POST["name"]?>!</h1>
  <?php endif; ?>
  <!-- post => menyimpan data di luar layar/link, sedangkan get =>mengirim data di link -->
  <!-- jika action tidak dibuat atau diisi maka data post dikirim di halaman ini -->
  <form action="" method="POST">
    Masukan Nama :
    <input type="text" name="name">
    <button type="submit" name="submit">Kirim</button>
  </form>
</body>

</html>