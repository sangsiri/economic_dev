<?php

$request = "อาหาร";
$urlWithoutProtocol = "https://www.priceza.com/search?productdataname=".$request ;
$isRequestHeader = FALSE;
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlWithoutProtocol);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$productivity = curl_exec($ch);

//preg_match("/<span id=\"yfs_l10_usdthb=x\".*span>/", $productivity, $name);
preg_match('/<h3 itemprop="name">(.+?)</h3>/', $productivity, $name);
curl_close($ch);
print_r($name);

?>