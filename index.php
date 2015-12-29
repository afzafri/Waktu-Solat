<html>
  <head>
    <title>Waktu Solat</title>
  </head>
<body>
  
<h1>Waktu Solat</h1>

<form action="solat.php" method="post">
<select name='pilih' onchange="this.form.submit()">
<option value=''>Pilih Negeri</option>

<option value="pls01">Perlis</option>
<option value="png01">Pulau Pinang</option>
<option value="sgr04">Putrajaya</option>
</select>
</form>

<?php

if(isset($_POST['pilih']))
{
	//dapatkan pilihan
	$option = $_POST['pilih'];

	//dapatkan isi dari API solat
	//variable $option untuk code zone
	
	$data = file_get_contents("http://solat.io/api/my/$option");

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
}

?>

</body>
</html>
