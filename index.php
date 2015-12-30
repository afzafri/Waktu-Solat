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
<option value="Johor">Johor</option>
<option value="Kedah">Kedah</option>
<option value="Kelantan">Kelantan</option>
<option value="Kuala Lumpur">Kuala Lumpur</option>
<option value="Labuan">Labuan</option>
<option value="Melaka">Melaka</option>
<option value="Negeri Sembilan">Negeri Sembilan</option>
<option value="Pahang">Pahang</option>
<option value="Perak">Perak</option>
<option value="Perlis">Perlis</option>
<option value="Pulau Pinang">Pulau Pinang</option>
<option value="Putrajaya">Putrajaya</option>
<option value="Sabah">Sabah</option>
<option value="Serawak">Serawak</option>
<option value="Selangor">Selangor</option>
<option value="Terengganu">Terengganu</option>
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
	$arrs = json_decode($data,true);

    echo "<table>\n";

    foreach($arrs as $title => $arr) {

        $title_edit = ucwords(str_replace('waktu_', ' ', $title));

        // check jika ada word "waktu"
        if(stripos($title, "waktu") !== FALSE) {
            $value = date('h:i', strtotime($arr));
            $value .= explode(':', $arr)[0] <= 12 ? ' a.m.' : ' a.m.'; // bubuh am atau pm
        } else {
            $value = $arr;
        }

        echo "
        <tr>
    	<th>{$title_edit} :</th><td>{$value}</td>
    	</tr>
    	<tr>";
    }

    echo "</table>";
}



?>
<br><br><br><rb>
<font>Created by Afif Zafri</font>
</center>
</body>
</html>
