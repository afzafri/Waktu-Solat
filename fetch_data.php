<?php

if(!empty($_GET['get_option'])) {

	$json = json_decode(file_get_contents("zon.json"), true);
	$html = "";

	foreach($json[$_GET['get_option']] as $kod => $kawasan) {
		$html .= "<option value='{$kod}'>{$kawasan}</option>\n";
	}

	echo $html;
}
?>
