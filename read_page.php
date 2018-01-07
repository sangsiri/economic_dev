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


$request = "format=csv&by=member&rs=hour&rk=productivity&rb=".$month_first_date."&re=".$cur_date = date('Y-m-d');
$urlWithoutProtocol = "https://www.rescuetime.com/anapi/data/?".$request ;
$isRequestHeader = FALSE;
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlWithoutProtocol);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$productivity = curl_exec($ch);

curl_close($ch);
print_r($productivity);

?>