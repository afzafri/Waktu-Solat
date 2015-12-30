<?php

if(!empty($_GET['get_option'])) {

	$json = json_decode(file_get_contents("zone.json"), true);
	$html = "<option value=''>Pilih Zon</option>";

	foreach($json[strtoupper($_GET['get_option'])] as $kod => $kawasan) {
		$html .= "<option value='{$kod}'>{$kawasan}</option>\n";
	}

	echo $html;
}
?>
