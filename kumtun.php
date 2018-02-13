<?php
function multiexplode ($delimiters,$string) {
    
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

$gets  =  $_REQUEST['temp'];
$input = multiexplode(array(" ","-"), $gets);
$temp = 500 /($input[2]-$input[1] ) ;
echo "คุณจะคุ้มทุนเมื่อขาย".$temp."ชิ้นที่ราคา".$input[2]."บาทต่อชิ้น"."เมื่อต้นทุนคงที่ทั้งหมด"."500"."บาท" ;

?>