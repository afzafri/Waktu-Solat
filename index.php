<?php

//dapatkan isi dari API solat
$data = file_get_contents("http://solat.io/api/my/sgr03");

//decide data JSON API solat ke bentuk array, dan simpan dalam variable arr
$arr = json_decode($data,true);

//access isi array, dan simpan dalam variable tersendiri
$waktu_imsak = $arr['waktu_imsak'];
$waktu_subuh = $arr['waktu_subuh'];
$waktu_syuruk = $arr['waktu_syuruk'];
$waktu_zohor = $arr['waktu_zohor'];
$waktu_asar = $arr['waktu_asar'];
$waktu_maghrib = $arr['waktu_maghrib'];
$waktu_isyak = $arr['waktu_isyak'];
$zone = $arr['zone'];
$date = $arr['date'];

//display mcm biasa, pakai HTML ja, nak bagi cantik pun edit sini ja.
//contoh, $waktu_imsak. tu variable yang ada isi array tadi.

echo "
<h1>Waktu Solat</h1>
Imsak : $waktu_imsak <br>
Subuh : $waktu_subuh <br>  
Syuruk : $waktu_syuruk <br>
Zohor : $waktu_zohor <br>
Asar : $waktu_asar <br>
Maghrib : $waktu_maghrib <br>
Isyak : $waktu_isyak <br>
Zone : $zone <br>
Date : $date <br>

";


?>