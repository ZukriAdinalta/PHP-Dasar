// $ = jquery atau kita bisa menuliskan langsung jquery(document)
$(document).ready(function () {
  // mehilangkan tombol cari
  $(`#tombol-cari`).hide();

  // event ketika keyword di tulis
  $("#keyword").on(`keyup`, function () {
    // munculkan icon loding
    $(`.loader`).show();
    /* ajak menggunakan load
    $(`#container`).load(`ajax/mahasiswa.php?keyword=` + $(`#keyword`).val()); */

    // ajak menggunakan $.get sama dengan menggunakan load
    $.get(`ajax/mahasiswa.php?keyword=` + $(`#keyword`).val(), function (data) {
      $(`#container`).html(data);
      $(`.loader`).hide();
    });
  });
});
