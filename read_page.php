<?php

$curl = curl_init('http://finance.yahoo.com/q?s=USDTHB=X'); 
curl_setopt($curl, CURLOPT_FAILONERROR, true); 
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); 
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);   
$result = curl_exec($curl); 
curl_close($curl);
preg_match("/<span id=\"yfs_l10_usdthb=x\".*span>/", $result, $matches1);
print_r($matches1);

?>