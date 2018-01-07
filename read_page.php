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
    
    preg_match_all('/<h3 itemprop="name">(.+?)<\/h3>/', $productivity, $name, PREG_SET_ORDER);
    $count = 1 ;

    $search  = array('<b>', '</b>');
    $temp = '' ;

    foreach ($name as $val) {
        $text = str_replace($search, '',$val[1]);
        $temp = $temp.$text.'\n';
        $count++;
        if($count > 5)
        break;
    }
    echo $temp;
?>
