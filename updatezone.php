<?php

$opts = array(
  'http' => array(
    'header' => "Upgrade-Insecure-Requests:1\r\n" .
                "User-Agent:Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36" .
                "(KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36\r\n"
  )
);

$a = file_get_contents("http://ijat.my/e-solat-xmljsonp-api", false, stream_context_create($opts));
$b = file_get_contents("http://solat.io/");
preg_match_all('#([A-Z1-9][^ ]*) (.*) -- (.[^\<&"\n]*)#', $a, $out);

$populate = array();

for($i = 0; $i < count($out[0]); ++$i) {
    if(stripos($b, $out[1][$i]) !== false) { // check klau wujud kt dlm web solat.io
        $populate[$out[2][$i]][$out[1][$i]] = $out[3][$i];
    }
}

file_put_contents("zone.json", json_encode($populate));

?>
