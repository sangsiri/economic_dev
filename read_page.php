<?php
$request = "format=csv&by=member&rs=hour&rk=productivity&rb=".$month_first_date."&re=".$cur_date = date('Y-m-d');
$urlWithoutProtocol = "https://www.rescuetime.com/anapi/data/?".$request ;
$isRequestHeader = FALSE;
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlWithoutProtocol);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$productivity = curl_exec($ch);
curl_close($ch);
?>