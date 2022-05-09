// ambil elemen2 yg dibutuhkan
let keyword = document.getElementById(`keyword`);
let tombolCari = document.getElementById(`tombol-cari`);
let container = document.getElementById(`container`);

// tambahkan event ketika keyword di tulis
keyword.addEventListener(`keyup`, function () {
  // membuat object ajax
  let ajax = new XMLHttpRequest();

  // membuat kesiapan ajanya
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      container.innerHTML = ajax.responseText;
    }
  };

  //eksekusi ajax
  ajax.open(`GET`, `ajax/mahasiswa.php?keyword=` + keyword.value, true);
  ajax.send();
});
