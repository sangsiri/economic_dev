<?php


$request = "อาหาร";
$urlWithoutProtocol = "https://www.priceza.com/search?productdataname=".$request ;
$isRequestHeader = FALSE;
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlWithoutProtocol);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$productivity = curl_exec($ch);
curl_close($ch);

//$xml = '<h3 itemprop="name">Homemate เครื่องผสม<b>อาหาร</b> รุ่น HOM-150123</h3>';
//preg_match("/<span id=\"yfs_l10_usdthb=x\".*span>/", $productivity, $name);
preg_match('/<h3 itemprop="name">(.+?)<\/h3>/', $productivity, $name);
echo html_entity_decode($name[1]);
?>