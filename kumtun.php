<?php

$gets  =  $_REQUEST['temp'];
$input =explode("-", $gets);
$temp = 500 /($input[1]-$input[0] ) ;
echo "คุณจะคุ้มทุนเมื่อขาย".number_format($temp, 2, '.', '')."ชิ้นที่ราคา".$input[1]."บาทต่อชิ้น"."เมื่อต้นทุนคงที่ทั้งหมด"."500"."บาท" ;

?>