<?php
/* Date/time => tanggal dan waktu
  1. time()
  2. date()
  3. mktime()
  4. strtotime()
*/
/* date() => untuk menapilkan tanggal dgn format tertentu
 l => Nama hari, d => tanggal hari ini, m => bulan, y =>tahun 
*/
echo "<h2> Date / Tanggal </h2>"; 
echo date('l, d-M-Y') . "</br>";

/* time() => waktu */
echo "<h2> Time / Waktu </h2>"; 
echo time() . "</br>"; // Unix Timestamp => detik yang sudah berlalu sejak 1 jan 1970 (sejk komputer ditemukan)
echo date("l", time()+172800) . "</br>"; // tampilkan hari ini dengan ditambah 172800 detik kedepan (172800 detik = 2hari kedepan)

/* mktime() => membuat sendiri detik 
mktime(0,0,0,0,0,0) => jam, menit, detik, bulan, tanggal, tahun 
*/
echo "<h2> Mktime </h2>"; 
echo mktime(0,0,0,10,12,1995) . "</br>"; // waktu yg berlalu semejak 1 jan 1970 sampai 10 des 1995
echo date('l',  mktime(0,0,0,10,12,1995)) . "</br>"; // hari pada tanggal 10 des 1995

/* strtotime()
 */
echo "<h2> Strtotime </h2>"; 
echo date("l", strtotime("10 des 1995")); // hari pada tanggal 10 des 1995
?>