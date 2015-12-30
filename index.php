<!--
Created By : Afif Zafri
Date : 30/12/2015
Contact Me : http://fb.me/afzafri
API provided by : http://Solat.IO
References :  http://ijat.my/e-solat-xmljsonp-api, http://stackoverflow.com/
Sensei : Mohd Shahril
-->
<html>
<head>
<title>Waktu Solat</title>

<!-- function ajax for dropdown*/ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
function fetch_select(val)
{
   $.ajax({
     type: 'get',
     url: 'fetch_data.php?get_option='.concat(val),
     success: function (response) {
       document.getElementById("pilih_zone").innerHTML=response;
     }
   });
}
</script>

<!--css untuk table -->
<style>
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
	padding: 10px;
	 text-align: left;
}
</style>
</head>
<body>
<center>
<h1>Waktu Solat</h1>

<form action="index.php" method="post">

<!-- pilih negeri -->
<select name='pilih_negeri' onchange="fetch_select(this.value);">
<option value=''>Pilih Negeri</option>
<option value="jhr">Johor</option>
<option value="kdh">Kedah</option>
<option value="ktn">Kelantan</option>
<option value="kl">Kuala Lumpur</option>
<option value="wly">Labuan</option>
<option value="mlk">Melaka</option>
<option value="ngs">Negeri Sembilan</option>
<option value="phg">Pahang</option>
<option value="prk">Perak</option>
<option value="pls">Perlis</option>
<option value="png">Pulau Pinang</option>
<option value="ptj">Putrajaya</option>
<option value="sbh">Sabah</option>
<option value="swk">Serawak</option>
<option value="sgr">Selangor</option>
<option value="trg">Terengganu</option>
</select>

<!-- pilih zone -->
<select id='pilih_zone' name='pilih_zone' onchange="this.form.submit()">
</select>


</form>

<?php

if(!empty($_POST['pilih_zone']))
{
	//dapatkan pilihan zone
	$option = $_POST['pilih_zone'];

	//dapatkan data JSON dari API solat.io
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

	//strtotime() akan convert nilai String ke bentuk Time, supaya dapat guna
	//function date()
	//function date() untuk convert 24 hour to 12 hour, dan display am/pm
	$imsak = date('h:i', strtotime($waktu_imsak));
	$subuh = date('h:i', strtotime($waktu_subuh));
	$syuruk = date('h:i', strtotime($waktu_syuruk));
	$zohor = date('h:i', strtotime($waktu_zohor));
	$asar = date('h:i', strtotime($waktu_asar));
	$maghrib = date('h:i', strtotime($waktu_maghrib));
	$isyak = date('h:i', strtotime($waktu_isyak));

	//display mcm biasa, pakai HTML ja, nak bagi cantik pun edit sini ja.
	//contoh, $waktu_imsak. tu variable yang ada isi array tadi.

	echo "

	<table>
	<tr>
	<th>Imsak :</th><td>$imsak am</td>
	</tr>
	<tr>
	<th>Subuh :</th><td>$subuh am</td>
	</tr>
	<tr>
	<th>Syuruk :</th><td>$syuruk am</td>
	</tr>
	<tr>
	<th>Zohor :</th><td>$zohor pm</td>
	</tr>
	<tr>
	<th>Asar :</th><td>$asar pm</td>
	</tr>
	<tr>
	<th>Maghrib :</th><td>$maghrib pm</td>
	</tr>
	<tr>
	<th>Isyak :</th><td>$isyak pm</td>
	</tr>
	<tr>
	<th>Zone :</th><td>$zone</td>
	</tr>
	<tr>
	<th>Date :</th><td>$date</td>
	</tr>
	</table>

	";
}



?>
<br><br><br><rb>
<font>Created by Afif Zafri</font>
</center>
</body>
</html>
