$(document).ready(function () {
  $(".klik_menu").click(function () {
    var menu = $(this).attr("id");
    if (menu == "home") {
      $(".container").load("home.php");
    } else if (menu == "petugas") {
      $(".container").load("petugas.php");
    }
  });

  // halaman yang di load default pertama kali
  $(".container").load("home.php");
});
